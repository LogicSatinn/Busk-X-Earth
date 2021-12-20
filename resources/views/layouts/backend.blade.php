<!doctype html>
<html lang="en">
@include('layouts.inc.head')
<body>
<div id="page-container" class="page-header-dark main-content-boxed">
    @include('layouts.inc.header')
    <main id="main-container">
        <div id="app">
            @include('layouts.menu')
            @yield('content')
    </main>
    @include('layouts.inc.footer')
</div>
@include('layouts.inc.scripts')
</body>
</html>

