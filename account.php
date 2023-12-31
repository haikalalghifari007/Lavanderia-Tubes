<?php
  include 'koneksi.php';
  session_start();
  if (!isset($_SESSION['login'])){
    $_SESSION['login'] = false;
  }else{
    $id = $_SESSION['id'];
    $_SESSION["login"] = true;
    $query = "SELECT * FROM users WHERE user_id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    $customer_query = "SELECT * FROM customers WHERE user_id = $id";
    $customer_result = mysqli_query($koneksi, $customer_query);
    $customer = mysqli_fetch_assoc($customer_result);

    $customer_id = $customer["customer_id"];
    $subscription_type = $customer["subscription_type"];

    $jumlah = mysqli_query($koneksi, "SELECT COUNT(lo.total_cost) AS jumlah_selesai
    FROM laundry_orders lo
    JOIN customers c ON lo.customer_id = c.customer_id
    WHERE c.customer_id = $customer_id
      AND lo.order_status = 'done'"); 
    $row = mysqli_fetch_assoc($jumlah); 
    $sum = $row['jumlah_selesai'];

    $jumlah_minggu = mysqli_query($koneksi, "SELECT COUNT(lo.total_cost) AS jumlah_minggu
    FROM laundry_orders lo
    JOIN customers c ON lo.customer_id = c.customer_id
    WHERE c.customer_id = $customer_id
      AND lo.order_status = 'done'
      AND YEARWEEK(lo.order_date) = YEARWEEK(CURRENT_DATE)
      ");

      $row_minggu = mysqli_fetch_assoc($jumlah_minggu);
      $sum_minggu = $row_minggu['jumlah_minggu'];

      if ($sum_minggu == 0) {
          $sum_minggu = '0';
      }


    $jumlah_bulan = mysqli_query($koneksi, "SELECT COUNT(lo.total_cost) AS jumlah_bulan
    FROM laundry_orders lo
    JOIN customers c ON lo.customer_id = c.customer_id
    WHERE c.customer_id = 6
      AND lo.order_status = 'done'
      AND YEAR(lo.order_date) = YEAR(CURRENT_DATE)
      AND MONTH(lo.order_date) = MONTH(CURRENT_DATE);
    
      ");

      $row_bulan = mysqli_fetch_assoc($jumlah_bulan);
      $sum_bulan = $row_bulan['jumlah_bulan'];

      if ($sum_bulan == 0) {
          $sum_bulan = '0';
      }



    $name = $user["name"];
    $image = $user["image"];

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
    
    <link rel="stylesheet" href="nedroid2.css">
    <link rel="stylesheet" href="profile.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- IKI ANYAR CSS -->
 
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">

  
 
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
      
    <link rel="stylesheet" href="profile_image_style.css">  <!-- IKI ANYAR CSS -->
      
    
  </head>
  


  <body>
    <!-- Spinner Start -->
    
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
          <a href="activity.php" class="nav-item nav-link ">History</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link active dropdown-toggle" data-bs-toggle="dropdown" >Features</a>
            <div class="dropdown-menu shadow-sm m-0">
                <a href="account.php" class="dropdown-item">Account</a>
                <a href="menu.php" class="dropdown-item">Membership</a>
                <a href="moreinfo.php" class="dropdown-item">More info</a>
            </div>
        </div>
                <a href="controller_logout.php" class="btn btn-outline-success" style="height:40px; margin-top:20px;color: rgb(0, 213, 255);width: 90px; border-color: rgb(0, 213, 255);" type="button" >Logout</a >  </nav>
    </nav>
    <!-- Navbar End -->
<!-- info -->

<body class="profile-page">
  <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
  <div class="main main-raised">
  <div class="profile-content">
          <div class="container">
              <div class="row">
                <div class="col-md-6 ml-auto mr-auto">
                   <div class="profile">
                        <div class="avatar">
                        <form class="form" id = "form" action="" enctype="multipart/form-data" method="post"> <!-- Mulai Kene -->
      <div style="margin-top:100px;" class="upload">
        <img src="img/<?php echo $image; ?>" style="margin-top:-100px;"  title="<?php echo $image; ?>"> 

        <div  class="round mr-5">
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>">
          
          <i class = "fa fa-camera" style = "color: #fff; "></i>
        </div>
      </div>
    </form>
    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>
    <?php  
    if(isset($_FILES["image"]["name"])){
      $id = $_POST["id"];
      $name = $_POST["name"];

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        echo
        "
        <script>
          alert('Invalid Image Extension');
          document.location.href = 'account.php';
        </script>
        ";
      }
      elseif ($imageSize > 1200000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = 'account.php';
        </script>
        ";
      }
      else{
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $query = "UPDATE users SET image = '$newImageName' WHERE user_id = $id";
        mysqli_query($koneksi, $query);
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        echo
        "
        <script>
        document.location.href = 'account.php';
        </script>
        ";
      }
    }
    ?> <!-- TEKAN KENEE -->
                        </div>
                        <div class="name mt-1">
                            <h3 class=""><?php echo $user['name']; ?></h3>
                            <h5><?php if($subscription_type == null){
                                  echo "free pass";
                            }else{
                                  echo $subscription_type;
                            }
                         ?></h5>
              
                        </div>
                    </div>
                </div>
              </div>
              <div class="description text-center">
                  <p><?php echo $user['address']; ?> </p>
              </div>
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
                      <div class="profile-tabs">
                        <ul class="nav nav-pills nav-pills-icons justify-content-center" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" href="#studio" role="tab" data-toggle="tab">
                                <i class="material-icons">history </i>
                                Detail Account
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#works" role="tab" data-toggle="tab">
                                <i class="material-icons">person</i>
                                  Tentang
                              </a>
                          </li>
                          
                        </ul>
                      </div>
          </div>
          </div>
      
        <div class="tab-content tab-space">
          <div class="tab-pane active text-center gallery" id="studio">
        <div class="row">
          
    <div class="container-xxl bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-6">Detail Account</h1>
                <p class="text-primary fs-5 mb-5">Kamu telah melakukan</p>
            </div>
            <div class="row g-3">
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0"><?php 
                        if($subscription_type == 'Gold Pass'){
                          echo "1 Tahun";
                        }elseif ($subscription_type == 'Reguler Pass'){
                          echo "7 Hari";
                        }elseif ($subscription_type == 'Royale Pass'){
                          echo "1 Bulan";
                        }else{
                          echo $subscription_type;
                        }?></h1>
                        <span class="text-primary fs-5">Akun Member</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0"><?php echo $sum_minggu ?></h1>
                        <span class="text-primary fs-5">Minggu ini</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0"><?php echo $sum_bulan ?></h1>
                        <span class="text-primary fs-5">Bulan ini</span>
                    </div>
                </div>
                <div class="col-6 col-md-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="bg-white text-center p-3">
                        <h1 class="mb-0"><?php echo $sum ?></h1>
                        <span class="text-primary fs-5">Selesai</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
          <div class="tab-pane text-center gallery" id="works">
            
            <!-- account -->
    <section class=" h-100 bg-light">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center h-100/ ">
          <div class="col">
              <div class="row g-0">
                
                <div class="col-xl-6">
                  <div class="card-body p-md-5 text-black">
                    <h3 class="mb-5 text-uppercase">Edit Profile</h3>
                    <form action="editprofile.php" method="post">
                    <div class="row">
                      <div class="col-md-6 mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="form3Example1m">Name</label>
                          <input type="text" id="form3Example1m" class="form-control form-control-lg" value="<?php echo $user['name'] ?>" name="firstName"/>

                        </div>
                      </div>
                    </div>
    
                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example8">Email</label>
                      <input type="text" id="form3Example8" class="form-control form-control-lg" value="<?php echo $user['email'] ?>" name="email"/>

                    </div>
    
                    
    
                    
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example9">Phone number</label>
                      <input type="text" id="form3Example9" class="form-control form-control-lg" value="<?php echo $user['phn_num'] ?>" name="phone" />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example90">Address</label>
                      <input type="textarea" id="form3Example90" class="form-control form-control-lg" value="<?php echo $user['address'] ?>" name="address"/>
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example99">Password</label>
                      <input type="password" id="form3Example99" class="form-control form-control-lg" name="password" required />
                    </div>
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example97">Repeat Password</label>
                      <input type="password" id="form3Example97" class="form-control form-control-lg" name="repassword" required />
                    </div>
                    <div class="d-flex justify-content-end pt-3">
                      <button  class="btn btn-outline-success" style="color:white;width: 90px; background-color:rgb(0, 213, 255) ; border-color: rgb(0, 213, 255);">Submit</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>  
          <div class="row">
           <div>
      <!-- account -->
           </div>
          </div>
      </div>
          <div class="tab-pane text-center gallery" id="favorite">
          <div class="row">
            <div class="col-md-3 ml-auto">
              <img src="https://images.unsplash.com/photo-1504346466600-714572c4b726?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6754ded479383b7e3144de310fa88277&auto=format&fit=crop&w=750&q=80" class="rounded">
                    <img src="https://images.unsplash.com/photo-1494028698538-2cd52a400b17?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83bf0e71786922a80c420c17b664a1f5&auto=format&fit=crop&w=334&q=80" class="rounded">
            </div>
            <div class="col-md-3 mr-auto">
              <img src="https://images.unsplash.com/photo-1505784045224-1247b2b29cf3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ec2bdc92a9687b6af5089b335691830e&auto=format&fit=crop&w=750&q=80" class="rounded">  					
              <img src="https://images.unsplash.com/photo-1524498250077-390f9e378fc0?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=83079913579babb9d2c94a5941b2e69d&auto=format&fit=crop&w=751&q=80" class="rounded">
            <img src="https://images.unsplash.com/photo-1506667527953-22eca67dd919?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=6326214b7ce18d74dde5e88db4a12dd5&auto=format&fit=crop&w=750&q=80" class="rounded">
              </div>
          </div>
        </div>
        </div>

      
          </div>
      </div>
</div>

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
                           class="btn btn-outline-success py-2 px-3 position-absolute top-0 end-0 mt-2 me-2" style="color:#00f7ff;border-color:#00f7ff;">SignUp</button>
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

                      if(!$_SESSION['login']){ //IKIII
                        echo "<a class='btn btn-link' href='index.php'>Home</a>
                        <a class='btn btn-link' href='login.php'>Order</a>
                        <a class='btn btn-link' href='login.php'>History</a>
                        <a class='btn btn-link' href='login.php'>Account</a>";
                      }
                      else{
                        echo "<a class='btn btn-link' href='index.php'>Homes</a>
                        <a class='btn btn-link' href='order.php'>Order</a>
                        <a class='btn btn-link' href='activity.php'>History</a>
                        <a class='btn btn-link' href='account.php'>Account</a>";
                      } 
                    ?>   <!--TEKAN KENEEE-->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="mb-4">Bantuan & Panduan</h5>                    <a class="btn btn-link" href="bantuan.php">Syarat & Ketentuan</a>
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
                        <!--/* This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. */-->
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
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>

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