<?php
include 'koneksi.php';
session_start();
$id = $_SESSION['id'];
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

    if($password == $repassword){
        $sqledit = "Update data_user set firstname = '$firstName', lastname = '$lastName', email='$email', gender='$gender', province='$province', city='$city', phone='$phone', address='$address', password='$password' where id='$id'";
        if ($koneksi->query($sqledit) === TRUE) {
            echo "<script>alert('Berhasil ubah data');  window.location = 'account.php'; </script>";
          } else {
            echo "Error updating record: " . $koneksi->error;
          }
    }
    $hasil = mysqli_query($koneksi,$sqledit);
    $rowData = $hasil->fetch_array();
    $_SESSION['user'] = $rowData;
?>