<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<canvas id="myChart" style="height: 400px !important;width: 400px !important;">Your browser does not support the canvas element.</canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js" integrity="sha512-TW5s0IT/IppJtu76UbysrBH9Hy/5X41OTAbQuffZFU6lQ1rdcLHzpU5BzVvr/YFykoiMYZVWlr/PX1mDcfM9Qg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var bids = {!! $bids !!};
    console.log(bids);
    const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
        type: 'scatter',
        data: {
            datasets: [{
                data: JSON.parse(JSON.stringify(bids))
            }]
        },
        options: {
            responsive: true,
            title: {
                display: true,
                text: 'BlockChain Level 2 Order Book',
            },
            parsing: {
                xAxisKey: 'qty',
                yAxisKey: 'px'
            },
            scales: {
                x: { // defining min and max so hiding the dataset does not change scale range
                    min: 0,
                    max: 4
                },
            }
        }
    });
</script>

</body>
</html>
