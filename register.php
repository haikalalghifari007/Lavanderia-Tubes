<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $province = $_POST['province'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    
    include 'koneksi.php';

    if($password == $repassword){
        $query = "INSERT INTO data_user (firstname,lastname,email,gender,province,city,phone,address,password,image) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$gender."', '".$province."', '".$city."', '".$phone."', '".$address."', '".$password."', 'noprofil.jpg')";
        if($result = mysqli_query($koneksi, $query)){
            echo "<script>alert('Berhasil registrasi, menuju halaman utama');  window.location = 'index.php'; </script>";
        }else{
            echo "<script>alert('Terjadi Error');  window.location = 'Sign Up.php'; </script>";
        }
    }else{
        echo "<script>alert('Password tidak sama');  window.location = 'Sign Up.php'; </script>";
    }
    

?>