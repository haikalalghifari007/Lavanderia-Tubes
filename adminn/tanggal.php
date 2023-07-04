<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the dates from the form
    $dari_tanggal = $_POST['dari_tanggal'];
    $sampai_tanggal = $_POST['sampai_tanggal'];

    // Construct the SQL query with the specified date range and sort by "Date & Time"
    $query = "SELECT *
              FROM laundry_orders
              WHERE `order_date` BETWEEN '$dari_tanggal' AND '$sampai_tanggal'
              ORDER BY `order_date` ASC";

    $result = mysqli_query($koneksi, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
        name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inspired by Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>tanggal</title>
    <link
        rel="canonical"
        href="https://www.wrappixel.com/templates/ample-admin-lite/"
    />
    <!-- Favicon icon -->
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="plugins/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
        href="plugins/bower_components/chartist/dist/chartist.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"
    />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container-fluid">
        <!-- Bagian heading -->
        <h1 class="h3 mb-2 text-gray-800">Laporan Pendapatan Berdasarkan Transaksi</h1>
        <p class="mb-4">Halaman laporan berisi informasi seluruh laporan yang dapat diolah oleh admin.</p>

        <input type="hidden" name="isi_laporan" id="isi_laporan" value="transaksi">

        <div class="card shadow mb-4">
            <div class="card-body">
                <div id="filter_laporan" class="collapse show">
                    <form method="post" id="form">
                        <div class="form-row">
                            <div class="col-sm-3">
                                <input type="date" class="form-control" name="dari_tanggal" required="">
                            </div>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" name="sampai_tanggal" required="">
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" id="btn-tampil" class="btn btn-dark">
                                    <span class="text"><i class="fas fa-search fa-sm"></i> Tampilkan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($result)): ?>
            <!-- Display the sorted data -->
            <table>
                <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Price</th>
                        <th>Invoice</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['order_date']; ?></td>
                            <td><?php echo $row['total_cost']; ?></td>
                            <td><?php echo $row['nota']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php endif; ?>

    </div>
</body>
</html>
