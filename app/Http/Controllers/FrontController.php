<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get()->take(3);
        return view('front', [
            'packages' => $packages
        ]);
    }
}
