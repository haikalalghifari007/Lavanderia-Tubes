<!DOCTYPE html>
<html>
<head>
    <title>Jumlah Order per Bulan</title>
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
    include '../koneksi.php'; 
    $query = "SELECT YEAR(order_date) AS year, MONTH(order_date) AS month, SUM(total_cost) AS total_cost
    FROM laundry_orders
    GROUP BY YEAR(order_date), MONTH(order_date);
    ";

    $result = mysqli_query($koneksi, $query);

    // Array untuk menyimpan data tanggal dan jumlah order
    $dates = array();
    $orderCounts = array();

    // Mengisi array dengan data dari database
    while ($row = mysqli_fetch_assoc($result)) {
        $dates[] = $row['year'] . '-' . $row['month'];
        $orderCounts[] = $row['total_cost'];
    }
    // Mock data
    

    ?>

    <script>
        // Retrieve data from PHP
        var months = <?php echo json_encode($dates); ?>;
        var orderCounts = <?php echo json_encode($orderCounts); ?>;

        var colors = generateRandomColors(months.length);
        
        // Create chart
        var ctx = document.getElementById('tiga').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: months,
                datasets: [{
                    label: 'Total Cost',
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
                        type: 'category',
                        labels: months,
                        offset: true,
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        beginAtZero: true,
                        stepSize: 50000
                    }
                }
            }
        });

        function generateRandomColors(count) {
            var colors = [];
            for (var i = 0; i < count; i++) {
                var color = '#' + Math.floor(Math.random() * 16777215).toString(16);
                colors.push(color);
            }
            return colors;
        }
    </script>
</body>
</html>
