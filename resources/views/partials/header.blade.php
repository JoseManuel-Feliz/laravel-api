<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">

            {{-- Navbar title logic --}}
            <a class="navbar-brand fw-semibold fs-4" href="

            {{-- Navbar guest/authenticated links --}}
               @guest
               {{ route('guest.projects.index') }}
               @else
               {{ route('admin.projects.index') }}
               @endguest
               ">

                {{-- Navbar title logic --}}
                @guest

                {{-- Title for guests --}}
                My Projects

                @else
                {{-- Title for auth users --}}
                Projects Dashboard
                @endguest
            </a>



            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto fw-semibold">

                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">Admin Section</a>
                    </li>
                    @else

                    {{-- Project Statuses nav-link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.statuses.index') }}">Project Statuses</a>
                    </li>

                    {{-- Project Types nav-link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.projects.index') }}">Project Types</a>
                    </li>

                    {{-- Project Technologies nav-link --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.technologies.index') }}">Projects Technologies</a>
                    </li>
                    @endguest
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</header>