<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">

    <title>{{config('app.name')}}</title>

    {{-- Favivon --}}
    <link rel="shortcut icon" href="{{asset('media/favicons/favicon.png')}}">

    {{-- Fonts --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700">

    {{-- Main Style --}}
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" id="css-main" href="{{asset('/css/dashmix.css')}}">

    {{-- Page JS Plugins CSS --}}
    <link rel="stylesheet" href="{{asset('/js/plugins/datatables/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css')}}">

    @stack('css_after')

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/f35e8b689e.js" crossorigin="anonymous"></script>
</head>
