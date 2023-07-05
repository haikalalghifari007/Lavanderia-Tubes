<?php
//mengakses file koneksi.php
include "../koneksi.php";

if (isset($_POST['submit'])) {
	$kode = $_POST['id'];
	$nama = $_POST['nama'];
	$nota = $_POST['nota'];
	$order_status = $_POST['order_status'];
	$phn_num = $_POST['phn_num'];
	$alamat = $_POST['alamat'];
	$total_cost = $_POST['total_cost'];
	$order_date = $_POST['order_date'];
	$pewangi = $_POST['pewangi'];

	$sql = "UPDATE laundry_orders lo
        JOIN users u ON lo.customer_id = u.user_id
        SET lo.order_id = '$kode',
            u.name = '$nama',
            lo.nota = '$nota',
            lo.order_status = '$order_status',
            u.phn_num = '$phn_num',
            u.address = '$alamat',
            lo.total_cost = '$total_cost',
            lo.order_date = '$order_date',
            lo.pewangi = '$pewangi'
        WHERE lo.order_id = '$kode';";

if (mysqli_query($koneksi, $sql)) {
    echo "Record updated successfully. ";
	echo '<script>window.location = "update_status.php";</script>';
} 
}else {
    echo "Error updating record: " . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>


