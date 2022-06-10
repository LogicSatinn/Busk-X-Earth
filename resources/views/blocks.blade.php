@extends('layouts.backend')

@section('title')

    Blocks

@endsection

@section('content')
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="row align-items-center mb-2">
                        <x-user-name/>
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

                    <!-- charts-->
                    <div class="row my-4">
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div id="container"></div>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- end section -->
                    <!-- info small box -->

                    <!-- charts-->
                    <div class="row my-4">
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div id="containerconfirmation"></div>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- end section -->
                    <!-- info small box -->

                    <!-- charts-->
                    <div class="row my-4">
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div id="containertransactions"></div>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- end section -->
                    <!-- info small box -->

                    <div class="col-12 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Simple Query API</h5>
                                <p class="card-text">Simple plain text API for querying blockchain data like hash-rate,
                                    difficulty, block height and more.</p>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Query</th>
                                        <th>API</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="col">1331</th>
                                        <td>Average Transaction Size (1000 Blocks)</td>
                                        <td>{{$avgTxSize}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1156</th>
                                        <td>Average Transaction Value (1000 Default)</td>
                                        <td>{{$avgTxValue}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1038</th>
                                        <td>Average Transaction Number (100 Default)</td>
                                        <td>{{$avgTxNumber}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1227</th>
                                        <td>Latest Hash of the latest block</td>
                                        <td>{{$latestHash}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1427</th>
                                        <td>Hashes To Win needed to solve a block</td>
                                        <td>{{$hashesToWin}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1027</th>
                                        <td>Block Height | Current Block Height in the longest chain</td>
                                        <td>{{$blockCount}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1229</th>
                                        <td>Current Difficulty target as a decimal number</td>
                                        <td>{{$difficulty}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1289</th>
                                        <td>Interval</td>
                                        <td>{{$interval}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">6227</th>
                                        <td>Total Bitcoins in Circulation</td>
                                        <td>{{$totalBc}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">7827</th>
                                        <td>ETA</td>
                                        <td>{{$eta}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="col">1787</th>
                                        <td>Probability</td>
                                        <td>{{$probability}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- simple table -->
                </div>
            </div>
        </div>
    </main>

@endsection


@push('chart_scripts')
    <script>
        var avgBlockSize = {!! $avgBlockSize !!};


        Highcharts.chart('container', {

            title: {
                text: 'Average Block Size (MB).'
            },

            subtitle: {
                text: 'The average block size over the past 24 hours in megabytes.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Average Block Size (MB)'
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
                name: 'Average Block Size',
                data: JSON.parse(JSON.stringify(avgBlockSize)),
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

    <script>
        var nOfTransactions = {!! $nOfTransactions !!};


        Highcharts.chart('containertransactions', {

            title: {
                text: 'Average Transactions Per Block.'
            },

            subtitle: {
                text: 'The average number of transactions per block over the past 24 hours.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Transactions'
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
                name: 'Average Transactions Per Block',
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

    <script>
        var medianConfirmationTime = {!! $medianConfirmationTime !!};


        Highcharts.chart('containerconfirmation', {

            title: {
                text: 'Median Confirmation Time.'
            },

            subtitle: {
                text: 'The median time for a transaction with miner fees to be included in a mined block and added to the public ledger..'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Minutes'
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
                name: 'Median Confirmation Time',
                data: JSON.parse(JSON.stringify(medianConfirmationTime)),
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
