<!DOCTYPE html>
<html>
<head>
    <title>Stock Quantities for Pewangi Flavors</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        
        .tabel{
            width: 500px;
            margin: auto;
        }
    </style>
</head>
<body>

    <div class="tabel">
    <canvas id="dua"></canvas>  

            <?php
            include '../koneksi.php';   

                        $query_pewangi = "SELECT pewangi, COUNT(*) AS jumlah
                        FROM laundry_orders
                        GROUP BY pewangi;";


                        $hasil = mysqli_query($koneksi, $query_pewangi);


            $flavors = array();
            $stock_quantities = array();

            while ($row = mysqli_fetch_assoc($hasil)) {
                $flavors[] = $row['pewangi'];
                $stock_quantities[] = $row['jumlah'];
            }

            ?>


            <script>
                var flavors = <?php echo json_encode($flavors); ?>;
                var stockQuantities = <?php echo json_encode($stock_quantities); ?>;

                var colors = ['rgba(0, 123, 255, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)', 'rgba(128, 128, 128, 1)', 'rgba(255, 0, 0, 1)', 'rgba(0, 255, 0, 1)', 'rgba(0, 0, 255, 1)', 'rgba(255, 255, 0, 1)'];(flavors.length);
                

                var ctx = document.getElementById('dua').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: flavors,
                        datasets: [{
                            label: 'Jumlah Pemesanan Pewangi',
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
