<?php
    include 'koneksi.php';
    session_start();

    $email = $_POST['loginemail'];
    $pass = $_POST['loginpassword'];
    $q = "SELECT * FROM users WHERE email = '$email'";

    if (isset($_POST['login'])) {
        $query = mysqli_query($koneksi, $q);
        if (mysqli_num_rows($query) > 0) {
            $data = mysqli_fetch_assoc($query);

            if ($data['password'] == $pass) {
                $_SESSION['id'] = $data['user_id'];
                $_SESSION['nama'] = $data['name'];
                $_SESSION['email'] = $email;
                $_SESSION['status'] = "login sukses";

                if ($data['role'] == 'customer' || $data['role'] == 'courier') {
                    header("location: account.php");
                } elseif ($data['role'] == 'admin') {
                    header("location: adminn/dashboard.php");
                }
            } else {
                echo "<script>alert('Password tidak sesuai');
                window.location = 'index.php';
                </script>";
                exit();
            }
        } else {
            echo "<script>alert('Email tidak ditemukan');
            window.location = 'index.php';
            </script>";
            exit();
            

        }
    } else {
        echo "<script>alert('Harap isi form');</script>";
    }
?>