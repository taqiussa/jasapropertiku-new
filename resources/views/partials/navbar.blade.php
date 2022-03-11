<nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
    <div class="container">
        <a class="navbar-brand text-warning fs-2" href="{{ route('posts.index') }}">
            <svg style="width:50px;height:50px" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M13,7H15V15A2,2 0 0,1 13,17H11A2,2 0 0,1 9,15V14H11V15H13V7M5,3H19A2,2 0 0,1 21,5V19A2,2 0 0,1 19,21H5A2,2 0 0,1 3,19V5A2,2 0 0,1 5,3M5,5V19H19V5H5Z" />
            </svg>
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-3">
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('posts.index') ? 'active border-bottom border-4 border-warning' : '' }}"
                        href="{{ route('posts.index') }}">
                        Properti
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::routeIs('posts.create') ? 'active border-bottom border-4 border-warning' : '' }}"
                        href="{{ route('posts.create') }}">
                        Buat Iklan
                    </a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <div class="d-flex">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                            <a class="btn btn-outline-warning mx-1" href="{{ route('login') }}">{{ __('Masuk') }}</a>
                    @endif

                    @if (Route::has('register'))
                            <a class="btn btn-outline-light mx-1" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                    @endif
                @else
                <div class="navbar-nav ms-auto d-flex">
                    <li class="nav-item dropdown fs-5">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('user.index') }}">
                                {{ __('User Profile') }}
                            </a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </div>
                @endguest
            </div>
        </div>
    </div>
</nav>
