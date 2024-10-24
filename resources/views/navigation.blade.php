<nav class="navbar navbar-expand-lg main-bg">
    <div class="container">

        <!-- Logo -->
        <a class="logo icon-img-100" href="/">
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
                    <a class="nav-link" href="/" role="button">
                        <span class="rolling-text">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}#about" role="button">
                        <span class="rolling-text">About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('packages.list') }}" role="button">
                        <span class="rolling-text">Package</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <span class="rolling-text">Shop</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs.list') }}">
                        <span class="rolling-text">Blogs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page-contact.html">
                        <span class="rolling-text">Contact</span>
                    </a>
                </li>
                @auth
                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="rolling-text">{{ auth()->user()->name }}</span>
                        </a>
                        <div class="dropdown-menu">
                            @admin
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            @endadmin
                            <div style="cursor: pointer">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a :href="route('logout')"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                        class="dropdown-item">
                                        Log Out
                                    </a>
                                </form>
                            </div>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
        @auth
            <ul class="navbar-nav d-none d-lg-block">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <span class="rolling-text">{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu">
                        @admin
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                        @endadmin
                        <div style="cursor: pointer">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                    class="dropdown-item">
                                    Log Out
                                </a>
                            </form>
                        </div>

                    </div>
                </li>
            </ul>
        @endauth
        {{-- <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                    class="flex text-red-500">
                    {{ __('Log Out') }}
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout ml-2"
                        width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                        <path d="M9 12h12l-3 -3" />
                        <path d="M18 15l3 -3" />
                    </svg>
                </x-dropdown-link>
            </form> --}}
</nav>
