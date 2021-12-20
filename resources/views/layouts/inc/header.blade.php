<header id="page-header">
    <div class="content-header">
        <div class="d-flex align-items-center">
            <a class="font-size-lg font-w600 text-white" href="{{url('/')}}">
                <img src="{{asset('/media/photos/brand-logo.svg')}}" height="70" alt="{{config('app.name')}}" class="mr-3">
            </a>
        </div>

        <div>
            <span
                class="text-white text-uppercase font-weight-bolder">Dashmix</span>
        </div>

        <div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-user d-sm-none"></i>
                    <span class="d-none d-sm-inline-block">
                         John Doe
                    </span>
                    <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                    <div class="p-2">
                        <a class="dropdown-item" href="#">
                            <i class="far fa-fw fa-user mr-1"></i> Profile
                        </a>
                        <a class="dropdown-item" href="{{ url('/docs') }}" target="_blank">
                            <i class="far fa-fw fa-bookmark mr-1"></i> Documentation
                        </a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            <i class="far fa-fw fa-arrow-alt-circle-left mr-1"></i> Sign Out
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="page-header-loader" class="overlay-header bg-primary">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-2x fa-spinner fa-spin text-white"></i>
            </div>
        </div>
    </div>
</header>
