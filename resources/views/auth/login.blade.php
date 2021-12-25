<!doctype html>
<html lang="en">
@include('layouts.inc.head')
<body class="light ">
<div class="wrapper vh-100">
    <div class="row align-items-center h-100">
        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" method="POST" action="{{ route('login') }}">
            @csrf
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-md" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
              <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
              </g>
            </svg>
            </a>
            <h1 class="h6 mb-3">Sign in</h1>
            <div class="form-group">
                <label for="email" class="sr-only">Email address</label>
                <input name="email" type="email" id="email" class="form-control form-control-lg" placeholder="Email address" value="{{old('email')}}" required="" autofocus="">
            </div>
            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Password" required autocomplete="current-password">
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input name="remember" type="checkbox" value="remember-me"> Stay logged in </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
{{--            <p class="mt-5 mb-3 text-muted">© {{\Carbon\Carbon::year()}}</p>--}}
        </form>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

        </div>
    </div>
</div>
@include('layouts.inc.scripts')
</body>
</html>

@section('title')
    Login
@endsection
