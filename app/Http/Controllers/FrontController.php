<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Appointment;
use App\Models\Bank;
use App\Models\Package;
use App\Models\Post;
use App\Models\Status;
use App\Models\Zodiac;
use App\Services\AppointmentService;
use App\Services\MediaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class FrontController extends Controller
{
    private $appointmentSvc, $mediaSvc;

    public function __construct(AppointmentService $appointmentSvc, MediaService $mediaSvc)
    {
        $this->appointmentSvc = $appointmentSvc;
        $this->mediaSvc = $mediaSvc;
    }

    public function index()
    {
        $packages = Package::with(['astrologer', 'currency'])
            ->latest()
            ->get()
            ->take(4);

        // $posts = PostResource::collection(Cache::remember('posts', 60, function () {
        //     return Post::with(['category', 'user'])
        //         ->latest()
        //         ->get()
        //         ->take(6);
        // }));

        $posts = Post::with(['category', 'user'])
            ->published()
            ->latest()
            ->get()
            ->take(6);

        $zodiacs = Zodiac::orderBy('id', 'asc')->get();

        return view('front', [
            'packages' => $packages,
            'posts' => $posts,
            'zodiacs' => $zodiacs,
        ]);
    }

    public function makeAppointment()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        } else {
            $weekdays = Status::isType('weekdays')->orderBy('id', 'asc')->get();
            $genders = Status::isType('sex')->orderBy('id', 'asc')->get();
            $packages = Package::with(['astrologer', 'currency'])
                ->orderBy('name')
                ->get();

            return view('appointment.index', compact('weekdays', 'genders', 'packages'));
        }
    }

    public function makeAppointmentStore(Request $request)
    {
        $request->validate([
            'packages' => 'required',
            'packages.*' => 'numeric|exists:packages,id',
            'dob' => 'required|date|date_format:Y-m-d|before:tomorrow',
            'email' => 'nullable|email',
            'gender' => 'required|numeric|exists:statuses,id',
            'weekday' => 'required|numeric|exists:statuses,id',
            'desc' => 'required|string',
            'social' => 'required|string'
        ]);

        // $reg = 'regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';  https validation

        try {
            DB::beginTransaction();

            $appointment = $this->appointmentSvc->store($request->all());

            DB::commit();

            return redirect()->route('booked', ['appointment_id' => $appointment->appointment_no]);
        } catch (\Exception $e) {
            DB::rollBack();
            // do error page
            return $e->getMessage();
        }
    }

    public function bookedCompleted()
    {
        if (request('appointment_id')) {
            $appointment = Appointment::with('appointment_packages')
                ->where('appointment_no', request('appointment_id'))
                ->first();
            $paymentypes = Bank::notDisabled()->get();
            $pendingStatus = Status::isType('status')->where('slug', 'pending')->first();

            if ($appointment->is_paid == 0 && $pendingStatus->id == $appointment->status_id) {
                return view('appointment.completed', compact('appointment'));
            } else {
                return view('appointment.booked', compact('appointment', 'paymentypes'));
            }
        } else {
            return redirect()->route('error');
        }
    }

    public function bookedPayment(Request $request, $appointment_no)
    {
        $request->validate([
            'transaction_no' => 'required|string',
            'transaction_img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'paymentype' => 'required|numeric|exists:banks,id'
        ]);

        $appointment = Appointment::where('appointment_no', $appointment_no)->first();
        try {
            DB::beginTransaction();
            if ($appointment) {

                $pendingStatus = Status::isType('status')->where('slug', 'pending')->first();

                $appointment->update([
                    'transaction_no' => $request->transaction_no,
                    'paymentype_id' => $request->paymentype,
                    'status_id' => $pendingStatus->id
                ]);

                if ($request->hasFile('transaction_img')) {
                    $mediaFormdata = [
                        'media' => $request->file('transaction_img'),
                        'type' => "payment",
                    ];

                    $url = $this->mediaSvc->storeMedia($mediaFormdata);

                    $appointment->update([
                        'transaction_image' => $url
                    ]);
                }

                DB::commit();

                return redirect()->route('booked.completed', ['appointment_id' => $appointment->appointment_no]);
            } else {
                DB::rollBack();
                return redirect()->route('error');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function blogsList()
    {
        $post = Post::with(['category', 'user'])
            ->published()
            ->orderBy('id', 'desc')
            ->first();

        $posts = Post::query()
            ->with(['category', 'user'])
            ->filterOn()
            ->orderBy('id', 'desc')
            ->where('id', '!=', $post->id)
            ->paginate(12)
            ->withQueryString();

        return view('blogs.index', compact('posts', 'post'));
    }

    public function packageList()
    {
        $packages = Package::query()
            ->with(['astrologer', 'currency'])
            ->filterOn()
            ->orderBy('id', 'desc')
            ->paginate(12)
            ->withQueryString();

        return view('packages.index', compact('packages'));
    }

    public function blogDetails($slug)
    {
        $post = Post::with(['category', 'user'])
            ->where('slug', $slug)
            ->firstOrFail();

        if ($post) {
            $recentPosts = Post::with(['category', 'user'])
                ->where('category_id', $post->category_id)
                ->where('id', '!=', $post->id)
                ->inRandomOrder()
                ->get()
                ->take(3);

            return view('blogs.details', compact('post', 'recentPosts'));
        } else {
            return view('composables.404');
        }
    }

    public function bookingsList()
    {
        $user = Auth::user();

        dd($user);
    }
}
