<?php
include 'koneksi.php';
session_start();
$id = $_SESSION['id'];

        $sqledit = "Update customers set subscription_type = 'reguler' where customer_id='$id'";
        if ($koneksi->query($sqledit) === TRUE) {
          echo "<script>alert('Berhasil langganan');  window.location = 'success.php'; </script>";
          } else {
            echo "Error updating record: " . $koneksi->error;
          }
    
    mysqli_close($koneksi);
?>