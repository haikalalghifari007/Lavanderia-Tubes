<!DOCTYPE html>
<html>
<head>
    <title>Stock Quantities for Pewangi Flavors</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        
        .tabel{
            width: 800px;
            margin: auto;
        }
        
    </style>
</head>
<body>

    <div class="tabel">
        <canvas id="satu"></canvas>  

            <?php
            include '../koneksi.php';   
            // Data dummy

                        $query_pewangi = "SELECT payment_method, COUNT(*) AS jumlah
                        FROM laundry_orders
                        GROUP BY payment_method;";


                        $hasil = mysqli_query($koneksi, $query_pewangi);

            // Data


            $flavors = array();
            $stock_quantities = array();

            // Fetch data and populate arrays
            while ($row = mysqli_fetch_assoc($hasil)) {
                $flavors[] = $row['payment_method'];
                $stock_quantities[] = $row['jumlah'];
                // echo $flavors[] = $row['pewangi'] ;
            }

            ?>


            <script>
                // Retrieve data from PHP
                var flavors = <?php echo json_encode($flavors); ?>;
                var stockQuantities = <?php echo json_encode($stock_quantities); ?>;

                var colors = ['rgba(0, 123, 255, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)', 'rgba(75, 192, 192, 1)', 'rgba(153, 102, 255, 1)', 'rgba(255, 159, 64, 1)', 'rgba(128, 128, 128, 1)', 'rgba(255, 0, 0, 1)', 'rgba(0, 255, 0, 1)', 'rgba(0, 0, 255, 1)', 'rgba(255, 255, 0, 1)'];(flavors.length);
                
                // Create chart
                var ctx = document.getElementById('satu').getContext('2d');
                var chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: flavors,
                        datasets: [{
                            label: 'Pembayaran',
                            data: stockQuantities,
                            backgroundColor: colors, // Set desired background color
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

    </div>
    

    
    




    
</body>
</html>
