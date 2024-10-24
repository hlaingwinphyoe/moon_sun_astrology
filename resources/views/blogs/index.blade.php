@extends('layouts.guest')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="caption">
                        <h6 class="sub-title">Our Blog</h6>
                        <h1 class="fz-80">Latest Readings.</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog-list-half section-padding sub-bg">
        <div class="container">
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-12 col-lg-4 mb-4">
                        @include('components.landscape-card')
                    </div>
                @empty
                    No Readings.
                @endforelse
            </div>
            {{ $posts->appends(request()->query->all())->onEachSide(1)->links('components.pagination') }}
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->
@endsection
