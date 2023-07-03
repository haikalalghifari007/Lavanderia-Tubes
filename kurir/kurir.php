<?php
include '../koneksi.php';
session_start();

  if (! isset($_SESSION['login'])){
    $_SESSION['login'] = false;
} else{
        $id = $_SESSION['id'];
        $query = "SELECT * FROM users WHERE user_id = '$id'";
        $result = mysqli_query($koneksi, $query);
        $user = mysqli_fetch_assoc($result);
        $name = $user["name"];
        
        $banyak_user = "SELECT COUNT(*) AS total_users FROM users";
        $result = mysqli_query($koneksi, $banyak_user);
        $banyak = mysqli_fetch_assoc($result);
        $total = $banyak["total_users"];
        
        $banyak_order = "SELECT COUNT(*) AS total_order FROM laundry_orders";
        $result = mysqli_query($koneksi, $banyak_order);
        $total_order = mysqli_fetch_assoc($result);
        $order = $total_order["total_order"];
  
}

?>

<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Admin Melaundry</title>
    <link
      rel="canonical"
      href="https://www.wrappixel.com/templates/ample-admin-lite/"
    />
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="plugins/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      href="plugins/bower_components/chartist/dist/chartist.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css"
    />
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar" data-navbarbg="skin5">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
          <div class="navbar-header" data-logobg="skin6">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="dashboard.php">
              <!-- Logo icon -->
              <b class="logo-icon">
                <!-- Dark Logo icon -->
                <img src="Logo.png" alt="homepage" />
              </b>
              <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <a
              class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
              href="javascript:void(0)"
              ><i class="ti-menu ti-close"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div
            class="navbar-collapse collapse"
            id="navbarSupportedContent"
            data-navbarbg="skin5"
          >
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav ms-auto d-flex align-items-center">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="in">
                <form role="search" class="app-search d-none d-md-block me-3">
                  <input
                    type="text"
                    placeholder="Search..."
                    class="form-control mt-0"
                  />
                  <a href="" class="active">
                    <i class="fa fa-search"></i>
                  </a>
                </form>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li>
              
                <a class="profile-pic" href="#">
                  <img
                    src="plugins/images/users/varun.jpg"
                    alt="user-img"
                    width="36"
                    class="img-circle"
                  /><span class="text-white font-medium"><?php echo $name; ?></span></a
                >
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <!-- User Profile-->
              <li class="sidebar-item pt-2">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="dashboard.php"
                  aria-expanded="false"
                >
                  <i class="far fa-clock" aria-hidden="true"></i>
                  <span class="hide-menu">Dashboard</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="profile.php"
                  aria-expanded="false"
                >
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hide-menu">Profile</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="basic-table.php"
                  aria-expanded="false"
                >
                  <i class="fa fa-table" aria-hidden="true"></i>
                  <span class="hide-menu">Data User</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a
                  class="sidebar-link waves-effect waves-dark sidebar-link"
                  href="../controller_logout.php"
                  aria-expanded="false"
                >
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                  <span class="hide-menu">Logout</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Three charts -->
          <!-- ============================================================== -->
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12">
              <div class="white-box analytics-info">
                <h3 class="box-title">Total Member
                </h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                  <li>
                    <div id="sparklinedash">
                      <canvas
                        width="67"
                        height="30"
                        style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                      ></canvas>
                    </div>
                  </li>
                  <li class="ms-auto">
                    <span class="counter text-success"><?php echo $total ?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="white-box analytics-info">
                <h3 class="box-title">Total Sales
                  
                </h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                  <li>
                    <div id="sparklinedash2">
                      <canvas
                        width="67"
                        height="30"
                        style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                      ></canvas>
                    </div>
                  </li>
                  <li class="ms-auto">
                    <span class="counter text-purple"><?php echo $order ?></span>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="white-box analytics-info">
                <h3 class="box-title">Total Orders</h3>
                <ul class="list-inline two-part d-flex align-items-center mb-0">
                  <li>
                    <div id="sparklinedash3">
                      <canvas
                        width="67"
                        height="30"
                        style="
                          display: inline-block;
                          width: 67px;
                          height: 30px;
                          vertical-align: top;
                        "
                      ></canvas>
                    </div>
                  </li>
                  <li class="ms-auto">
                    <span class="counter text-info"><?php echo $order ?></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          





          
          <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                <div class="d-md-flex mb-3">
                  <h3 class="box-title mb-0">Order List</h3>
                  <div class="col-md-3 col-sm-4 col-xs-6 ms-auto" >
                      <select name                                                          
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      th" class="form-select shadow-none border-top">
                      <option>Month</option>
                      <?php
                        for($month = 1; $month <= 12; $month++)
                        echo"<option value = '".$month."'>".$month."</option>";
                      ?>
                    </select>
                    

                    <select name = "year" class="form-select shadow-none  border-top">  
                      <option>Year</option>
                      <?php
                        $y = date("Y", strtotime("+8 HOURS"));
                        for($year = 1950; $y >= $year; $y--){
                          echo "<option value = '".$y."'>".$y."</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>


                                <?php
                // Assuming you have a selected month and year from the user
                $selectedMonth = 6; // June
                $selectedYear = 2023;

                // Construct the SQL query

                
                $sql2 = "SELECT * FROM laundry_orders
                        WHERE MONTH(order_date) = $selectedMonth
                        AND YEAR(order_date) = $selectedYear";

                
                ?>



                <div class="table-responsive">
                  <table class="table no-wrap">
                    <thead>
                      <tr>
                        <th class="border-top-0">Invoice</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">Phone Number</th>
                        <th class="border-top-0">Pickup Address</th>
                        <th class="border-top-0">Price</th>
                        <th class="border-top-0">Date Order</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql = "SELECT laundry_orders.*, users.name, users.phn_num
                    FROM laundry_orders
                    JOIN users ON laundry_orders.customer_id = users.user_id;
                    "; 
                    $hasil = $koneksi->query($sql); //memproses query
                    if ($hasil->num_rows > 0) {
                      //menampilkan data setiap barisnya
                      while ($baris = $hasil->fetch_assoc()) {
                                      $id = $baris['order_id'];
                                      $name = $baris['name'];
                                      $phone = $baris['phn_num'];
                                      $address =$baris['alamat'];
                                      $price = $baris['total_cost'];
                                      $nota = $baris['nota'];
                                      $pickup_date = $baris['pickup_date'];
                                      echo "<tr><td>$nota</td>";
                                      echo "<td>$name</td>
                                      <td>$phone</td>
                                      <td>$address</td>
                                      <td>$price</td>
                                      <td>$pickup_date</td>"; 
                                      ?>
                                      </tr>
                                      
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
              </div>
            </div>
          </div>






          <!-- ============================================================== -->
          
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            Designed By Nedroid Distributed By Melaundry
          <a href="https://www.wrappixel.com/">© MeLaundry, All Right Reserved.</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
  </body>
</html>
