@extends('layouts.auth')

@section('content')
<div class="bg-image" style="background-image: url('{{asset('media/photos/photo22@2x.jpg')}}');">
    <div class="row no-gutters bg-primary-op">
        <div class="hero-static col-md-6 d-flex align-items-center bg-white">
            <div class="p-3 w-100">
                <div class="mb-3 text-center">
                    <a class="link-fx font-w700 font-size-h1" href="{{url('/')}}">
                        @include('layouts.inc.title')
                    </a>
                    <p class="text-uppercase font-w700 font-size-sm text-grey">Sign In</p>
                </div>
                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-8 col-xl-6">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="py-3">
                                <div class="form-group">
                                    <input id="email" type="email"
                                        class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control form-control-lg form-control-alt @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password" placeholder="Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                                    <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1"
                                        href="{{ route('password.request') }}">
                                        <i class="fa fa-exclamation-triangle text-grey mr-1"></i> Forgot
                                        password
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
            <div class="p-3">
                <p class="display-4 font-w700 text-white mb-3">
                    Welcome to the future
                </p>
                <p class="font-size-lg font-w600 text-white-75 mb-0">
                    Copyright &copy; <span data-toggle="year-copy"></span>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
