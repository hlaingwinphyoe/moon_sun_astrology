<div class="clients section-padding pb-100 position-re header-creative">
    <div class="container">
        <div class="row justify-content-center mb-80">

            <div class="col-lg-8 text-center">
                <div class="text">
                    <h2 class="text-center">Choose Your Zodiac Sign</h2>
                    <p class="text-gray-500">
                        What’s Your Sign? Read Your Daily
                        <br />
                        Horoscope Today
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="row md-marg">
                    @foreach ($zodiacs as $zodiac)
                        <div class="col-md-3 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                <div class="img">
                                    <img src="{{ $zodiac->media }}" alt="{{ $zodiac->name }}">
                                </div>
                                <a href="#0" class="link" data-splitting>
                                    <h5>{{ $zodiac->name }}</h5>
                                    <small style="color: black;margin-top: 5px">
                                        {{ $zodiac->period }}
                                    </small>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="bg-pattern bg-img" data-background="{{ asset('imgs/bg/bg-1.png') }}">
    </div>
</div>
