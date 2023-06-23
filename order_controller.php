<?php

    $tanggal = $_POST['tanggal'];
    $order = 'waiting';
    $payment = ['gope'];
    $payment_status = 'pending';
    $berat = $_POST['berat'];
    $price = $_POST['price'];
    $pickup = $_POST['tanggal'];
    $delivery_date = $_POST['tanggal'];
    $nota = $_POST['nota'];
    $address = $_POST['address'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $pewangi = $_POST['pewangi'];
    
    
    
    
    
    $paket = $_POST['paket'];
    
    $pewangi = $_POST['pewangi'];
    $id_user = $_POST['id'];
    
    include 'koneksi.php';


        $query = "INSERT INTO `laundry_orders`
        (customer_id, 
        order_date, 
        order_status, 
        payment_status, 
        total_weight, 
        total_cost, 
        pickup_date, 
        delivery_date, 
        nota, 
        alamat, 
        pewangi) 
        VALUES ('".$id_user."', 
        '".$tanggal."', 
        '".$order."', 
        '".$payment_status."', 
        '".$berat."', 
        '".$price."', 
        '".$pickup."', 
        '".$delivery_date."', 
        '".$nota."', 
        '".$address."', 
        '".$pewangi."')";


        if($result = mysqli_query($koneksi, $query)){
            header("location:orderpayment.php");
        }else{
            echo "<script>alert('Terjadi Error');  window.location = 'Sign Up.php'; </script>";
        }

?>