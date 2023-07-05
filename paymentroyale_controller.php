<?php
include 'koneksi.php';
session_start();
$id = $_SESSION['id'];

        $sqledit = "UPDATE customers
        SET subscription_type = 'royale',
            subscription_start_date = CURDATE(),
            subscription_end_date = DATE_ADD(CURDATE(), INTERVAL 1 MONTH)
        WHERE customer_id = $id;
        ";
        if ($koneksi->query($sqledit) === TRUE) {
            echo "<script>alert('Berhasil langganan');  window.location = 'success.php'; </script>";
          } else {
            echo "Error updating record: " . $koneksi->error;
          }
    
    mysqli_close($koneksi);
?>