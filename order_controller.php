<?php
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $price = $_POST['price'];
    $nota = $_POST['nota'];
    $tanggal = $_POST['tanggal'];
    $paket = $_POST['paket'];
    $berat = $_POST['berat'];
    $pewangi = $_POST['pewangi'];
    $id_user = $_POST['id_user'];
    
    include 'koneksi.php';


        $query = "INSERT INTO order_user (name,phone,address,price,nota, tanggal, paket, berat, pewangi, id_user) VALUES ('".$name."', '".$phone."', '".$address."', '".$price."', '".$nota."', '".$tanggal."', '".$paket."', '".$berat."', '".$pewangi."',  '".$id_user."')";
        if($result = mysqli_query($koneksi, $query)){
            header("location:orderpayment.php");
        }else{
            echo "<script>alert('Terjadi Error');  window.location = 'Sign Up.php'; </script>";
        }

?>