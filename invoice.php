<?php
include 'koneksi.php';
session_start();
if(! $_SESSION['login']){
  header("Location:login.php");
}else{
  $id = $_SESSION['id'];
  $query = " select * from data_user where id= '$id' ";
  $result = mysqli_query($koneksi, $query);
  $user = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>MeLaundry By Nedroid</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link rel="stylesheet" href="map.css">
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
      <link rel="stylesheet" href="map.css">
    
  </head>

  <body>
    
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div class="spinner-grow text-primary" role="status"></div>
    </div>
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
          <a href="activity.php" class="nav-item nav-link ">Activity</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown" >Features</a>
            <div class="dropdown-menu shadow-sm m-0">
                <a href="account.php" class="dropdown-item">Account</a>
                <a href="menu.php" class="dropdown-item">Menu</a>
                <a href="moreinfo.php" class="dropdown-item">More info</a>
            </div>
        </div>
              <a href='controller_logout.php' class='btn btn-outline-success' style='color: rgb(0, 213, 255);height:40px; margin-top:20px;width: 90px; border-color: rgb(0, 213, 255);' >Logout</a>       </nav>
    </nav id="pakaian">
    <!-- Navbar End -->

    <!-- invoice -->
    <div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID User: <?php echo $user['id'] ?></strong></p>
        </div>
        <div class="col-xl-3 float-end">
         
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
            <p class="pt-0">Melaundry</p>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-8">
            <ul class="list-unstyled">
              <li class="text-muted">To: <span style="color:#5d9fc5 ;"><?php echo $user['firstName'], " ", $user['lastName'] ?></span></li>
              <li class="text-muted"><?php echo $user['city'] ?></li>
              <li class="text-muted"><?php echo $user['province'] ?></li>
              <li class="text-muted"><i class="fas fa-phone"></i> <?php echo $user['phone'] ?></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Invoice</p>
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">ID User: </span><?php echo $user['id'] ?></li>
            
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Status:</span><span class="badge badge-pill badge-success">
                  succes</span></li>
            </ul>
          </div>
        </div>

        <div class="row my-2 mx-1 justify-content-center">
          <table class="table table-striped table-borderless">
            <thead style="background-color:#84B0CA ;" class="text-white">
              <tr>
                <th class="border-top-0">Invoice</th>
                <th class="border-top-0">Phone Number</th>
                <th class="border-top-0">Pickup Address</th>
                <th class="border-top-0">Price</th>
                <th class="border-top-0">Date Order</th>
              </tr>
            </thead>
            <tbody>
                    <?php
                    $result = mysqli_query($koneksi, "SELECT SUM(price) AS value_sum FROM order_user where id_user = '$id'"); 
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['value_sum'];
                    $sql = "SELECT * from order_user where id_user = '$id'"; 
                    $hasil = $koneksi->query($sql); //memproses query
    if ($hasil->num_rows > 0) {
       //menampilkan data setiap barisnya
       while ($baris = $hasil->fetch_assoc()) {
                       $id = $baris['id'];
                       $phone = $baris['phone'];
                       $address =$baris['address'];
                       $price = $baris['price'];
                       $nota = $baris['nota'];
                       $tanggal = $baris['tanggal'];
                       echo "<tr><td>$nota</td>";
                       echo "<td>$phone</td><td>$address</td>><td>$price</td><td>$tanggal</td>" ?>
                    </tbody>
                    <?php          
       }	
       echo "</table>";
    } else {
            echo "Data tidak ditemukan";
    }
    $koneksi->close(); // menutup koneksi
?>
        </div>
        <div class="row">
          <div class="col-xl-8">
            <p class="ms-3">Add additional notes and payment information</p>

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
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Thank you for your purchase</p>
          </div>
          <div class="col-xl-2">
            
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
    <!-- invoice end -->
    
    <!-- Footer Start -->
    <div class="container-fluid bg-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-primary mb-4"><img class="img-fluid me-2" src="Logo.png" alt=""

                            style="width: auto;"></h1>
                    <span>Serahkan segala masalah cucian anda kepada kami, karena MeLaundry adalah platform Laundry yang aman dan Praktis.</span>
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
                    <p><i class="fa fa-envelope me-3"></i>cs@melaundry.id</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">MeLaundry</h5>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="order.php">Order</a>
                    <a class="btn btn-link" href="activity.php">Activity</a>
                    <a class="btn btn-link" href="account.php">Account</a>
                </div>
                <div class="col-lg-3 col-md-6">
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
                        &copy; <a href="#">MeLaundry</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="http://127.0.0.1:5500/index.php">Nedroid</a> Distributed By <a
                            href="https://themewagon.com">Melaundry</a>
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
        <!-- Template Javascript -->
        <script src="main.js"></script>
        <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <!-- Bootstrap JS -->
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
     <!-- Custom Script -->      
    <script  src="js/script.js"></script>

</body>

</html>