
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABEL</title>

    <style>
        .container {
        width: 1300px;
        margin: auto;
        margin-top: 100px;
        border: 3px solid #73AD21;
        }
        .tabel{
            width: 900px;
            margin: auto;
            margin-top: 300px;
            border: 3px solid #73AD21;
        }
    </style>
</head>
<body>
<div class="container">

    <div class="tabel">
    <?php
    include '../koneksi.php';
    // Data dummy

                $query_pewangi = "SELECT pewangi, COUNT(*) AS jumlah
                FROM laundry_orders
                GROUP BY pewangi;";


                $hasil = mysqli_query($koneksi, $query_pewangi);

                if ($hasil->num_rows > 0) {

                // menampilkan data setiap barisnya
                    while ($baris = $hasil->fetch_assoc()) {
                    echo $name = $baris["jumlah"];
                    }   

                } else {
                    echo "Data tidak ditemukan";
                }


    $data = [
        ['order_date' => '2023-06-01', 'total_cost' => $name],
        ['order_date' => '2023-06-02', 'total_cost' => $name],
        // ['order_date' => '2023-06-03', 'total_cost' => $name = $user["jumlah"]]
    ];




    // Mengubah format tanggal menjadi string bulan dan tahun
    $labels = [];
    foreach ($data as $item) {
        $date = date_create($item['order_date']);
        $labels[] = date_format($date, 'M Y');
    }

    // Mengambil total biaya dari setiap data
    $costs = array_column($data, 'total_cost');

    // Kode JavaScript untuk menggambar grafik
    $jsCode = <<<EOD
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="myChart"></canvas>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [{{LABELS}}],
                datasets: [{
                    label: 'Total Cost',
                    data: [{{COSTS}}],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 2
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
    EOD;

    // Mengganti placeholder dengan data yang sesuai
    $jsCode = str_replace('{{LABELS}}', '"' . implode('", "', $labels) . '"', $jsCode);
    $jsCode = str_replace('{{COSTS}}', implode(', ', $costs), $jsCode);

    // Menampilkan grafik
    echo $jsCode;
    ?>

    </div>
    


</div>
</body>
</html>

