@extends('layouts.backend')

@section('content')
<div class="content content-full">
    <div class="d-flex justify-content-between align-items-center py-3">
        <h2 class="h3 font-w400 mb-0 text-capitalize">Quick Overview</h2>
    </div>
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-primary mx-auto my-3">
                        <i class="fa fa-dollar-sign text-white"></i>
                    </div>
                    <div
                        class="text-black display-4 font-w700">12
                    </div>
                    <div class="text-primary mt-1">Item</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-primary mx-auto my-3">
                        <i class="fa fa-arrow-down text-white"></i>
                    </div>
                    <div
                        class="text-black display-4 font-w700">43
                    </div>
                    <div class="text-primary mt-1">Item</div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop text-center">
                <div class="block-content block-content-full">
                    <div class="item item-circle bg-primary mx-auto my-3">
                        <i class="fa fa-arrow-up text-white"></i>
                    </div>
                    <div
                        class="text-black display-4 font-w700">32
                    </div>
                    <div class="text-primary mt-1">Total To's</div>
                </div>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center pt-5 pb-3">
        <h2 class="h3 font-w400 mb-0">From Customers Database</h2>
    </div>
    <div class="row row-deck">
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w700 mb-3">Total Persons</div>
                    <div
                        class="text-black font-size-h1 font-w700">32
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3 invisible" data-toggle="appear">
            <a class="block block-rounded block-fx-pop">
                <div class="block-content block-content-full">
                    <div class="font-size-lg font-w700 mb-3">Total Companies</div>
                    <div
                        class="text-black font-size-h1 font-w700">32
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
