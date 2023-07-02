<!DOCTYPE html>
<html>
<head>
    <title>Stock Quantities for Pewangi Flavors</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
        width: 1300px;
        margin: 100px;
        border: 3px solid #73AD21;
        }
        .tabel{
            width: 700px;
            margin: auto;
        }
    </style>
</head>
<body>

    <div class="tabel">
    <canvas id="stockChart"></canvas>  

            <?php
            include '../koneksi.php';   
            // Data dummy

                        $query_pewangi = "SELECT pewangi, COUNT(*) AS jumlah
                        FROM laundry_orders
                        GROUP BY pewangi;";


                        $hasil = mysqli_query($koneksi, $query_pewangi);

            // Data


            $flavors = array();
            $stock_quantities = array();

            // Fetch data and populate arrays
            while ($row = mysqli_fetch_assoc($hasil)) {
                $flavors[] = $row['pewangi'];
                $stock_quantities[] = $row['jumlah'];
                echo $stock_quantities[] = $row['jumlah'] ;
                // echo $flavors[] = $row['pewangi'] ;
            }

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
                            label: 'Jumlah Pemesanan Pewangi',
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

    </div>
    

    
    




    
</body>
</html>
