<?php
include 'koneksi.php';


$sql = "DELETE FROM `order_user` WHERE id=(SELECT MAX(id) FROM `order_user`)";

$hasil = $koneksi->query($sql);
if ($hasil === TRUE) {
	header('Location: order.php');
} else {
	echo "Hapus data gagal. Pesan error: ".$koneksi->error;
}
$koneksi->close(); // menutup koneksi

?>

