@extends('layouts.guest')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="page-header section-padding pb-0 header-creative">
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
        <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/bg-1.png') }}">
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->

    <!-- ==================== Start Blog ==================== -->
    <section class="sub-bg pb-30">
        <div class="mx-auto" style="max-width: 1260px">
            <div class="row">
                <div class="col-12 col-lg-10">
                    <div class="blog-list-half section-padding-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h6>Today Special . . .</h6>
                                    @include('components.landscape-card')
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-crev">
                        <div class="container">
                            <div class="row">
                                <h6>Latest Blogs . . .</h6>
                                @forelse ($posts as $post)
                                    <div class="col-lg-4 mb-4 mb-md-5">
                                        @include('components.post-card')
                                    </div>
                                @empty
                                    No Posts Available
                                @endforelse
                                {{ $posts->appends(request()->query->all())->onEachSide(1)->links('components.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Blog ==================== -->
@endsection
