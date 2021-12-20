<!doctype html>
<html lang="{{ config('app.locale') }}">
@include('layouts.inc.head')

<body>
    <div id="page-container">
        <main id="main-container">
            @yield('content')
        </main>
    </div>
    @include('layouts.inc.scripts')
</body>

</html>
