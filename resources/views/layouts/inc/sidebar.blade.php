<nav id="sidebar" aria-label="Main Navigation">
    <div class="bg-header-dark">
        <div class="content-header bg-white-10">
            <a class="link-fx font-w600 font-size-lg text-white" href="/">
                <span class="smini-visible">
                    <span class="text-white-75">D</span><span class="text-white">U</span>
                </span>
                <span class="smini-hidden">
                    <span class="text-white-75">Dashmix</span><span class="text-white"> UI</span>
                </span>
            </a>

            <div>
                <a class="js-class-toggle text-white-75" data-target="#sidebar-style-toggler"
                    data-class="fa-toggle-off fa-toggle-on" data-toggle="layout"
                    data-action="sidebar_style_toggle" href="javascript:void(0)">
                    <i class="fa fa-toggle-off" id="sidebar-style-toggler"></i>
                </a>
                <a class="d-lg-none text-white ml-2" data-toggle="layout" data-action="sidebar_close"
                    href="javascript:void(0)">
                    <i class="fa fa-times-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="content-side content-side-full">
        <ul class="nav-main">
            @include('layouts.menu')
        </ul>
    </div>
</nav>
