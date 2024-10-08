<nav class="navbar navbar-expand-lg main-bg">
    <div class="container">

        <!-- Logo -->
        <a class="logo icon-img-100" href="#">
            <img src="{{ asset('Full_Black.png') }}" alt="logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <!-- navbar links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <span class="rolling-text">Home</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Shop</span></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="page-about.html">About</a>
                        <a class="dropdown-item" href="page-services.html">Services</a>
                        <a class="dropdown-item" href="page-team.html">Our Team</a>
                        <a class="dropdown-item" href="page-contact.html">Contact Us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-contact.html">
                        <span class="rolling-text">Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-contact.html">
                        <span class="rolling-text">Contact</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="search-form">
            <div class="form-group">
                <input type="text" name="search" placeholder="Search">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="m229.66 218.34l-50.07-50.06a88.11 88.11 0 1 0-11.31 11.31l50.06 50.07a8 8 0 0 0 11.32-11.32M40 112a72 72 0 1 1 72 72a72.08 72.08 0 0 1-72-72" />
                    </svg>
                </button>
            </div>
            <div class="search-icon">
                <span class="open-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="m229.66 218.34l-50.07-50.06a88.11 88.11 0 1 0-11.31 11.31l50.06 50.07a8 8 0 0 0 11.32-11.32M40 112a72 72 0 1 1 72 72a72.08 72.08 0 0 1-72-72" />
                    </svg>
                </span>
                <span class="close-search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 256 256">
                        <path fill="currentColor"
                            d="M208.49 191.51a12 12 0 0 1-17 17L128 145l-63.51 63.49a12 12 0 0 1-17-17L111 128L47.51 64.49a12 12 0 0 1 17-17L128 111l63.51-63.52a12 12 0 0 1 17 17L145 128Z" />
                    </svg>
                </span>
            </div>
        </div>
    </div>
</nav>