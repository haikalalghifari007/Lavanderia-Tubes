<?php
include 'koneksi.php';

$query_pewangi = "SELECT pewangi, COUNT(*) AS jumlah
                FROM laundry_orders
                GROUP BY pewangi
                ORDER BY jumlah DESC";

$hasil = mysqli_query($koneksi, $query_pewangi);

$pewangi_options = '';

while ($row = mysqli_fetch_assoc($hasil)) {
    $pewangi = $row['pewangi'];
    $pewangi_options .= "<option>$pewangi</option>\n";
}

?>

<select style="background-color: white;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="pewangi">
    <option selected>Pilihan Paket</option>
    <?php echo $pewangi_options; ?>
</select>
