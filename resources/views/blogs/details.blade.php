@extends('layouts.guest')

@section('content')
    <!-- ==================== Start Slider ==================== -->

    <header class="page-header blog-header section-padding pb-0">
        <div class="container mt-80">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="caption">
                        <div class="sub-title fz-12">
                            <a href="#0">
                                <span>{{ $post->category ? $post->category->name : '' }}</span>
                            </a>
                        </div>
                        <h1 class="fz-55 mt-30">{{ $post->title }}</h1>
                    </div>
                    <div class="info d-flex mt-40 align-items-center">
                        <div class="left-info">
                            <div class="d-flex">
                                <div class="author-info">
                                    <div class="d-flex align-items-start">
                                        <a href="#0" class="circle-50">
                                            @if ($post->user->profile)
                                                <img src="{{ $post->user->profile }}" alt="" class="circle-img">
                                            @else
                                                <img src="{{ asset('Logo_Black.png') }}" alt="" class="circle-img">
                                            @endif
                                        </a>
                                        <a href="#0" class="ml-20">
                                            <span class="opacity-7">Author</span>
                                            <h6 class="fz-16 mb-0">
                                                {{ $post->user ? $post->user->name : '' }}
                                            </h6>
                                        </a>
                                    </div>
                                </div>
                                <div class="date ml-50">
                                    <a href="#0">
                                        <span class="opacity-7">Published</span>
                                        <h6 class="fz-16">{{ $post->created_at->format('F j, Y') }}</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="right-info ml-auto">
                            <div>
                                <span class="pe-7s-comment fz-18 mr-10"></span>
                                <span class="opacity-7">02 Comments</span>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="background bg-img parallaxie mt-80" data-background="{{ $post->media }}"></div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <!-- ==================== Start Blog ==================== -->

    <section class="blog section-padding pb-0">
        <div class="container">
            <div class="main-post">
                <div class="item pb-60">
                    <div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="text">
                                    {!! $post->desc !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="info-area flex mt-20 pb-20">
                    {{-- <div>
                        <div class="tags flex">
                            <div class="valign">
                                <span>Tags :</span>
                            </div>
                            <div>
                                <a href="blog-classic.html">Tech</a>
                                <a href="blog-classic.html">Ravo</a>
                            </div>
                        </div>
                    </div> --}}
                    <div class="ml-auto">
                        <div class="share-icon flex">
                            <div class="valign">
                                <span>Share :</span>
                            </div>
                            <div>
                                <a href="https://www.facebook.com/sharer.php?u={{ route('blogs.details', $post->slug) }}"
                                    target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://www.x.com/share?url={{ route('blogs.details', $post->slug) }}"
                                    target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="recent-posts blog-crev sub-bg section-padding mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-60">
                            <h3>Recent Posts</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($recentPosts as $post)
                        <div class="col-lg-4 mb-4 mb-md-5">
                            @include('components.post-card')
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        {{-- <div class="comments-post section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="text mb-60">
                            <h3>Comments</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="item-box">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="flex">
                                        <div class="user-img mr-30">
                                            <div class="img circle-80 line-height-1">
                                                <img src="assets/imgs/blog/author1.jpg" alt=""
                                                    class="circle-img">
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <h6 class="line-height-1">Megan fox</h6>
                                            <span class="fz-12 ls1 text-u mb-15">14 sept 2021, 07:00 AM</span>
                                            <p class="fz-14">Ut elementum turpis lorem, id vulputate risus consequat
                                                vitae. Morbi eget
                                                urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center">
                                    <div class="replay-post ml-auto">
                                        <a href="#0">
                                            <span>Replay</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-box replayed">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="flex">
                                        <div class="user-img mr-30">
                                            <div class="img circle-80 line-height-1">
                                                <img src="assets/imgs/blog/author1.jpg" alt=""
                                                    class="circle-img">
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <h6 class="line-height-1">Megan fox</h6>
                                            <span class="fz-12 ls1 text-u mb-15">14 sept 2021, 07:00 AM</span>
                                            <p class="fz-14">Ut elementum turpis lorem, id vulputate risus consequat
                                                vitae. Morbi eget
                                                urna imperdiet, pellentesque nulla id, tempus mauris.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex align-items-center">
                                    <div class="replay-post ml-auto">
                                        <a href="#0">
                                            <span>Replay</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="comments-from section-padding sub-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <div class="text mb-60">
                            <h3>Leave a comment</h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <form id="contact-form" method="post" action="contact.php">

                            <div class="messages"></div>

                            <div class="controls row">

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mb-30">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group mb-30">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-12 text-center mt-20">
                                    <button type="submit" class="butn-circle">
                                        <span class="full-width">
                                            <span class="full-width">Post A <br> Comment</span>
                                        </span>
                                        <img src="assets/imgs/svg-assets/circle-star.svg" alt=""
                                            class="circle-star">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
    </section>

    <!-- ==================== End Blog ==================== -->
@endsection
