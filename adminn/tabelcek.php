<!DOCTYPE html>
<html>
<head>
    <title>Stock Quantities for Pewangi Flavors</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="stockChart"></canvas>

    

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
    // Data
    
    $flavors = ['Vanilla', 'Lemon', 'Chocolate', 'Cookies', 'Melon'];
    $stock_quantities = $baris["jumlah"];
    ?>








    <script>
        // Retrieve data from PHP
        var flavors = <?php echo json_encode($flavors); ?>;
        var stockQuantities = <?php echo json_encode($stock_quantities); ?>;

        // Create chart
        var ctx = document.getElementById('stockChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: flavors,
                datasets: [{
                    label: 'Stock Quantities',
                    data: stockQuantities,
                    backgroundColor: 'rgba(0, 123, 255, 0.5)', // Set desired background color
                    borderColor: 'rgba(0, 123, 255, 1)', // Set desired border color
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
</body>
</html>
