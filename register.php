<?php
    $name = $_POST['name'];
    $phn_num = $_POST['phn_num'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    include 'koneksi.php';

    $sql = "INSERT INTO users (name, password, email, role, phn_num, address, image)
    VALUES ('$name', '$password', '$email', 'customer', '$phn_num', '$address', 'noprofil.jpg')";
    if ($koneksi->query($sql) === TRUE) {
    $user_id = $koneksi->insert_id;

    //Cek hari tanggal masuk
   
    $membershipStartDate = date('Y-m-d'); // hari ini

    // Memasukkan data pengguna ke dalam tabel 'customers'
    $sql = "INSERT INTO customers (user_id, subscription_type, subscription_start_date)
            VALUES ('$user_id', 'reguler', '$membershipStartDate')";
    if ($koneksi->query($sql) === TRUE) {
        echo "<script>alert('Berhasil registrasi, menuju halaman utama');  window.location = 'index.php'; </script>";
    } else {
        echo "<script>alert('Terjadi Error');  window.location = 'Sign Up.php'; </script>" . $koneksi->error;
    }
    } else {
    echo "<script>alert('Terjadi Error');  window.location = 'Sign Up.php'; </script>" . $koneksi->error;
    }
    
?>