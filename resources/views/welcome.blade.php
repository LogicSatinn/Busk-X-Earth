<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        .highcharts-figure,
        .highcharts-data-table table {
            min-width: 310px;
            max-width: 800px;
            margin: 1em auto;
        }

        #container {
            height: 400px;
        }

        #master-container {
            position: absolute;
            top: 300px;
            height: 100px;
            width: 100%;
        }

        .highcharts-data-table table {
            font-family: Verdana, sans-serif;
            border-collapse: collapse;
            border: 1px solid #ebebeb;
            margin: 10px auto;
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .highcharts-data-table caption {
            padding: 1em 0;
            font-size: 1.2em;
            color: #555;
        }

        .highcharts-data-table th {
            font-weight: 600;
            padding: 0.5em;
        }

        .highcharts-data-table td,
        .highcharts-data-table th,
        .highcharts-data-table caption {
            padding: 0.5em;
        }

        .highcharts-data-table thead tr,
        .highcharts-data-table tr:nth-child(even) {
            background: #f8f8f8;
        }

        .highcharts-data-table tr:hover {
            background: #f1f7ff;
        }
    </style>

</head>
<body>

<!-- charts-->
<div class="row my-4">
    <div class="col-md-12">
        <div class="chart-box">
            <div id="container"></div>
        </div>
    </div> <!-- .col -->
</div> <!-- end section -->
<!-- info small box -->

{{--<script src="https://code.highcharts.com/highcharts.js"></script>--}}
{{--<script src="https://code.highcharts.com/modules/series-label.js"></script>--}}
{{--<script src="https://code.highcharts.com/modules/exporting.js"></script>--}}
{{--<script src="https://code.highcharts.com/modules/export-data.js"></script>--}}
{{--<script src="https://code.highcharts.com/modules/accessibility.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/canvg/1.4.0/rgbcolor.js"></script>--}}

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

{{--<script>--}}
{{--    var nOfTransactions = {!! $nOfTransactions !!};--}}


{{--    Highcharts.chart('container', {--}}

{{--        title: {--}}
{{--            text: 'The Average Block Size over the past 5 Weeks in megabytes.'--}}
{{--        },--}}

{{--        subtitle: {--}}
{{--            text: 'Source: blockchain.com'--}}
{{--        },--}}

{{--        colors: ['#3832bd'],--}}

{{--        yAxis: {--}}
{{--            title: {--}}
{{--                text: 'Average Block Size (MB)'--}}
{{--            }--}}
{{--        },--}}

{{--        xAxis: {--}}
{{--            accessibility: {--}}
{{--                rangeDescription: 'Epoch Timestamps'--}}
{{--            }--}}
{{--        },--}}

{{--        legend: {--}}
{{--            layout: 'vertical',--}}
{{--            align: 'right',--}}
{{--            verticalAlign: 'middle'--}}
{{--        },--}}

{{--        plotOptions: {--}}
{{--            series: {--}}
{{--                label: {--}}
{{--                    connectorAllowed: false--}}
{{--                },--}}
{{--                pointStart: 2010--}}
{{--            }--}}
{{--        },--}}

{{--        series: [{--}}
{{--            name: 'Average Block Size',--}}
{{--            data: JSON.parse(JSON.stringify(nOfTransactions)),--}}
{{--            colorByPoint: true--}}
{{--        }],--}}

{{--        responsive: {--}}
{{--            rules: [{--}}
{{--                condition: {--}}
{{--                    maxWidth: 500--}}
{{--                },--}}
{{--                chartOptions: {--}}
{{--                    legend: {--}}
{{--                        layout: 'horizontal',--}}
{{--                        align: 'center',--}}
{{--                        verticalAlign: 'bottom'--}}
{{--                    }--}}
{{--                }--}}
{{--            }]--}}
{{--        }--}}

{{--    });--}}
{{--</script>--}}

<script>
    Highcharts.getJSON(
        {!!  !!},
        function (data) {

            Highcharts.chart('container', {
                chart: {
                    zoomType: 'x'
                },
                title: {
                    text: 'USD to EUR exchange rate over time'
                },
                subtitle: {
                    text: document.ontouchstart === undefined ?
                        'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
                },
                xAxis: {
                    type: 'datetime'
                },
                yAxis: {
                    title: {
                        text: 'Exchange rate'
                    }
                },
                legend: {
                    enabled: false
                },
                plotOptions: {
                    area: {
                        fillColor: {
                            linearGradient: {
                                x1: 0,
                                y1: 0,
                                x2: 0,
                                y2: 1
                            },
                            stops: [
                                [0, Highcharts.getOptions().colors[0]],
                                [1, Highcharts.color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                            ]
                        },
                        marker: {
                            radius: 2
                        },
                        lineWidth: 1,
                        states: {
                            hover: {
                                lineWidth: 1
                            }
                        },
                        threshold: null
                    }
                },

                series: [{
                    type: 'area',
                    name: 'USD to EUR',
                    data: data
                }]
            });
        }
    );
</script>

</body>
</html>
