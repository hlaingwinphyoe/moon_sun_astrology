@extends('layouts.guest')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding pb-0 header-creative">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">Our Services</h6>
                        <h1 class="fz-80">Latest Packages.</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/bg-2.png') }}">
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start Blog ==================== -->

    <section class="serv-box section-padding pb-0 sub-bg">
        <div class="container">
            <div class="row">
                @forelse ($packages as $package)
                    <div class="col-lg-3">
                        @include('components.package-card')
                    </div>
                @empty
                    No Card Available
                @endforelse
                {{ $packages->appends(request()->query->all())->onEachSide(1)->links('components.pagination') }}
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->
@endsection
