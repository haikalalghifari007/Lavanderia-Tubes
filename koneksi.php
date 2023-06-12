<?php

$koneksi = mysqli_connect("localhost","root","","melaundry");
if (mysqli_connect_errno()){
    echo "failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>