@extends('layouts.simple')

@section('content')
<div class="bg-image" style="background-image: url('{{ asset('media/photos/photo15@2x.jpg') }}');">
    <div class="hero bg-white overflow-hidden">
        <div class="hero-inner">
            <div class="content content-full text-center">
                <img alt="{{config('app.name')}}" src="{{asset('/media/photos/brand-logo.svg')}}" height="130"
                     class="mb-2">
                <h2 class="h1 font-w300 text-black mb-4 invisible pt-4" style="font-style: italic;"
                    data-toggle="appear"
                    data-timeout="150">
                    System Name
                </h2>
                <span class="m-2 d-inline-block invisible" data-toggle="appear" data-timeout="300">
                        <a class="btn btn-hero-primary" href="{{url('/dashboard')}}">
                            <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Enter Dashboard
                        </a>
                    </span>
            </div>
        </div>
    </div>
</div>
@endsection
