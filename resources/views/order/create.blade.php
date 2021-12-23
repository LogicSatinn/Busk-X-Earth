@extends('layouts.backend')
@section('title')

    Adding an Order

@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Place Order</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Placing Order ...</strong>
                        </div>
                        {!! Form::open(['route' => 'order.store', 'method' => 'post']) !!}
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="simple-select2">Symbol</label>
                                        <select name="symbol" class="form-control select2" id="simple-select2">
                                            <option value="BTC-USD">BTC-USD</option>
                                            <option value="BTC-GBP">BTC-GBP</option>
                                            <option value="BTC-EUR">BTC-EUR</option>
                                            <option value="ETH-BTC">ETH-BTC</option>
                                            <option value="ETH-USD">ETH-USD</option>
                                            <option value="ETH-GBP">ETH-GBP</option>
                                            <option value="ETH-EUR">ETH-EUR</option>
                                            <option value="DOGE-USD">DOGE-USD</option>
                                            <option value="LTC-USD">LTC-USD</option>
                                            <option value="LTC-BTC">LTC-BTC</option>
                                            <option value="XLM-BTC">XLM-BTC</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="date-input1">Date Range</label>
                                        <input type="text" name="daterange" class="form-control datetimes"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="simple-select2">Status</label>
                                        <select name="status" class="form-control select2" id="simple-select2">
                                            <option value="OPEN">OPEN</option>
                                            <option value="REJECTED">REJECTED</option>
                                            <option value="CANCELLED">CANCELLED</option>
                                            <option value="FILLED">FILLED</option>
                                            <option value="PART_FILLED">PART_FILLED</option>
                                            <option value="EXPIRED">EXPIRED</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="example-number">Limit</label>
                                        <input class="form-control" id="example-number" type="number" name="limit">
                                    </div>
                                </div>
                            </div> <!-- form-group -->
                            <button type="submit" class="btn mb-2 btn-primary"><span class="fe fe-arrow-right fe-16 mr-2"></span>Place Order</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
