<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Order per Hari</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            width: 800px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <canvas id="tiga"></canvas>
    </div>

    <script>
        // Retrieve data from PHP
        var dates = ['2023-06-24'];
        var orderCounts = [2];

        // Create chart
        var ctx = document.getElementById('tiga').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Jumlah Order',
                    data: orderCounts,
                    fill: false,
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'time',
                        time: {
                            unit: 'day',
                            displayFormats: {
                                day: 'YYYY-MM-DD'
                            }
                        }
                    },
                    y: {
                        beginAtZero: true,
                        stepSize: 1
                    }
                }
            }
        });
    </script>
</body>
</html>
