<header class="header-creative">
    <div class="container ontop">
        <div class="row justify-content-center full-height">
            <div class="col-lg-3 d-flex align-items-end">
                <div class="img md-hide">
                    <div class="img-assets1 parallax" data-speed="-0.01">
                        <img src="{{ asset('imgs/claw.svg') }}" alt="">
                    </div>
                    <img src="{{ asset('imgs/1.jpg') }}" alt="" data-speed="0.01" class="parallax">
                </div>
            </div>
            <div class="col-lg-6 valign">
                <div class="caption text-center full-width md-mb50">
                    <div class="mb-30">
                        <svg class="svg-animation star" width="100" height="100" viewBox="0 0 100 100"
                            fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke"
                                stroke="currentColor" style="--index: 1; --transform: 30deg;"></line>
                            <line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke"
                                stroke="currentColor" style="--index: 2; --transform: 60deg;"></line>
                            <line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke"
                                stroke="currentColor" style="--index: 3; --transform: 90deg;"></line>
                            <line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke"
                                stroke="currentColor" style="--index: 4; --transform: 120deg;"></line>
                            <line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke"
                                stroke="currentColor" style="--index: 5; --transform: 150deg;"></line>
                            <line y1="50" x2="100" y2="50" vector-effect="non-scaling-stroke"
                                stroke="currentColor" style="--index: 6; --transform: 180deg;"></line>
                        </svg>
                    </div>
                    <h6 class="fw-200 mb-15">Unveiling the Tapestry of Your Destiny</h6>
                    <h2 class="fw-600 d-rotate wow">
                        <span class="rotate-text">Mystic Visions, Guiding</span>
                        <span class="rotate-text">You for Better Future</span>
                    </h2>
                    <a href="{{ route('make-appointment') }}"
                        class="butn butn-md butn-bg main-colorbg2 radius-30 mb-80">
                        <span>Make Appointment Now!</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="img parallax" data-speed="0.01">
                    <img src="{{ asset('imgs/3.jpg') }}" alt="">
                </div>
                <div class="mt-30 md-hide">
                    <div class="text-center hover-this">
                        <div class="circle-button hover-anim">
                            <div class="rotate-circle fz-30 text-u">
                                <svg class="textcircle" viewBox="0 0 500 500">
                                    <defs>
                                        <path id="textcircle1" d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                        </path>
                                    </defs>
                                    <text>
                                        <textPath xlink:href="#textcircle1" textLength="900">Moon - Sun
                                            -
                                            Astrology -</textPath>
                                    </text>
                                </svg>
                            </div>
                            <div class="in-circle text-center">
                                {{-- <h3>A <span class="fw-300 fz-30">+</span></h3> --}}
                                <img src="{{ asset('Logo_Black.png') }}" style="width: 70px;height: 70px"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h6>Tarots <span class="fz-14">Readings</span></h6>
                        {{-- <h6>500k <span class="fz-14">Customers</span></h6> --}}
                        {{-- <p class="fz-13">Avg rating 4.8 makes us world best.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/astrology-bg.png') }}">
    </div>
</header>
