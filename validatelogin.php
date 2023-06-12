<?php
    include 'koneksi.php';
    session_start();

    $email = $_POST['loginemail'];
    $pass = $_POST['loginpassword'];
    $q = "SELECT * FROM data_user WHERE email = '".$email."' AND password = '".$pass."'";
    
    if(isset($_POST['login'])){
        if  ($query = mysqli_query($koneksi, $q)){
            $user = mysqli_fetch_assoc($query);

                if($user['email'] == $email and $user['password'] == $pass){
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['login'] = true;
                    if($user['usertype'] == "admin"){
                        
                        header("location:adminn/dashboard.php");
                    } 
                    // cek jika user login sebagai admin
                    else{
                        // buat session login dan username
                        header("location:account.php");    
                    
                    }
                }else{
                echo "<script>alert('email atau password tidak sesuai');  window.location = 'Login.php'; </script>";
                }
            }
        }
            
    




    //     else{
    //         echo "<script>alert('Email tidak ditemukan'); window.location = 'Login.php'; </script>"; 
            

    //     }
    //     else{
    //     echo "<script>alert('Username atau password tidak terdaftar');  window.location = 'Login.php'; </script>";
            
        
    // }
    // else{
    // echo "<script>alert('Harap isi form');</script>";
    // }
?>