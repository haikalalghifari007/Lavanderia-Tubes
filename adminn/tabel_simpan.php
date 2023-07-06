<!DOCTYPE html>
<html>
<head>
    <title>Stock Quantities for Pewangi bulan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .tabel {
            width: 800px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="tabel">
        <canvas id="tiga"></canvas>  
        <?php
        include '../koneksi.php';   
        // Query to retrieve data
        $query_pewangi = "SELECT MONTH(order_date) AS month, SUM(total_cost) AS total_cost
                          FROM laundry_orders
                          GROUP BY MONTH(order_date);";
        $hasil = mysqli_query($koneksi, $query_pewangi);

        // Data arrays
        $bulan = array();
        $stock_quantities = array();
        $nama_bulan = [
            1 => 'Januari',
            2 => 'Februari',
            3 => 'Maret',
            4 => 'April',
            5 => 'Mei',
            6 => 'Juni',
            7 => 'Juli',
            8 => 'Agustus',
            9 => 'September',
            10 => 'Oktober',
            11 => 'November',
            12 => 'Desember'
        ];

        // Fetch data and populate arrays
        while ($row = mysqli_fetch_assoc($hasil)) {
            $bulan[] = $nama_bulan[$row['month']];
            $stock_quantities[] = $row['total_cost'];
        }
        ?>
        <script>
            // Retrieve data from PHP
            var bulan = <?php echo json_encode($bulan); ?>;
            var stockQuantities = <?php echo json_encode($stock_quantities); ?>;

            var colors = ['rgba(255, 159, 64, 1)', 'rgba(128, 128, 128, 1)', 'rgba(255, 0, 0, 1)', 'rgba(0, 255, 0, 1)', 'rgba(0, 0, 255, 1)', 'rgba(255, 255, 0, 1)'];

            // Create chart
            var ctx = document.getElementById('tiga').getContext('2d');
            var chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: bulan, // Use the month names as labels
                    datasets: [{
                        label: 'Pendapatan',
                        data: stockQuantities,
                        backgroundColor: colors,
                        borderColor: 'rgba(0, 123, 255, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    </div>
</body>
</html>
