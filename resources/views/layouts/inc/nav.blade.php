<nav class="navbar navbar-expand-lg navbar-light bg-white flex-row border-bottom shadow">
    <div class="container-fluid">
        <a class="navbar-brand mx-lg-1 mr-0" href="./index.html">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">
                        <span class="ml-lg-2">Dashboard</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/api/l2')}}">
                        <span class="ml-lg-2">L2 Order Book</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/api/l3')}}">
                        <span class="ml-lg-2">L3 Order Book</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/api/tickers')}}">
                        <span class="ml-lg-2">Tickers</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/api/symbols')}}">
                        <span class="ml-lg-2">Symbols</span>
                        <span class="sr-only"></span>
                    </a>
                </li>
                {{--                    <li class="nav-item dropdown">--}}
                {{--                        <a href="#" id="ui-elementsDropdown" class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--                            <span class="ml-lg-2">UI elements</span>--}}
                {{--                        </a>--}}
                {{--                        <div class="dropdown-menu" aria-labelledby="ui-elementsDropdown">--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-color.html"><span class="ml-1">Colors</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-typograpy.html"><span class="ml-1">Typograpy</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-icons.html"><span class="ml-1">Icons</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-buttons.html"><span class="ml-1">Buttons</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-notification.html"><span class="ml-1">Notifications</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-modals.html"><span class="ml-1">Modals</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-tabs-accordion.html"><span class="ml-1">Tabs & Accordion</span></a>--}}
                {{--                            <a class="nav-link pl-lg-2" href="./ui-progress.html"><span class="ml-1">Progress</span></a>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item">--}}
                {{--                        <a class="nav-link" href="widgets.html">--}}
                {{--                            <span class="ml-lg-2">Widgets</span>--}}
                {{--                            <span class="badge badge-pill badge-primary">New</span>--}}
                {{--                        </a>--}}
                {{--                    </li>--}}
                {{--                    <li class="nav-item dropdown more">--}}
                {{--                        <a class="dropdown-toggle more-horizontal nav-link" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--                            <span class="ml-2 sr-only">More</span>--}}
                {{--                        </a>--}}
                {{--                        <ul class="dropdown-menu" aria-labelledby="moreDropdown">--}}
                {{--                            <li class="nav-item dropdown">--}}
                {{--                                <a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="pagesDropdown" aria-expanded="false">--}}
                {{--                                    <span class="ml-1">Pages</span>--}}
                {{--                                </a>--}}
                {{--                                <ul class="dropdown-menu" aria-labelledby="pagesDropdown">--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./page-orders.html">--}}
                {{--                                        <span class="ml-1">Orders</span>--}}
                {{--                                    </a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./page-timeline.html">--}}
                {{--                                        <span class="ml-1">Timeline</span>--}}
                {{--                                    </a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./page-invoice.html">--}}
                {{--                                        <span class="ml-1">Invoice</span>--}}
                {{--                                    </a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./page-404.html">--}}
                {{--                                        <span class="ml-1">Page 404</span>--}}
                {{--                                    </a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./page-500.html">--}}
                {{--                                        <span class="ml-1">Page 500</span>--}}
                {{--                                    </a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./page-blank.html">--}}
                {{--                                        <span class="ml-1">Blank</span>--}}
                {{--                                    </a>--}}
                {{--                                </ul>--}}
                {{--                            </li>--}}
                {{--                            <li class="nav-item dropdown">--}}
                {{--                                <a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="authDropdown" aria-expanded="false">--}}
                {{--                                    <span class="ml-1">Authentication</span>--}}
                {{--                                </a>--}}
                {{--                                <ul class="dropdown-menu" aria-labelledby="authDropdown">--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./auth-login.html"><span class="ml-1">Login 1</span></a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./auth-login-half.html"><span class="ml-1">Login 2</span></a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./auth-register.html"><span class="ml-1">Register</span></a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./auth-resetpw.html"><span class="ml-1">Reset Password</span></a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./auth-confirm.html"><span class="ml-1">Confirm Password</span></a>--}}
                {{--                                </ul>--}}
                {{--                            </li>--}}
                {{--                            <li class="nav-item dropdown">--}}
                {{--                                <a class="dropdown-toggle nav-link pl-lg-2" href="#" data-toggle="collapse" id="layoutsDropdown" aria-expanded="false">--}}
                {{--                                    <span class="ml-1">Layouts</span>--}}
                {{--                                </a>--}}
                {{--                                <ul class="dropdown-menu" aria-labelledby="layoutsDropdown">--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./index.html"><span class="ml-1">Default</span></a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./index-horizontal.html"><span class="ml-1">Top Navigation</span></a>--}}
                {{--                                    <a class="nav-link pl-lg-2" href="./index-boxed.html"><span class="ml-1">Boxed</span></a>--}}
                {{--                                </ul>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </li>--}}
            </ul>
        </div>
        <form class="form-inline ml-md-auto d-none d-lg-flex searchform text-muted">
            <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
                   placeholder="Type something..." aria-label="Search">
        </form>
        <ul class="navbar-nav d-flex flex-row">
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="./#" id="modeSwitcher" data-mode="light">
                    <i class="fe fe-sun fe-16"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
                    <i class="fe fe-grid fe-16"></i>
                </a>
            </li>
            <li class="nav-item nav-notif">
                <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                    <i class="fe fe-bell fe-16"></i>
                    <span class="dot dot-md bg-success"></span>
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
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="#">Activities</a>
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
