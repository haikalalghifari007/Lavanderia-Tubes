<?php
include 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])){
    $_SESSION['login'] = false;
  }else{
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
    <!-- Favicon -->   <link rel="stylesheet" href="voucher.css">
    <link rel="stylesheet" href="randomcode.css">
    <link href="Logo.png" rel="icon" />
 <!-- Bootstrap CSS -->
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
 <link rel='stylesheet' href='gaegambar.css'>
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
        <?php
              if(! $_SESSION['login']){
                echo "<a href='index.php' class='nav-item nav-link active'>Home</a>
                <a href='order.php' class='nav-item nav-link disabled'>Order</a>
                <a href='activity.php' class='nav-item nav-link disabled'>Activity</a>
                <div class='nav-item dropdown'>
                  <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Features</a>
                  <div class='dropdown-menu shadow-sm m-0'>
                      <a href='menu.php' class='dropdown-item'>Menu</a>
                      <a href='moreinfo.php' class='dropdown-item'>More info</a>";
              }
              else{
                $id = $_SESSION['id'];
                $query = " select * from users where user_id= '$id' ";
                $result = mysqli_query($koneksi, $query);
                $user = mysqli_fetch_assoc($result);
                echo "<a href='index.php' class='nav-item nav-link active'>Home</a>
                <a href='order.php' class='nav-item nav-link'>Order</a>
                <a href='activity.php' class='nav-item nav-link'>Activity</a>";
                if($user['role'] == "admin"){
                  echo "<div class='nav-item dropdown'>
                  <a href='./adminn/dashboard.php' class='nav-item nav-link'>Dashboard</a>
                  </div>";
                }
                echo "<div class='nav-item dropdown'>
                  <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Features</a>
                  <div class='dropdown-menu shadow-sm m-0'>
                      <a href='account.php' class='dropdown-item'>Account</a>
                      <a href='menu.php' class='dropdown-item'>Menu</a>
                      <a href='moreinfo.php' class='dropdown-item'>More info</a>";
                      
              }
        ?>
        
            </div>
        </div>
           
            <?php

              if(! $_SESSION['login']){
                echo "<button data-toggle='modal' data-target='#loginModal' class='btn btn-outline-success' style='color: rgb(0, 213, 255);height:40px; margin-top:20px; width: 90px; border-color: rgb(0, 213, 255);' type='button' >Login</button>";
              }
              else{
                echo "<a href='controller_logout.php' class='btn btn-outline-success' style='color: rgb(0, 213, 255);width: 90px; height:40px; margin-top:20px; border-color: rgb(0, 213, 255);' >Logout</a>";
                
              }
            ?>
                  <!-- <button data-toggle="modal" data-target="#loginModal" class="btn btn-outline-success" style="color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);" type="button" >Login</button>  -->
              
              
    </nav>
    <!-- Navbar End -->

    <!-- Header Start -->
    <?php 
      
    ?>
    <div class="container-fluid hero-header bg-light py-5 mb-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6">
          <?php
            if(! $_SESSION['login']){
              echo "<h1 class='display-4 mb-3 animated slideInDown'>
              DAFTAR<br />
              SEKARANG
            </h1>
            
            <p class='animated slideInDown'>
              Daftar dan dapatkan promo menarik dari Lavanderia & nikmati fitur
              menarik dari Lavanderia Sekarang Juga!!! Cucianmu menjadi Tanggung
              Jawab Kami.
            </p>
            <a style='color:white ;' data-toggle='modal' data-target='#loginModal' class='btn btn-primary py-3 px-4 animated slideInDown' data-toggle='modal' data-target='signupPage'
              >DAFTAR SEKARANG</a>";
            }
            else{
              echo "<h1 class='display-4 mb-3 animated slideInDown'>
              Welcome<br />"; ?>

              <?php echo $user['name']; ?>
              <?php
              echo"
            </h1>
            
            <p class='animated slideInDown'>
              Jangan buang waktumu untuk mencuci, karena mencuci adalah tugas kami.Mari berbelanja sekarang juga, dan dapatkan promo menarik lainnya.
            </p>
            <a style='color:white ;'  class='btn btn-primary py-3 px-4 animated slideInDown' href = 'order.php'
              >ORDER SEKARANG</a>";
            }
          ?>
          </div>
          
          <div class="col-lg-6 animated fadeIn">
            <img
              class="img-fluid animated pulse infinite"
              style="width: autopx"
              src="mesincuci.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
    <!-- voucer -->
    <div class="containerr">
        <div class="container1">
            <div class="front">
                <img src="voucher winter.png">
            </div>
            <div class="back">
            <img src="back1.png">
            </div>
        </div>

        <div class="container1">
            <div class="front">
            <img src="newyear front.png">
            </div>
            <div class="back">
            <img src="back2.png">
              </div>
        </div>

        <div class="container1">
            <div class="front">
            <img src="motherday front.png">
            </div>
            <div class="back">
            <img src="back3.png" >
          </div>
        </div>

        
    </div>
    <!-- voucher -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
         
          </div>
          <div class="col-lg-6wowfadeInUp" data-wow-delay="0.5s">
            <img class="img-fluid animated pulse infinite ms-auto " src="labellangganan.png" id="fotolangganan"  alt="" />
            <?php

              if(! $_SESSION['login']){
                echo "<a class='btn btn-primary py-3 px-4 animated pulse infinite ms-auto' id='tombollangganan' href='login.php'>Berlangganan</a>";
              }
              else{
                echo "<a class='btn btn-primary py-3 px-4 animated pulse infinite ms-auto' id='tombollangganan' href='paymentroyale.php'>Berlangganan</a>";
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    <div class="container-xxl bg-light py-5 my-5">
      <div class="container py-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-6">Total Gerai</h1><br>   
        </div>
        <div class="row g-5">
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <img class="img-fluid mb-4" src="shop.png" style="width:90px ;" alt="" />
            <h1 class="display-4" data-toggle="counter-up">3280</h1>
            <p class="fs-5 text-primary mb-0">Jabodetabek</p>
          </div>
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/6190/6190586.png" style="width: 90px ;" alt="" />
            <h1 class="display-4" data-toggle="counter-up">5858</h1>
            <p class="fs-5 text-primary mb-0">Luar Jabodetabek</p>
          </div>
          <div
            class="col-lg-4 col-md-6 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/2942/2942077.png" style="width: 90px ;" alt="" />
            <h1 class="display-4" data-toggle="counter-up">9738</h1>
            <p class="fs-5 text-primary mb-0">Seluruh Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Mengapa Lavanderia?</h1>
                <p class="text-primary fs-5 mb-5">Tempat cuci anti ribet</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="ribet.png" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Ga Ribet</h5>
                            <span>Kamu hanya perlu pesan lewat aplikasi,cucianmu kami jemput</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="https://cdn-icons-png.flaticon.com/512/1459/1459188.png" style="width: 70px; ;" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Terjamin</h5>
                            <span>Cucianmu dijamin aman dan bersih karena semua dikerjakan oleh profesional</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="https://cdn-icons-png.flaticon.com/512/8886/8886225.png" style="width: 70px ;" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Terjangkau</h5>
                            <span>Kami menawarkan harga yang dapat dijangkau segala kalangan</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="https://cdn-icons-png.flaticon.com/512/3322/3322847.png" style="width: 70px; ;" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Kualitas alat</h5>
                            <span>kami menggunakan alat alat yang terbaik</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="https://cdn-icons-png.flaticon.com/512/7383/7383878.png" style="width: 70px ;" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Terjamin</h5>
                            <span>Setiap cucian yang masuk di kami terjamin aman </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="d-flex align-items-start">
                        <img class="img-fluid flex-shrink-0" src="https://cdn-icons-png.flaticon.com/512/3957/3957890.png" style="width: 70px ;" alt="">
                        <div class="ps-4">
                            <h5 class="mb-3">Customer service </h5>
                            <span>Kami menyediakan layanan customer service 24/7 untuk anda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Service Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Service</h1>
                <p class="text-primary fs-5 mb-5">Apa saja yang kami cuci</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/1415/1415695.png" alt="" style="width: 100px;">
                        <h5 class="mb-3">Pakaian</h5>
                        <p>
                        </p>
                        <a href="moreinfo.php#pakaian">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/4100/4100930.png" alt="" style="width: 100px;">
                        <h5 class="mb-3">Boneka</h5>
                        <p></p>
                        <a href="moreinfo.php#boneka">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/1108/1108832.png" alt="" style="width: 100px;">
                        <h5 class="mb-3">Sepatu</h5>
                        <p></p>
                        <a href="moreinfo.php#sepatu">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/7133/7133102.png" alt="" style="width: 100px;">
                        <h5 class="mb-3">Topi</h5>
                        <p></p>
                        <a href="moreinfo.php#topi">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/4101/4101055.png" alt="" style="width: 100px;">
                        <h5 class="mb-3">Tas</h5>
                        <p></p>
                        <a href="moreinfo.php#tas">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-5">
                        <img class="img-fluid mb-4" src="https://cdn-icons-png.flaticon.com/512/1820/1820620.png" alt="" style="width: 100px;">
                        <h5 class="mb-3">Bedcover</h5>
                        <p></p>
                        <a href="moreinfo.php#bedcover">Read More <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Roadmap Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Testimoni</h1>
                <p class="text-primary fs-5 mb-5">Customer Lavanderia</p>
            </div>
            <div class="owl-carousel roadmap-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Hasan Rama Sagita</h5>
                    <span>“Pengerjaan sangat cepat 
                        aromanya awet sampai 
                        berhari-hari”</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Haikal Ghifari</h5>
                    <span>"Semenjak ada Lavanderia aku bisa ketemu Fahni"</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Fathi Melondre</h5>
                    <span>"Akhirnya ada yang nyuciin"</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Syifa Nursabilla</h5>
                    <span>"Wanginya enakk bangett..."</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Sofia Elisya</h5>
                    <span>"Membantu banget buat anak kost yang mager cuci pakaian!!"</span>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-point"><span></span></div>
                    <h5>Ridwan oktavia</h5>
                    <span>"langganan royale pass bisa cuci sepuasnya selama sebulan"</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Roadmap End -->


    <!-- Token Sale Start -->
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Total Cucian</h1>
                <p class="text-primary fs-5 mb-5">Hari Ini</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">1209</h1>
                        <span class="text-primary fs-5">Dalam Antrian</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">5214</h1>
                        <span class="text-primary fs-5">Dalam Pengerjaan</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">8003</h1>
                        <span class="text-primary fs-5">Sedang Diantar</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0">11021</h1>
                        <span class="text-primary fs-5">Selesai</span>
                    </div>
                </div>
                <div class="col-12 text-center py-4">
                    <a class="btn btn-primary py-3 px-4" href="">Lihat Detail</a>
                </div>
                <div class="col-12 text-center">
                    <img class="img-fluid m-1" src="payment-1.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="payment-2.png" alt="" style="width: 50px;">
                    <img class="img-fluid m-1" src="Gopay.png" alt="" style="width: 70px;">
                    <img class="img-fluid m-1" src="Dana.png" alt="" style="width: 70px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Token Sale Start -->


    <!-- FAQs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">FAQs</h1>
                <p class="text-primary fs-5 mb-5">Pertanyaan yang sering ditanyakan</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Kenapa Lavanderia?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    karena setiap layanan di Lavanderia dirancang untuk memudahkan anda dalam urusan kebersihan pakaian dan juga pengguna 
                                    tidak perlu kesusahan lagi.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Apakah ada garansi saat menggunakan Lavanderia?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Lavanderia menjamin setiap pakaian yang masuk akan tetap aman sampai ke tangan konsumen
                                    dan jika terjadi kesalahan dari kami maka Lavanderia akan bertanggung jawab kepada konsumen.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Bagaimana dengan SDM dan alat yang digunakan?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Para staff Lavanderia adalah staff yang sudah ahli dibidang ini dan juga untuk alat-alat yang digunakan
                                    adalah alat-alat yang terbaik.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    apakah ada layanan antar jemput pakaian?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    kami menyediakan layanan antar jemput pakaian yang tersedia saat konsumen melakukan pemesanan
                                    dan tentunya layanan ini gratis.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    apakah kita bisa mengetahuin proses cucian kita?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    tentunya bisa karena kami menyediakan fitur "Activity" di fitur ini akan menampilkan proses cucian anda.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    apakah ada keuntungan khusus untuk membership?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    pastinya ada kami menyediakan layanan khusus untuk membership seperti cuciannya akan kami prioritaskan,bebas memilih pewangi lebih banyak
                                     dan cuci sepuasnya selama 1 bulan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQs Start -->


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
                        &copy; <a href="#">Lavanderia</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a href="http://127.0.0.1:5500/index.php">Nedroid</a> Distributed By <a
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
                    <form action="validatelogin.php" method="post">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email1"placeholder="Your email address..." name="loginemail" required>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password1" placeholder="Your password..." name="loginpassword" required>
                      </div>
                      <button style="color: white;" type="submit" class="btn btn-info btn-block btn-round" name="login">Login</button>
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
    <script src="randomcode1.js"></script>
    <script src="randomcode2.js"></script>
    <script src="randomcode3.js"></script>
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