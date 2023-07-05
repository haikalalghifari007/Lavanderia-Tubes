<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = false;
} else {
    $id = $_SESSION['id'];
    $query = "SELECT * FROM laundry_orders WHERE customer_id = $id";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);
    $status = $user["order_status"];
}

// Set the display status for each step
$step1Display = 'none';
$step2Display = 'none';
$step3Display = 'none';
$step4Display = 'none';

// Determine the display status based on the status value
if ($status === 'waiting') {
    $step1Display = 'block';
} elseif ($status === 'in_process') {
    $step1Display = 'block';
    $step2Display = 'block';
} elseif ($status === 'ready_to_ship') {
    $step1Display = 'block';
    $step2Display = 'block';
    $step3Display = 'block';
} elseif ($status === 'done') {
    $step1Display = 'block';
    $step2Display = 'block';
    $step3Display = 'block';
    $step4Display = 'block';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul id="progressbar-2" class="d-flex justify-content-between mx-0 mt-0 mb-5 px-0 pt-0 pb-2">
        <li class="step0 active text-center" id="step1" style="display: <?php echo $step1Display; ?>"></li>
        <li class="step0 active text-center" id="step2" style="display: <?php echo $step2Display; ?>"></li>
        <li class="step0 text-muted text-center" id="step3" style="display: <?php echo $step3Display; ?>"></li>
        <li class="step0 text-muted text-end" id="step4" style="display: <?php echo $step4Display; ?>"></li>
    </ul>
</body>

</html>
