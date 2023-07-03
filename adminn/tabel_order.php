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
        .tabel{
            width: 700px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="tabel">
        <div class="container">
            <canvas id="tiga"></canvas>
        </div>
    </div>

    <?php
    // Menghubungkan ke database
    include '../koneksi.php';   

    // Mengambil data order per hari dari database
    $query = "SELECT DATE(order_date) AS tanggal, COUNT(*) AS jumlah_order
            FROM laundry_orders
            GROUP BY tanggal";

    $result = mysqli_query($koneksi, $query);

    // Array untuk menyimpan data tanggal dan jumlah order
    $dates = array();
    $orderCounts = array();

    // Mengisi array dengan data dari database
    while ($row = mysqli_fetch_assoc($result)) {
        $dates[] = $row['tanggal'];
        $orderCounts[] = $row['jumlah_order'];
    }
    ?>

    <script>
        // Retrieve data from PHP
        var dates = <?php echo json_encode($dates); ?>;
        var orderCounts = <?php echo json_encode($orderCounts); ?>;

        var colors = generateRandomColors(dates.length);
        
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
                    backgroundColor: colors,
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

        function generateRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {
                var color = '#' + Math.floor(Math.random() * 16977215).toString(16);
                colors.push(color);
            }
            return colors;
        }
    </script>
</body>
</html>
