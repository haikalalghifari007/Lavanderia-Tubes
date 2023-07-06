<?php
include '../koneksi.php';

          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $order_id = $_POST['order_id'];
            $new_status = $_POST['new_status'];
            
            $status = "UPDATE laundry_orders
                       SET order_status = '$new_status'
                       WHERE nota = '$order_id'" ;
            $result = mysqli_query($koneksi, $status);
        
        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content here -->
</head>
<body>

<div class="table-responsive">
    <input type="text" class="search form-control" placeholder="Cari nota.....">
    <table class="table no-wrap">
        <thead>
            <?php
        $sql = "SELECT laundry_orders.*, users.name, users.phn_num
        FROM laundry_orders
        JOIN users ON laundry_orders.customer_id = users.user_id;
        "; 
$hasil = $koneksi->query($sql); // memproses query
if ($hasil->num_rows > 0) {
    // menampilkan data setiap barisnya
    while ($baris = $hasil->fetch_assoc()) {
        $id = $baris['order_id'];
        $name = $baris['name'];
        $phone = $baris['phn_num'];
        $address =$baris['alamat'];
        $price = $baris['total_cost'];
        $nota = $baris['nota'];
        $pewangi = $baris['pewangi'];
        $order_status = $baris['order_status'];
        $order_date = $baris['order_date'];

        echo "<tr><td>$nota</td>";
        echo "<td>$name</td>";
        echo "<td>$order_status</td>";
        echo "<td>$phone</td>";
        echo "<td>$address</td>";
        echo "<td>$price</td>";
        echo "<td>$order_date</td>";
        echo "<td>$pewangi</td>";
        echo "<td>
              <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#updateOrder' data-id='$nota'>Edit</button>
              </td></tr>";
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan";
}

// $koneksi->close(); // menutup koneksi
?>



        </thead>
        <tbody>
        <?php
        // PHP code for retrieving and displaying data
        ?>

        </tbody>
    </table>
</div>

<!-- Modal for updating order status -->
<div class="modal fade" id="updateOrder" tabindex="-1" role="dialog" aria-labelledby="updateOrderLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <!-- Modal header content here -->
            </div>
            <div class="modal-body">
                <!-- Modal body content here -->
                <form method="post" action="update_status.php">
                    <div class="form-group">
                        <label for="new_status">New Status:</label>
                        <select class="form-control" name="new_status" required>
                            <option value="waiting">Waiting</option>
                            <option value="in_process">In Process</option>
                            <option value="ready_to_ship">Ready to Ship</option>
                            <option value="done">Done</option>
                        </select>
                    </div>
                    <input type="hidden" id="order_id" name="order_id" value="">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel </button>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#updateOrder').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget); // Button that triggered the modal
            var orderId = button.data('id'); // Extract order ID from data-id attribute
            var modal = $(this);
            modal.find('#order_id').val(orderId); // Set the value of the hidden input field
        });
    });
</script>

<script>
  $(document).ready(function() {
    $(".search").keyup(function() {
      var searchTerm = $(this).val().toLowerCase();
      $(".table tbody tr").each(function() {
        var lineText = $(this).text().toLowerCase();
        if (lineText.includes(searchTerm)) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    });
  });



</script>
</body>
</html>
