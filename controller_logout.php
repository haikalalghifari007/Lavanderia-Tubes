<?php
session_start();
$_SESSION['login']= false;
echo $_SESSION['login'];
header('location:index.php');
?>