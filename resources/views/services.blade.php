<section class="serv-box section-padding pb-0 header-creative" id="package">
    <div class="container">
        <div class="sec-lg-head mb-80">
            <div class="row">
                <div class="col-lg-8">
                    <div class="position-re">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">Featured Services</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Our Packages</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-4 d-flex align-items-center">
                    <div class="text wow fadeIn">
                        <p>Personalized horoscopes, compatibility readings, and life guidance based on birth charts.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($packages as $package)
                <div class="col-lg-3">
                    @include('components.package-card')
                </div>
            @empty
                No Card Available
            @endforelse

        </div>
    </div>
    <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/bg-2.png') }}">
    </div>
</section>
