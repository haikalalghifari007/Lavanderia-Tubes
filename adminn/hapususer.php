<?php
include '../koneksi.php';

$id=$_GET['id'];

$sql = "delete from data_user where id='$id'";

$hasil = $koneksi->query($sql);
if ($hasil === TRUE) {
	header('Location: dashboard.php');
} else {
	echo "Hapus data gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi

?>

