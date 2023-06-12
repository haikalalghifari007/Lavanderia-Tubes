<?php
  include 'koneksi.php';
  session_start();
  if (! isset($_SESSION['login'])){
    $_SESSION['login'] = false;
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
                $query = " select * from data_user where id= '$id' ";
                $result = mysqli_query($koneksi, $query);
                $user = mysqli_fetch_assoc($result);
                echo "<a href='index.php' class='nav-item nav-link active'>Home</a>
                <a href='order.php' class='nav-item nav-link'>Order</a>
                <a href='activity.php' class='nav-item nav-link'>Activity</a>
                <div class='nav-item dropdown'>
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
         
    </nav>
    <!-- Navbar End -->

    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Bantuan & Panduan</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                  
                    <div class="accordion" id="accordionExample">
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Syarat & Ketentuan
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse " aria-labelledby="headingFive"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                            1.  KETENTUAN UMUM <br> <br>

                                i.Ketentuan Penggunaan ini menjabarkan ketentuan-ketentuan yang mengatur penggunaan layanan PUNYA yang disediakan untuk Anda,
                                berupa penjualan dan penyediaan suatu fitur, teknologi, produk, perangkat lunak, dan jasa, atau fungsi lain
                                yang diberikan oleh produk atau jasa tersebut oleh Punya, termasuk namun tidak terbatas pada: <br> <br>
                                
                                ii.Punya dapat mengubah Ketentuan Penggunaan dari waktu ke waktu, dan Punya akan memberitahukan mengenai perubahan tersebut kepada
                                Pelanggan melalui email atau dengan memberikan pesan tertulis pada saat Pelanggan menggunakan Layanan. Apabila Pelanggan terus menggunakan
                                Layanan setelah menerima pesan tersebut, maka Pelanggan dianggap setuju untuk tunduk pada perubahan Ketentuan Penggunaan tersebut. <br> <br>

                                iii.Dari waktu ke waktu, Punya dapat menambah, mengubah atau menghilangkan seluruh atau sebagian fitur atau fungsi dalam Layanan.
                                Pelanggan dapat melakukan instalasi atas versi terbaru untuk menerima perubahan-perubahan tersebut. Punya juga dapat memutuskan 
                                untuk berhenti menyediakan seluruh atau sebagian dari Layanan pada setiap waktu, dan tidak ada satu ketentuan pun di dalam Ketentuan 
                                Penggunaan ini yang dapat dijadikan sebagai jaminan bahwa Aplikasi atau bagian dari Layanan manapun akan selalu tersedia, 
                                baik pada bentuk saat ini atau bentuk lainnya, dan/atau bahwa Punya akan terus mendukung, menjaga, atau meneruskan untuk menawarkan 
                                Layanan dan/atau Aplikasi atau versi mana pun daripadanya. <br><br>

                                iv.Punya dapat menawarkan fitur khusus yang memiliki syarat-syarat dan ketentuan-ketentuan tersendiri di samping Ketentuan Penggunaan 
                                ini (“Ketentuan Penggunaan Terpisah”). Dalam hal tersebut, ada Ketentuan Penggunaan Terpisah yang akan berlaku apabila terdapat 
                                ketidaksesuaian dengan Ketentuan Penggunaan ini.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Kebijakan Privasi
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                i. Anda dengan ini memberikan izin yang bebas royalti, tidak dapat dicabut kembali, tanpa batas waktu, dapat disublisensikan dan berlaku 
                                di seluruh dunia untuk menggunakan (termasuk untuk tujuan komersial) informasi dan/atau data yang dikumpulkan oleh Punya melalui penggunaan 
                                Anda atas Layanan, dengan ketentuan bahwa Punya akan menggabungkan (dengan data dari pengguna lainnya) atau menjadikan informasi atau data 
                                tersebut menjadi anonim sebelum menggunakannya. Selain dari hak ini, Punya tidak menuntut hak kekayaan intelektual lainnya sehubungan dengan 
                                informasi atau konten yang diberikan oleh Anda pada Layanan. <br><br>

                                ii. Penggunaan dan/atau akses ke Layanan juga akan tunduk pada segala aturan yang dituangkan dalam kebijakan privasi Punya yang dimuat pada 
                                Aplikasi dan/atau Situs (“Kebijakan Privasi”). Dengan menyetujui Ketentuan Penggunaan ini, kami mengasumsikan bahwa Anda telah membaca dan 
                                menyetujui isi dari Kebijakan Privasi. Kebijakan Privasi dan Ketentuan Penggunaan ini merupakan suatu kesatuan dokumen yang perlu disetujui 
                                oleh Pelanggan sebelum dapat mendaftarkan diri dan menggunakan Layanan.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Hubungi Kami
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Untuk informasi lebih lanjut hubungi kami: <br>
                                     WA:08123456789 <br>
                                     Email:cs@melaundry.id
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Disclaimer
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                All the information on this website - melaundry.site - is published in good faith and for general information purpose only. Melaundry does not make any warranties about the completeness, reliability and accuracy of this information. Any action you take upon the information you find on this website (Melaundry), is strictly at your own risk. Melaundry will not be liable for any losses and/or damages in connection with the use of our website. Our Disclaimer was generated with the help of the .</p>
                                From our website, you can visit other websites by following hyperlinks to such external sites. While we strive to provide only quality links to useful and ethical websites, we have no control over the content and nature of these sites. These links to other websites do not imply a recommendation for all the content found on these sites. Site owners and content may change without notice and may occur before we have the opportunity to remove a link which may have gone 'bad'.</p>
                                Please be also aware that when you leave our website, other sites may have different privacy policies and terms which are beyond our control. Please be sure to check the Privacy Policies of these sites as well as their "Terms of Service" before engaging in any business or uploading any information.
                                Consent
                                By using our website, you hereby consent to our disclaimer and agree to its terms.
                                Update
                                Should we update, amend or make any changes to this document, those changes will be prominently posted here.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- history end -->
    
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
                    <h5 class="mb-4">MeLaundry</h5><?php

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