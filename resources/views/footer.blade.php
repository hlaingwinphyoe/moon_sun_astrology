<footer>
    <div class="footer-container">
        <div class="container pb-80 pt-80 ontop">
            <div class="row">
                <div class="col-lg-4">
                    <div class="colum md-mb50">
                        <div class="tit mb-20">
                            <h6>Address</h6>
                        </div>
                        <div class="text">
                            <p>{{ $system_info->address }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="colum md-mb50">
                        <div class="tit mb-20">
                            <h6>Say Hello</h6>
                        </div>
                        <div class="text">
                            <p class="mb-10">
                                <a href="#0">{{ $system_info->email }}</a>
                            </p>
                            <h6>
                                @foreach ($system_info->phones as $phone)
                                    <a class="me-2" href="tel:{{ $phone->phone }}">{{ $phone->phone }}</a>
                                @endforeach
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 md-mb50">
                    <div class="tit mb-20">
                        <h6>Social</h6>
                    </div>
                    <ul class="rest social-text">
                        <li>
                            <a href="https://www.facebook.com/tarotNmyanmarastrology?mibextid=LQQJ4d"
                                target="_blank">Facebook</a>
                        </li>
                        <li>
                            <a href="https://www.tiktok.com/@moonsunastro31?_t=8qMcGQGMmcD&_r=1"
                                target="_blank">Tiktok</a>
                        </li>
                        {{-- <li>
                            <a href="#0">LinkedIn</a>
                        </li>
                        <li>
                            <a href="#0">Instagram</a>
                        </li> --}}
                    </ul>
                </div>
                {{-- <div class="col-lg-3">
                    <div class="tit mb-20">
                        <h6>Newsletter</h6>
                    </div>
                    <div class="subscribe">
                        <form action="contact.php">
                            <div class="form-group rest">
                                <input type="email" placeholder="Type Your Email">
                                <button type="submit">
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="sub-footer pt-30 pb-10 bord-thin-top ontop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="#home">
                                <img src="{{ asset('Horizon_black.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="copyright d-flex">
                            <div class="ml-auto">
                                <ul class="flex items-center">
                                    <li class="">
                                        <a class="text-dark nav-link" href="#" role="button">
                                            Home
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="text-dark nav-link" href="{{ route('packages.list') }}"
                                            role="button">
                                            Package
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="text-dark nav-link" href="{{ route('blogs.list') }}">
                                            Blogs
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="text-dark nav-link" href="page-contact.html">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
