@extends('layouts.backend')

@section('title')

    Mining Activity

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


                        <div class="card shadow my-4">
                            <div class="card-body">
                                <div class="row align-items-center my-4">
                                    <div class="col-md-4">
                                        <div class="mx-4">
                                            <strong class="mb-0 text-uppercase text-muted">BlockChain</strong><br/>
                                            <h3>Total Hash Rate
                                                (TH/s)</h3>
                                            <p class="text-muted">

                                                Mining hashrate is a key security metric. The more hashing (computing)
                                                power in the network, the greater its security and its overall
                                                resistance to attack. Although Bitcoin’s exact hashing power is unknown,
                                                it is possible to estimate it from the number of blocks being mined and
                                                the current block difficulty.</p>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <div class="p-4">
                                                    <p class="small text-uppercase text-muted mb-0">Notes</p>
                                                    <p class="small mb-0">
                                                        <span class="text-muted ml-1">Daily numbers (raw values) may periodically rise or drop as a result of the randomness of block discovery : even with a hashing power constant, the number of blocks mined can vary in day. The analysts have found that looking at a 7-day average is a better representation of the underlying power.</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="p-4">
                                                    <p class="small text-uppercase text-muted mb-0">Methodology</p>
                                                    <p class="small mb-0">
                                                        <span class="text-muted ml-1">The hashing power is estimated from the number of blocks being mined in the last 24h and the current block difficulty. More specifically, given the average time T between mined blocks and a difficulty D, the estimated hash rate per second H is given by the formula H = 2 32 D / T</span>
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

                        <div class="card shadow my-4">
                            <div class="card-body">
                                <div class="row align-items-center my-4">
                                    <div class="col-md-4">
                                        <div class="mx-4">
                                            <strong class="mb-0 text-uppercase text-muted">BlockChain</strong><br/>
                                            <h3>Network
                                                Difficulty</h3>
                                            <p class="text-muted">

                                                The difficulty is a measure of how difficult it is to mine a Bitcoin
                                                block, or in more technical terms, to find a hash below a given target.
                                                A high difficulty means that it will take more computing power to mine
                                                the same number of blocks, making the network more secure against
                                                attacks. The difficulty adjustment is directly related to the total
                                                estimated mining power estimated in the Total Hash Rate (TH/s)
                                                chart.</p>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <div class="p-4">
                                                    <p class="small text-uppercase text-muted mb-0">Notes</p>
                                                    <p class="small mb-0">
                                                        <span class="text-muted ml-1">The difficulty is adjusted every 2016 blocks (every 2 weeks approximately) so that the average time between each block remains 10 minutes.</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="p-4">
                                                    <p class="small text-uppercase text-muted mb-0">Methodology</p>
                                                    <p class="small mb-0">
                                                        <span class="text-muted ml-1">The difficulty comes directly from the confirmed blocks data in the Bitcoin network.</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mr-4">
                                            <div id="containerdifficulty"></div>
                                        </div>
                                    </div> <!-- .col-md-8 -->
                                </div> <!-- end section -->
                            </div> <!-- .card-body -->
                        </div> <!-- .card -->


                    </div>

                    <!-- charts-->
                    <div class="row my-4">
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div id="containerminersrevenue"></div>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- end section -->
                    <!-- info small box -->


                    <!-- charts-->
                    <div class="row my-4">
                        <div class="col-md-12">
                            <div class="chart-box">
                                <div id="containeruniqueaddresses"></div>
                            </div>
                        </div> <!-- .col -->
                    </div> <!-- end section -->
                    <!-- info small box -->


                </div>
            </div>
        </div>
    </main>

@endsection

@push('chart_scripts')
    <script>
        var hashRate = {!! $hashRate !!};


        Highcharts.chart('container', {

            title: {
                text: 'Total Hash Rate (TH/s).'
            },

            subtitle: {
                text: 'The estimated number of terahashes per second the bitcoin network is performing in the last 24 hours.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Hash Rate TH/s'
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
                name: 'Hash Rate (TH/s)',
                data: JSON.parse(JSON.stringify(hashRate)),
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
        var difficulty = {!! $difficulty !!};


        Highcharts.chart('containerdifficulty', {

            title: {
                text: 'Network Difficulty.'
            },

            subtitle: {
                text: 'A relative measure of how difficult it is to mine a new block for the blockchain.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Difficulty'
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
                name: 'Network Difficulty',
                data: JSON.parse(JSON.stringify(difficulty)),
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
        var minersRevenue = {!! $minersRevenue !!};


        Highcharts.chart('containerminersrevenue', {

            title: {
                text: 'Miners Revenue (USD).'
            },

            subtitle: {
                text: 'Total value in USD of coinbase block rewards and transaction fees paid to miners.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'USD'
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
                name: 'Miners Revenue in USD',
                data: JSON.parse(JSON.stringify(minersRevenue)),
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
        var uniqueAddresses = {!! $uniqueAddresses !!};


        Highcharts.chart('containeruniqueaddresses', {

            title: {
                text: 'Unique Addresses Used.'
            },

            subtitle: {
                text: 'The total number of unique addresses used on the blockchain.'
            },

            colors: ['#3832bd'],

            yAxis: {
                title: {
                    text: 'Addresses'
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
                name: 'Addresses Used',
                data: JSON.parse(JSON.stringify(uniqueAddresses)),
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
