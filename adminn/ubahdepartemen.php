<?php
//mengakses file koneksi.php
include "../koneksi.php";
$id = $_GET['id'];
//Mengakses isi tabel departemen
$sql = "SELECT laundry_orders.*, users.name, users.phn_num
FROM laundry_orders
JOIN users ON laundry_orders.customer_id = users.user_id";
$hasil = $koneksi->query($sql); //memproses query

$sql2 = "SELECT lo.*, u.name, u.phn_num
FROM laundry_orders lo
LEFT JOIN users u ON lo.customer_id = u.user_id
WHERE lo.order_id = $id  ";
$result = $koneksi->query($sql2);
if ($hasil->num_rows > 0) {
	echo "<form action='updatedepartemen.php' method='POST'>";
	$baris = $result->fetch_array() ;
		$kode = $baris['customer_id'];
        //$man = $baris['id_manajer'];
        echo "<label>Id order :</label>
        <input type='text' name='id' readonly value='".$baris['order_id']."'>
        <br />
         <label>Nama :</label>
         <input type='text' size='50' name='nama' value='".$baris['name']."'>
         <br />
         <label>Nota :</label>
         <input type='text' size='50' name='nota' value='".$baris['nota']."'>
         <br />
         <label>Order Status :</label>
         <input type='text' size='50' name='order_status' value='".$baris['order_status']."'>
         <br />
         <label>Nomor Handphone :</label>
         <input type='text' size='50' name='phn_num' value='".$baris['phn_num']."'>
         <br />
         <label>Alamat :</label>
         <input type='text' size='50' name='alamat' value='".$baris['alamat']."'>
         <br />
         <label>Harga :</label>
         <input type='text' size='50' name='total_cost' value='".$baris['total_cost']."'>
         <br />
         <label>Tanggal order :</label>
         <input type='text' size='50' name='order_date' value='".$baris['order_date']."'>
         <br />
         <label>Pewangi :</label>
         <input type='text' size='50' name='pewangi' value='".$baris['pewangi']."'>
         <br />
         ";
    }
    
    echo "
    <input type='submit' value='Simpan' name='submit'><input type='reset' value='Batal'></form>";
$koneksi->close(); // menutup koneksi




?>



