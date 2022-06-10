@extends('layouts.backend')

@section('title')

    DashBoard

@endsection

@section('content')

    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Welcome, {{auth()->user()->name}} </h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                    <label for="reportrange" class="sr-only">Date Ranges</label>
                                    <div id="reportrange" class="px-2 py-2 text-muted">
                                        <span class="small"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm"><span
                                            class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                    <button type="button" class="btn btn-sm mr-2"><span
                                            class="fe fe-filter fe-16 text-muted"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="card shadow my-4">
                        <div class="card-body">
                            <div class="row align-items-center my-4">
                                <div class="col-md-4">
                                    <div class="mx-4">
                                        <strong class="mb-0 text-uppercase text-muted">BitCoin</strong><br/>
                                        <h3>Market Price</h3>
                                        <p class="text-muted">
                                            The market price is how much you can sell 1 Bitcoin (BTC) for. The supply of
                                            BTC is limited and pre-defined in the Bitcoin protocol. This means that the
                                            price is sensitive to shifts in both supply and demand. In total, 21
                                            Millions BTC can be mined and the Total Circulating Bitcoin chart displays
                                            how many of them have already been found.</p>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="p-4">
                                                <p class="small text-uppercase text-muted mb-0">Notes</p>
                                                <p class="small mb-0">
                                                    <span class="text-muted ml-1">The smallest amount of BTC that somebody can own is 1 Satoshi, and there are 100,000,000 Satoshi in 1 BTC. This means that it is possible to buy and sell fractions of a Bitcoin.</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-4">
                                                <p class="small text-uppercase text-muted mb-0">Methodology</p>
                                                <p class="small mb-0">
                                                    <span class="text-muted ml-1">The market price is a consolidation of prices from crypto exchanges market data.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mr-4">
                                        <div id="priceSpark"></div>
                                    </div>
                                </div> <!-- .col-md-8 -->
                            </div> <!-- end section -->
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->

                    <div class="my-5">
                        <h1 class="text-center"> Return On Investment of Crypto-Coins</h1>
                        <div id="mychart"></div>
                    </div>

                    <div id="myheatmap"></div>


                    <div class="card shadow my-4">
                        <div class="card-body">
                            <div class="row align-items-center my-4">
                                <div class="col-md-4">
                                    <div class="mx-4">
                                        <strong class="mb-0 text-uppercase text-muted">BlockChain</strong><br/>
                                        <h3>Confirmed Transactions Per
                                            Day</h3>
                                        <p class="text-muted">
                                            The number of daily confirmed transactions highlights the value of the
                                            Bitcoin network as a way to securely transfer funds without a third
                                            part.</p>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            <div class="p-4">
                                                <p class="small text-uppercase text-muted mb-0">Notes</p>
                                                <p class="small mb-0">
                                                    <span class="text-muted ml-1">Transactions are accounted for only once they are included in a block. During times of peak mempool congestion, transactions with lower fees are likely to be confirmed after a few hours or even days in rare cases. While this graph is a suitable medium and long term indicator, the Mempool Size (Bytes) and Mempool Transaction Count charts are more suitable for short term network activity.</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="p-4">
                                                <p class="small text-uppercase text-muted mb-0">Methodology</p>
                                                <p class="small mb-0">
                                                    <span class="text-muted ml-1">Transactions from confirmed blocks are simply summed up to obtain daily numbers.</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mr-4">
                                        <div id="container"></div>
                                    </div>
                                </div> <!-- .col-md-8 -->
                            </div> <!-- end section -->
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->

                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main>

@endsection


@push('chart_scripts')
    <script src="{{ asset('js/cryptocharts.js') }}"></script>

    <script>
        CryptoCharts.roiComparison({
            chart_id: "mychart",
            cryptocompare_tickers: ["BTC", "ETH"],
            iconomi_tickers: ["BLX", "CAR"],
            last_days: 90,
            options: {
                colors: ["#24aa91", "#EF1273", "#110973", "#000000"],
                title: true,
                chart: {
                    type: 'line'
                }
            }
        });
    </script>

    <script>
        CryptoCharts.priceHistory({
            chart_id: "priceSpark",
            cryptocompare_tickers: ["BTC"],
            last_days: 30,
            axes: true,
            loading_indicator: true,
            options: {
                colors: ["#f9d4d5"],
                title: true
            }
        });
    </script>

    <script>
        CryptoCharts.priceHeatmap({
            chart_id: "myheatmap",
            cryptocompare_tickers: ["BTC"],
            last_days: 90,
            loading_indicator: true,
            options: {
                colors: ["blue", "yellow", "#000000", "#123456"],
                title: true
            }
        });
    </script>

    <script>
        var nOfTransactions = {!! $nOfTransactions !!};


        Highcharts.chart('container', {

            title: {
                text: 'Confirmed Transactions Per Day.'
            },

            subtitle: {
                text: 'The total number of confirmed transactions per day.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Confirmed Transactions'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Epoch Timestamps'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Confirmed Transactions Per Day',
                data: JSON.parse(JSON.stringify(nOfTransactions)),
                colorByPoint: true
            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });
    </script>
@endpush
