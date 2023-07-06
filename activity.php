<?php
  include 'koneksi.php';
  session_start();
  if (! isset($_SESSION['login'])){
    $_SESSION['login'] = false;
  }else{
    $id = $_SESSION['id'];
    $query = " select * from users where user_id= '$id' ";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);
  }


  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the dates from the form
    $dari_tanggal = $_POST['dari_tanggal'];
    $sampai_tanggal = $_POST['sampai_tanggal'];

    // Construct the SQL cari_tanggal with the specified date range and sort by "Date & Time"
    $cari_tanggal = "SELECT *
                    FROM laundry_orders
                    WHERE `order_date` BETWEEN '$dari_tanggal' AND '$sampai_tanggal'
                    AND customer_id = '$id'
                    ORDER BY `order_date` ASC";

    $result = mysqli_query($koneksi, $cari_tanggal);
}else{
  $cari_tanggal = "SELECT * from laundry_orders where customer_id = $id;";

    $result = mysqli_query($koneksi, $cari_tanggal);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lavanderia By Restu Ibu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <link rel="stylesheet" href="activity.css">
    <!-- Favicon -->
    <link href="Logo.png" rel="icon" />
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="animate.min.css" rel="stylesheet" />
    <link href="owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="style.css" rel="stylesheet" />
      <!-- Style CSS -->
      <link rel="stylesheet" href="stylepopup.css">
      <!-- Demo CSS -->
      <link rel="stylesheet" href="css/demo.css">
    
  </head>

  <body>
    <!-- Spinner Start -->
    <!-- <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav
      class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5"
    >
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <h2 class="m-0 text-primary">
          <img
            class="img-fluid me-2"
            src="Logo.png"
            alt=""
            style="width: auto"
          />
        </h2>
      </a>
      <button
        type="button"
        class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#navbarCollapse"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-4 py-lg-0">
          <a href="index.php" class="nav-item nav-link ">Home</a>
          <a href="order.php" class="nav-item nav-link ">Order</a>
          <a href="activity.php" class="nav-item nav-link active">History</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Features</a>
            <div class="dropdown-menu shadow-sm m-0">
                <a href="account.php" class="dropdown-item">Account</a>
                <a href="menu.php" class="dropdown-item">Membership</a>
                <a href="moreinfo.php" class="dropdown-item">More info</a>
            </div>
        </div>
            <a href='controller_logout.php' class='btn btn-outline-success' style='height:40px; margin-top:20px;color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);' >Logout</a>       
         
    </nav>
    <!-- Navbar End -->
    <H1 style="color:gold;">HISTORY ORDERS</H1>
    <div class="form-group pull-right">
    <div class="card shadow mb-4">
            <div class="card-body">
                <div id="filter_laporan" class="collapse show">
                    <form method="post" id="form">
                        <div class="form-row">
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="dari_tanggal" required="">
                            </div>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" name="sampai_tanggal" required="">
                            </div>
                            <div class="col-sm-4">
                                <button type="submit" id="btn-tampil" class="btn btn-dark">
                                    <span class="text"><i class="fas fa-search fa-sm"></i> Tampilkan</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <input type="text" class="search form-control" placeholder="Cari nota anda....">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th class="col-md-5 col-xs-5">Tanggal Order</th>
      <th class="col-md-5 col-xs-5">Alamat</th>
      <th class="col-md-4 col-xs-4">Harga</th>
      <th class="col-md-3 col-xs-3">Nota</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
  <?php
                    $sql = "SELECT * from laundry_orders where customer_id = '$id'"; 
                    $hasil = $koneksi->query($sql); //memproses query
    if ($hasil->num_rows > 0) {
       //menampilkan data setiap barisnya
       while ($row = $result->fetch_assoc()) {
                       $price = $row['total_cost'];
                       $status = $row['alamat'];
                       $nota = $row['nota'];
                       $tanggal = $row['order_date'];
                       echo "<tr><td>$tanggal</td>";
                       echo "<td>$status</td>";
                       echo "<td>$price</td>
                       <td><a href='map.php?nota=" . urlencode($nota) . "'>$nota</a></td>" ?>
                    </tbody>
                    <?php          
       }	
        
       echo "</table>";
    } else {
      
            echo "Data tidak ditemukan";
    }
?>
<div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr>
                <th class="border-top-0">Invoice</th>
                <th class="border-top-0">Nomor Handphone</th>
                <th class="border-top-0">Alamat</th>
                <th class="border-top-0">Status Order</th>
                <th class="border-top-0">Harga</th>
                <th class="border-top-0">Tanggal Order</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                    $result = mysqli_query($koneksi, "SELECT SUM(total_cost) AS value_sum FROM laundry_orders where customer_id = '$id'"); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
                    // $sql = "SELECT *
                    // FROM laundry_orders
                    // JOIN users ON laundry_orders.customer_id = users.user_id
                    // WHERE laundry_orders.customer_id = '$id'
                    // "; 
                    // $hasil = $koneksi->query($sql); //memproses query
                    // if ($hasil->num_rows > 0) {
                    //   //menampilkan data setiap barisnya
                    //   while ($baris = $hasil->fetch_assoc()) {
                    //                   $id = $baris['customer_id'];
                    //                   $phone = $baris['phn_num'];
                    //                   $address =$baris['alamat'];
                    //                   $status =$baris['order_status'];
                    //                   $price = $baris['total_cost'];
                    //                   $nota = $baris['nota'];
                    //                   $tanggal = $baris['order_date'];
                    //                   echo "<tr><td>$nota</td>";
                    //                   echo "<td>$phone</td><td>$address</td>><td>$status</td><td>$price</td><td>$tanggal</td>"        
                    //   }	
                    //   echo "</table>";
                    // } else {
                    //         echo "Data tidak ditemukan";
                    // }
                    // $koneksi->close(); // menutup koneksi
                ?>
        </div>
        
        <div class="row">
          <div class="col-xl-8">
            <!-- <p class="ms-3">Add additional notes and payment information</p> -->

          </div>
          <div class="col-xl-3">
            <ul class="list-unstyled">
              <li></li>
              <li></li>
            </ul>
            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                style="font-size: 25px;"><?php echo $sum ?></span></p>
          </div>
        </div>


<!-- Editable table -->
    <!-- history end -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-primary mb-4"><img class="img-fluid me-2" src="Logo.png" alt=""

                            style="width: auto;"></h1>
                    <span>Serahkan segala masalah cucian anda kepada kami, karena Lavanderia adalah platform Laundry yang aman dan Praktis.</span>
                </div>
                <div class="col-md-6">
                    <h5 class="mb-4">Daftar Sekarang</h5>
                    <p>Jadilah bagian dari kami.</p>
                    <div class="position-relative">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Hubungi Kami</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Kabupaten Sleman, DIY</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+62 812-3456-789</p>
                    <p><i class="fa fa-envelope me-3"></i>cs@Lavanderia.id</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Lavanderia</h5>
                    <?php

                      if(! $_SESSION['login']){ //IKIII
                        echo "<a class='btn btn-link' href='index.php'>Home</a>
                        <a class='btn btn-link' href='login.php'>Order</a>
                        <a class='btn btn-link' href='login.php'>History</a>
                        <a class='btn btn-link' href='login.php'>Account</a>";
                      }
                      else{
                        echo "<a class='btn btn-link' href='index.php'>Home</a>
                        <a class='btn btn-link' href='order.php'>Order</a>
                        <a class='btn btn-link' href='activity.php'>History</a>
                        <a class='btn btn-link' href='account.php'>Account</a>";
                      } 
                    ?>   <!--TEKAN KENEEE-->
                </div>



                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Bantuan & Panduan</h5>
                    <a class="btn btn-link" href="bantuan.php">Syarat & Ketentuan</a>
                    <a class="btn btn-link" href="bantuan.php">Kebijakan Privasi</a>
                    <a class="btn btn-link" href="bantuan.php">Disclaimer</a>
                    <a class="btn btn-link" href="bantuan.php">Hubungi Kami</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Ikuti Kami</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square rounded-circle me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Lavanderia</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="http://127.0.0.1:5500/index.php">Restu Ibu</a> Distributed By <a
                            href="https://themewagon.com">Lavanderia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

         <!-- partial:index.partial.php -->
         <div  class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-title text-center">
                  <h4>Login</h4>
                </div>
                <div class="d-flex flex-column text-center">
                  <form>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email1"placeholder="Your email address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password1" placeholder="Your password...">
                    </div>
                    <button style="color:white ;" type="button" class="btn btn-info btn-block btn-round">Login</button>
                  </form>
                  
                  <div class="text-center text-muted delimiter">or connect with</div>
                  <div class="d-flex justify-content-center social-buttons">
                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Twitter">
                      <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Facebook">
                      <i class="fab fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-secondary btn-round" data-toggle="tooltip" data-placement="top" title="Linkedin">
                      <i class="fab fa-linkedin"></i>
                    </button>
                  </di>
                </div>
              </div>
            </div>
              <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Don't have an account? <a href="login.php" class="text-info"> Sign Up</a>.</div>
              </div>
          </div>
        </div>
        <!-- partial -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="wow.min.js"></script>
    <script src="easing.min.js"></script>
    <script src="waypoints.min.js"></script>
    <script src="owl.carousel.min.js"></script>
    <script src="counterup.min.js"></script>
    <script src="activity.js" ></script>
<!-- jQuery -->
<script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
<!-- Popper JS -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<!-- Bootstrap JS -->
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
 <!-- Custom Script -->      
<script  src="js/script.js"></script>
    <!-- Template Javascript -->
    <script src="main.js"></script>
</body>

</html>