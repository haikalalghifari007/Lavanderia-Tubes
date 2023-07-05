<?php
include '../koneksi.php';
session_start();
    $id = $_SESSION['id'];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $order_id = $_POST['order_id'];
        $new_status = $_POST['new_status'];

        $status = "UPDATE laundry_orders
                   SET order_status = '$new_status'
                   WHERE nota = '$order_id'";
        $result = mysqli_query($koneksi, $status);

        if ($result) {
            echo "Order status updated successfully.";
        } else {
            echo "Error updating order status: " . mysqli_error($koneksi);
        }
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
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="">
                <div class="form-row">
                    <div class="col-md-12">
                        <label for="order_id">Order ID:</label>
                        <input type="text" class="form-control" name="order_id" required>
                    </div>
                    <div class="col-md-12">
                        <label for="new_status">New Status:</label>
                        <select class="form-control" name="new_status" required>
                            <option value="waiting">Waiting</option>
                            <option value="in_process">In Process</option>
                            <option value="ready_to_ship">Ready to Ship</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update Status</button>
            </form>
            
        </div>
    </div>
</body>
</html>
