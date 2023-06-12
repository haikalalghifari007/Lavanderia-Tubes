<?php
    include 'koneksi.php';
    session_start();

    $email = $_POST['loginemail'];
    $pass = $_POST['loginpassword'];
    $q = "SELECT * FROM dataUser";

    if(isset($_POST['login'])){
        if($query = mysqli_query($koneksi, $q)){
            $data = mysqli_fetch_assoc($query);

            if($data['email'] == $email){
                if($data['pass'] == $pass){
                    $_SESSION['id'] = $data['id'];
                    $_SESSION['nama'] = $data['nama'];
                    $_SESSION['email'] = $email;
                    $_SESSION['status'] = "login sukses";
                    header("location:account.php");
                }else{
                    echo "<script>alert('Password tidak sesuai');</script>";
                }
            }else{
                echo "<script>alert('Email tidak ditemukan');</script>";
            }

        }else{
            echo "<script>alert('Username atau password tidak terdaftar');</script>";
        }
    }else{
        echo "<script>alert('Harap isi form');</script>";
    }
?>