<?php
include '../koneksi.php';
// Retrieve the pewangi from the query string
$pewangi = $_GET['pewangi'];

// Function to check stock availability
function checkStockAvailability($pewangi) {
  // Query your database or any other data source to check stock availability
  // Perform necessary checks and calculations
  // Here's a sample implementation

  // Assuming you have a database connection established
  // Make sure to adjust this query according to your database structure
  $sql = "SELECT stock FROM pewangi_stock WHERE pewangi = '$pewangi'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $stock = $row['stock'];

    if ($stock > 0) {
      return true; // Stock available
    } else {
      return false; // Stock not available
    }
  } else {
    return false; // Pewangi not found
  }
}

// Check stock availability and return the response as JSON
$response = array();
$response['stockAvailable'] = checkStockAvailability($pewangi);
echo json_encode($response);
?>
