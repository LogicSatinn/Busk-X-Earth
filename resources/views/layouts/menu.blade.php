<div class="bg-white">
    <div class="content">
        <div class="d-lg-none push">
            <button type="button"
                    class="btn btn-block btn-light d-flex justify-content-between align-items-center"
                    data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Menu
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div id="main-navigation" class="d-none d-lg-block push">
            <ul class="nav-main nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}"
                       href="{{url('/dashboard')}}">
                        <i class="nav-main-link-icon fa fa-chalkboard"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
                <li class="nav-main-heading">Item</li>
                <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-list-alt"></i>
                        <span class="nav-main-link-name">Items</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item {{ Request::is('') ? 'active' : '' }}">
                            <a class="nav-main-link{{ request()->is('') ? ' active' : '' }}"
                               href="">
                                <i class="nav-main-link-icon fa fa-database"></i>
                                <span class="nav-main-link-name">All Items</span>
                            </a>
                        </li>

                        <li class="nav-main-item {{ Request::is('') ? 'active' : '' }}">
                            <a class="nav-main-link{{ request()->is('') ? ' active' : '' }}"
                               href="">
                                <i class="nav-main-link-icon fa fa-file-code"></i>
                                <span class="nav-main-link-name">Create Item</span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-main-item ml-lg-auto">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                       aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-cogs"></i>
                        <span class="nav-main-link-name">Settings</span>
                    </a>
                    <ul class="nav-main-submenu">
                        <li class="nav-main-item {{ Request::is('') ? 'active' : '' }}">
                            <a target="_blank"
                               class="nav-main-link{{ request()->is('telescope*') ? ' active' : '' }}"
                               href="{{ url('/horizon') }}">
                                <i class="nav-main-link-icon fa fa-cloud-sun"></i>
                                <span class="nav-main-link-name">Horizon</span>
                            </a>
                        </li>
                        <li class="nav-main-item {{ Request::is('') ? 'active' : '' }}">
                            <a target="_blank"
                               class="nav-main-link{{ request()->is('telescope*') ? ' active' : '' }}"
                               href="{{ url('/telescope') }}">
                                <i class="nav-main-link-icon fas fa-binoculars"></i>
                                <span class="nav-main-link-name">Telescope</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
