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
                    <p class="text-uppercase font-w700 font-size-sm text-grey">Password Reminder</p>
                </div>

                <div class="row no-gutters justify-content-center">
                    <div class="col-sm-8 col-xl-6">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="form-group py-3">
                                <input id="email" type="email"
                                    class="form-control form-control-lg form-control-alt @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                                    <i class="fa fa-fw fa-reply mr-1"></i> Password Reminder
                                </button>
                                <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1"
                                        href="{{url('/login')}}">
                                        <i class="fa fa-sign-in-alt text-grey mr-1"></i> Sign In
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
                <p class="display-4 font-w700 text-white mb-0">
                    Don’t worry of failure..
                </p>
                <p class="font-size-h1 font-w600 text-white-75 mb-0">
                    ..but learn from it!
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
