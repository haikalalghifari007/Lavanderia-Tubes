<?php
// Load file koneksi.php
include "../koneksi.php";
// 

// $nama = $_POST['nama'];
// $alamat = $_POST['alamat'];
// $email = $_POST['email'];
$nama = 'gilang';
$alamat = 'pacitan';
$email = 'gilang91668@gmail.com';
$biaya = 100000;
$order_id= rand();
$status= 1;

// menginput data ke database
mysqli_query($koneksi,"insert into klien  values('','$nama','$alamat','$biaya','$order_id','$status','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:../midtrans/examples/snap/checkout-process-simple-version.php?order_id=$order_id");


?>


