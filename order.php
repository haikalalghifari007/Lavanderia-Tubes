<?php
  include 'koneksi.php';
  session_start();
  if (!$_SESSION['login']){
    $_SESSION['login'] = false;
  }else{
    $id = $_SESSION['id'];
    $_SESSION['login'] = true;
    $query = "SELECT * FROM users WHERE user_id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    $customer_query = "SELECT * FROM customers WHERE user_id = $id";
    $customer_result = mysqli_query($koneksi, $customer_query);
    $customer = mysqli_fetch_assoc($customer_result);

    $subscription_type = $customer["subscription_type"];

    

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
          <a href="order.php" class="nav-item nav-link active">Order</a>
          <a href="activity.php" class="nav-item nav-link">Activity</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Features</a>
            <div class="dropdown-menu shadow-sm m-0">
                <a href="account.php" class="dropdown-item">Account</a>
                <a href="menu.php" class="dropdown-item">Menu</a>
                <a href="moreinfo.php" class="dropdown-item">More info</a>
            </div>
        </div>
            
            <a href='controller_logout.php' class='btn btn-outline-success' style='color: rgb(0, 213, 255);height:40px; margin-top:20px;width: 90px; border-color: rgb(0, 213, 255);' >Logout</a>       
            
    </nav>
    <!-- Navbar End -->
   
<!-- order -->
<section class="h-100 gradient-custom">



<form action="order_controller.php" method="post">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-8">
          <div class="card" style="border-radius: 10px;">
            <div class="card-header px-4 py-5">
             <img src="Logo.png" alt="">
            </div>
            <div class="card-body p-4">
              <div class="d-flex justify-content-between align-items-center mb-4">
  
              </div><form>
                <div class="form-row">
                
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" id="inputPassword4" placeholder="Username" value="<?php echo $user['name'] ?>" name="name"/> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputAddress">No Telepon</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="081122321" value="<?php echo $user['phn_num'] ?>" name="phone"/>
                </div>
                
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat Jemput Pakaian</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address"></textarea>
  </div>
     
  <div class="form-group col-md-2">
                    <label for="inputZip">Berat</label>
                    <input placeholder="kg" style="text-align:right; margin-left:-10px;" type="text" name="berat" class="form-control" id="firstNumber">
                  </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                  <form name="hasil">


                  
      <label for="inputState">Pilihan Paket</label><br />


      <script>
      function multiplyBy() {
        
        oper = document.getElementById("operator").value;

        num1 = document.getElementById("firstNumber").value;
        if (oper === "reguler") {
          document.getElementById("result").innerHTML = num1 * 5000;
          document.getElementById("resultsc").value = num1 * 5000;
        }
        if (oper === "kilat") {
          document.getElementById("result").innerHTML = num1 * 8000;
          document.getElementById("resultsc").value = num1 * 8000;
        }
        if (oper === "express") {
          document.getElementById("result").innerHTML = num1 * 10000;
          document.getElementById("resultsc").value = num1 * 10000;
        } 
      }
    </script>

    <?php if($subscription_type == "gold" || $subscription_type == "royale" ){
      echo "<script>
          function multiplyBy() {
          document.getElementById('result').innerHTML = num1 * 0;
          document.getElementById('resultsc').value = num1 * 0;
          }
      </script>";
    }
    ?>
    
      <select
      onclick="multiplyBy()"
        name="paket"
        style="background-color: white"
        class="btn btn-secondary dropdown-toggle"
        type="button"
        id="operator"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
      >
        Pilihan Paket
        <option selected disabled value="pilih paket">pilih paket</option>
        <option value="reguler">Reguler</option>
        <option value="kilat">Kilat</option>
        <option value="express">Express</option>
      </select>
    </form>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="inputState">Pilihan Pewangi</label><br>
                    <select style="background-color: white;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" name="pewangi">
                      Pilihan Paket
                    </button>>
                      <option>vanilla</option>
                      <option>lemon</option>
                      <option>cookies</option>
                      <option>chocolate</option>
                      <option>cinnamon</option>
                      <option>lavender</option>
                      <option>melon</option>
                      <option>semangka</option>
                      <option>oreo</option>
                      <option>teh</option>
                    </select>
                  
                  </div>
               
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" onclick="randomString();multiplyBy();">
                    <label class="form-check-label" for="gridCheck" >
                      Pastikan semua data telah terisi dengan benar, Apabila menggunakan metode cashless 
lakukan pembayaran dalam 1x25 menit.
                    </label>
                  </div>
                </div>
                <!-- <a type="submit"name="submit"value="submit" style="background-color: #b856df; width:110px; border-color: #b856df;" class="btn btn-primary">Pesan</a> -->
                <button  class="btn btn-outline-success" style="color:white;width: 90px; background-color:#b856df ; border-color: #b856df;">Pesan</button>
               
              </form>
              <!-- <?php
                    // $berat = $_GET['berat'];
                    // $paket = $_GET['paket'];
                    // $regu
                    // if ($paket == "Regular"){
                    //   echo "reg";
                    // }elseif($paket == "Kilat"){
                    //   echo "k";
                    // }elseif($paket == "Express"){
                    //   echo "e";
                    // }
                
              ?> -->
              <div class="d-flex justify-content-between pt-2">
                <p class="fw-bold mb-0">Rincian</p>
                
              </div>
  
              <div class="d-flex justify-content-between pt-2">
                <p class="text-muted mb-0">Nomor Nota : <label  style="font-size: 16px;"  id="randomfield">-</p>
                </div>
                <script>
                    function randomString() {
                      //define a variable consisting alphabets in small and capital letter
                      var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZ0123456789";

                      //specify the length for the new string
                      var lenString = 7;
                      var randomstring = "";

                      //loop to select a new character in each iteration
                      for (var i = 0; i < lenString; i++) {
                        var rnum = Math.floor(Math.random() * characters.length);
                        randomstring += characters.substring(rnum, rnum + 1);
                      }

                      //display the generated string
                      document.getElementById("randomfield").innerHTML = randomstring;
                      document.getElementById("randomfieldsc").value = randomstring;
                    }
              </script>
  
  
              <div class="d-flex justify-content-between">
                <p class="text-muted mb-0" >Tanggal Nota : <label  style="font-size: 16px;" name="tgl" id="date">-</p>
                <script>
                
                n =  new Date();
                y = n.getFullYear();
                m = n.getMonth() + 1;
                d = n.getDate();
                document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
                </script>
              </div>
            </div>
            <div class="card-footer border-0 px-4 py-5"
              style="background-color: #b856df; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
              <h5  class="d-flex align-items-center justify-content-end text-white mb-0">TOTAL
                BIAYA : Rp <span style="color:white ;" class="h2 mb-0 ms-2"> <label  style="font-size:24px;" id="result">0</label></span></h5>
                <input type="hidden" class="form-control" id="datesc" placeholder="0" value="<?php echo date('Y-m-d'); ?>"  name="tanggal"/>
                <input type="hidden" class="form-control" id="resultsc" placeholder="0"  name="price"/>
                <input type="hidden" class="form-control" id="randomfieldsc" placeholder="0"  name="nota"/>

                <input type="hidden" class="form-control" value="<?php echo $user['user_id']?>" name="id"/>
                
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </section>

<!-- order -->
    
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
                <?php

if(! $_SESSION['login']){ //IKIII
  echo "<a class='btn btn-link' href='index.php'>Home</a>
  <a class='btn btn-link' href='login.php'>Order</a>
  <a class='btn btn-link' href='login.php'>Activity</a>
  <a class='btn btn-link' href='login.php'>Account</a>";
}
else{
  echo "<a class='btn btn-link' href='index.php'>Home</a>
  <a class='btn btn-link' href='order.php'>Order</a>
  <a class='btn btn-link' href='activity.php'>Activity</a>
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