<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lavanderia By Restu Ibu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
<link rel="stylesheet" href="nedroid2.css">
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
      rel="stylesiheet"
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
          <a href="order.php" class="nav-item nav-link disabled" >Order</a>
          <a href="activity.php" class="nav-item nav-link disabled">Activity</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Features</a>
            <div class="dropdown-menu shadow-sm m-0">
                <a href="menu.php" class="dropdown-item">Menu</a>
                <a href="moreinfo.php" class="dropdown-item">More info</a>
            </div>
        </div>
              <button data-toggle="modal" data-target="#loginModal"  class="btn btn-outline-success" style="height:40px; margin-top:20px;color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);" type="button" >Login</button >  </nav>
    </nav>
    <!-- Navbar End -->

    <!-- account -->
    <section class="h-100 bg-light">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100/ ">
          <div class="col">
            <div class="card card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-6 d-none d-xl-block">
                  <img src="loginnnn.jpg"
                    alt="Sample photo" class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                </div>
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Sign up</h3>

                    <form action="register.php" method="post">
    
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1m">First name</label>
                          <input type="text" id="form3Example1m" class="form-control form-control-lg" name="firstName" required />

                        </div>
                      </div>
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1n">Last name</label>
                          <input type="text" id="form3Example1n" class="form-control form-control-lg" name="lastName" required/>

                        </div>
                      </div>
                    </div>
    
                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example8">Email</label>
                      <input type="text" id="form3Example8" class="form-control form-control-lg" name="email" required/>

                    </div>
    
                    <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
    
                      <h6 class="mb-0 me-4">Gender: </h6>

                      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="femaleGender" required
                            value="Female" />
                          <label class="form-check-label" for="femaleGender">Female</label>
                        </div>
      
                        <div class="form-check form-check-inline mb-0 me-4">
                          <input class="form-check-input" type="radio" name="gender" id="maleGender"
                            value="Male" />
                          <label class="form-check-label" for="maleGender">Male</label>
                        </div>
                      
                      
    
                    </div>
    
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example8" >Province</label><br>
                        <select class="btn btn-secondary dropdown-toggle " style="background-color:white ; width: 200px;" name="province">
                        <option value="Nanggroe Aceh Darussalam">Nanggroe Aceh Darussalam</option>
                          <option value="Sumatera Utara">Sumatera Utara</option>
                          <option value="Sumatera Selatan">Sumatera Selatan</option>
                          <option value="Sumatera Barat">Sumatera Barat</option>
                          <option value="Bengkulu">Bengkulu</option>
                          <option value="Riau">Riau</option>
                          <option value="Kepulauan Riau">Kepulauan Riau</option>
                          <option value="Jambi">Jambi</option>
                          <option value="Lampung">Lampung</option>
                          <option value="JBangka Belitung">Bangka Belitung</option>
                          <option value="Kalimantan Barat">Kalimantan Barat</option>
                          <option value="Kalimantan Timur">Kalimantan Timur </option>
                          <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                          <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                          <option value="Kalimantan Utara">Kalimantan Utara</option>
                          <option value="Banten">Banten</option>
                          <option value="DKI Jakarta">DKI Jakarta</option>
                          <option value="Jawa Barat">Jawa Barat</option>
                          <option value="Jawa Tengah">Jawa Tengah</option>
                          <option value="Daerah Istimewa Yogyakarta">Daerah Istimewa Yogyakarta</option>
                          <option value="Jawa Timur">Jawa Timur</option>
                          <option value="Bali">Bali </option>
                          <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                          <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                          <option value="Gorontalo">Gorontalo</option>
                          <option value="Sulawesi Barat">Sulawesi Barat</option>
                          <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                          <option value="Sulawesi Utara">Sulawesi Utara</option>
                          <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                          <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                          <option value="Maluku Utara">Maluku Utara</option>
                          <option value="Maluku">Maluku</option>
                          <option value="Papua Barat">Papua Barat</option>
                          <option value="Papua">Papua</option>
                          <option value="Papua Tengah">Papua Tengah</option>
                          <option value="Papua Pegunungan">Papua Pegunungan</option>
                          <option value="Papua Selatan">Papua Selatan</option>
                          <option value="Papua Barat Daya">Papua Barat Daya</option>
                        </select>
    
                      </div>
                      <div class="col-md-6 mb-4">
                        <label class="form-label" for="form3Example8" >City</label><br>
                        <select class="btn btn-secondary dropdown-toggle " style="background-color:white ; width: 200px;" name="city">
                        <option value="Magelang">Magelang</option>
                          <option value="Semarang">Semarang</option>
                          <option value="Pacitan">Pacitan</option>
                          <option value="Kudus">Kudus</option>
                          <option value="Banda Aceh">Banda Aceh</option>
                          <option value="Langsa">Langsa</option>
                          <option value="Lhokseumawe">Lhokseumawe</option>
                          <option value="Sabang">Sabang</option>
                          <option value="Subulussalam">Subulussalam</option>
                          <option value="Denpasar">Denpasar</option>
                          <option value="Pangkalpinang">Pangkalpinang</option>
                          <option value="Cilegon">Cilegon</option>
                          <option value="Serang">Serang</option>
                          <option value="Tangerang Selatan">Tangerang Selatan</option>
                          <option value="Tangerang">Tangerang</option>
                          <option value="Bengkulu">Bengkulu</option>
                          <option value="Yogyakarta">Yogyakarta</option>
                          <option value="Gorontalo">Gorontalo</option>
                          <option value="Kota Administrasi Jakarta Barat">Kota Administrasi Jakarta Barat</option>
                          <option value="Kota Administrasi Jakarta Pusat">Kota Administrasi Jakarta Pusat</option>
                          <option value="Kota Administrasi Jakarta Selatan">Kota Administrasi Jakarta Selatan</option>
                          <option value="Kota Administrasi Jakarta Timur">Kota Administrasi Jakarta Timur</option>
                          <option value="Kota Administrasi Jakarta Utara">Kota Administrasi Jakarta Utara</option>
                          <option value="Sungai Penuh">Sungai Penuh</option>
                          <option value="Jambi">Jambi</option>
                          <option value="Bandung">Bandung</option>
                          <option value="Bekasi">	Bekasi</option>
                          <option value="Bogor">	Bogor</option>
                          <option value="Cimahi">Cimahi</option>
                          <option value="Cirebon">Cirebon</option>
                          <option value="Depok">Depok</option>
                          <option value="Sukabumi">Sukabumi</option>
                          <option value="Tasikmalaya">Tasikmalaya</option>
                          <option value="Banjar">Banjar</option>
                          <option value="Pekalongan">Pekalongan</option>
                          <option value="Salatiga">Salatiga</option>
                          <option value="Semarang">Semarang</option>
                          <option value="Surakarta">Surakarta</option>
                          <option value="Tegal">Tegal</option>
                          <option value="Batu">Batu</option>
                          <option value="Blitar">Blitar</option>
                          <option value="Kediri">Kediri</option>
                          <option value="Madiun">Madiun</option>
                          <option value="Malang">Malang</option>
                          <option value="Mojokerto">Mojokerto</option>
                          <option value="Pasuruan">	Pasuruan</option>
                          <option value="Probolinggo">	Probolinggo</option>
                          <option value="Surabaya">Surabaya</option>
                          <option value="Pontianak">	Pontianak</option>
                          <option value="Singkawang">Singkawang</option>
                          <option value="Banjarbaru">Banjarbaru</option>
                          <option value="Banjarmasin">Banjarmasin</option>
                          <option value="Palangka">Palangka Raya</option>
                          <option value="Balikpapan">Balikpapan</option>
                          <option value="Bontang">Bontang</option>
                          <option value="Samarinda">Samarinda</option>
                          <option value="Nusantara">Nusantara</option>
                          <option value="Tarakan">Tarakan</option>
                          <option value="Batam">Batam</option>
                          <option value="Tanjungpinang">Tanjungpinang</option>
                          <option value="Bandar Lampung">Bandar Lampung</option>
                          <option value="Metro">Metro</option>
                          <option value="Ternate">Ternate</option>
                          <option value="Tidore Kepulauan">Tidore Kepulauan</option>
                          <option value="Ambon">Ambon</option>
                          <option value="Tual">	Tual</option>
                          <option value="Bima">	Bima</option>
                          <option value="Mataram">Mataram</option>
                          <option value="Kupang">Kupang</option>
                          <option value="Sorong">Sorong</option>
                          <option value="Jayapura">Jayapura</option>
                          <option value="Dumai">Dumai</option>
                          <option value="Pekanbaru">Pekanbaru</option>
                          <option value="Makassar">Makassar</option>
                          <option value="Palopo">Palopo</option>
                          <option value="Parepare">Parepare</option>
                          <option value="Palu">Palu</option>
                          <option value="Baubau">Baubau</option>
                          <option value="Kendari">Kendari</option>
                          <option value="Bitung">Bitung</option>
                          <option value="Kotamobagu">	Kotamobagu</option>
                          <option value="Manado">Manado</option>
                          <option value="Tomohon">	Tomohon</option>
                          <option value="Bukittinggi">Bukittinggi</option>
                          <option value="Padang">Padang</option>
                          <option value="Padang Panjang">	Padang Panjang</option>
                          <option value="Padang">Pariaman</option>
                          <option value="Payakumbuh">Payakumbuh</option>
                          <option value="Sawahlunto">Sawahlunto</option>
                          <option value="Solok">	Solok</option>
                          <option value="Lubuklinggau">Lubuklinggau</option>
                          <option value="Pagar Alam">Pagar Alam</option>
                          <option value="Palembang">Palembang</option>
                          <option value="Prabumulih">Prabumulih</option>
                          <option value="Binjai">	Binjai</option>
                          <option value="Gunungsitoli">Gunungsitoli</option>
                          <option value="Medan">Medan</option>
                          <option value="Padangsidimpuan">Padangsidimpuan</option>
                          <option value="Pematangsiantar">Pematangsiantar</option>
                          <option value="Sibolga">Sibolga</option>
                          <option value="Tebing Tinggi">Tebing Tinggi</option>
                          <option value="Tanjungbalai">	Tanjungbalai</option>
                        </select>
    
              
    
                      </div>
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example9">Phone number</label>
                      <input type="text" id="form3Example9" class="form-control form-control-lg" name="phone" required/>
 
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example90">Address</label>
                      <input type="textarea" id="form3Example90" class="form-control form-control-lg" name="address" required />
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example99">Password</label>
                      <input type="password" id="form3Example99" class="form-control form-control-lg" name="password" required/>
                    </div>
    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example97">Repeat Password</label>
                      <input type="password" id="form3Example97" class="form-control form-control-lg" name="repassword" required/>
                    </div>
    
                    <div class="d-flex justify-content-end pt-3">
                      <button  class="btn btn-outline-success" style="color:white;width: 90px; background-color:rgb(0, 213, 255) ; border-color: rgb(0, 213, 255);">Sign Up</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>  
      <!-- account -->
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
                <form action="validatelogin.php" method="post">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email1"placeholder="Your email address..." name="loginemail">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password1" placeholder="Your password..." name="loginpassword">
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