<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
    <div class="container-fluid">
        <a class="navbar-brand mx-lg-1 mr-0" href="{{'/'}}">
            <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                 xml:space="preserve">
              <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	"/>
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	"/>
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	"/>
              </g>
            </svg>
        </a>
        <button class="navbar-toggler mt-2 mr-auto toggle-sidebar text-muted">
            <i class="fe fe-menu navbar-toggler-icon"></i>
        </button>
        <div class="navbar-slide bg-white ml-lg-4" id="navbarSupportedContent">
            <a href="#" class="btn toggle-sidebar d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
                <i class="fe fe-x"><span class="sr-only"></span></i>
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">
                        <span class="ml-lg-2">Dashboard</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/blocks')}}">
                        <span class="ml-lg-2">Block Details</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/mining')}}">
                        <span class="ml-lg-2">Mining & Network Information</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="light">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>
            <li class="nav-item dropdown ml-lg-0">
                <a class="nav-link dropdown-toggle text-muted" href="#" id="navbarDropdownMenuLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                  <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link pl-3" href="#">Settings</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link pl-3" href="#">Profile</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{route('users.index')}}">Manage Users</a>
                    </li>
                    <div role="separator" class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </a>
                </ul>
            </li>
        </ul>
    </div>
</nav>
