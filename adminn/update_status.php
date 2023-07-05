<?php
include '../koneksi.php';
session_start();
if (! isset($_SESSION['login'])){
  $_SESSION['login'] = false;
} else{
  $id = $_SESSION['id'];
  $query = " select * from users where user_id= '$id' ";
  $result = mysqli_query($koneksi, $query);
  $user = mysqli_fetch_assoc($result);
  $name = $user["name"];
  $image = $user["image"];
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
    <title>Userregister Melaundry</title>
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
    <link href="css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a class="navbar-brand" href="../index.php">
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
                src="../img/<?php echo $image; ?>"
                    alt="user-img"
                    width="38px"
                    height="38px"
                    class="img-circle"
                
                  /><span class="text-white font-medium"><?php echo $name; ?></span>
                  </a
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
                  href="update_status.php"
                  aria-expanded="false"
                >
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span class="hide-menu">Update Status</span>
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
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
          <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <h4 class="page-title">Update Status</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"></div>
          </div>
          <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">

                  
                  

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="col-sm-12">
              <div class="white-box">
                <h3 class="box-title"></h3>
                <div class="container-fluid">
                <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
              <div class="white-box">
                <div class="d-md-flex mb-3">
                  <h3 class="box-title mb-0">Order List</h3>
                  <div class="col-md-3 col-sm-4 col-xs-6 ms-auto">
                    <select class="form-select shadow-none row border-top">
                      <option>January 2022</option>
                      <option>February 2022</option>
                      <option>March 2022</option>
                      <option>April 2022</option>
                      <option>May 2022</option>
                      <option>June 2022</option>
                      <option>July 2022</option>
                      <option>August 2022</option>
                      <option>September 2022</option>
                      <option>October 2022</option>
                      <option>November 2022</option>
                      <option>December 2021</option>
                    </select>
                  </div>
                  
                </div>

<span class="counter pull-right"></span>
                <div class="table-responsive">
                <input type="text" class="search form-control" placeholder="Cari nota.....">
                  <table class="table no-wrap">
                    <thead>
                      <tr>
                        <th class="border-top-0">Invoice</th>
                        <th class="border-top-0">Name</th>
                        <th class="border-top-0">order_status</th>
                        <th class="border-top-0">Phone Number</th>
                        <th class="border-top-0">Pickup Address</th>
                        <th class="border-top-0">Price</th>
                        <th class="border-top-0">Date Order</th>
                        <th class="border-top-0">Pewangi</th>
                        <th class="border-top-0">Action</th>
                      </tr>
                    </thead>
                    <tbody>
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

                </div>
              </div>
            </div>
          </div>
                        
                        
                    </div>
                    
                
              </div>
            </div>
          </div>
          
        </div>
        
        <footer class="footer text-center">
          Designed By Nedroid Distributed By Melaundry
          <a href="https://www.wrappixel.com/"
            >© MeLaundry, All Right Reserved.</a
          >
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->

        <!-- Back to Top -->
        <div class="modal fade" id="updateOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <?php
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $order_id = $_POST['order_id'];
            $new_status = $_POST['new_status'];
            
            $status = "UPDATE laundry_orders
                       SET order_status = '$new_status'
                       WHERE nota = '$order_id'" ;
            $result = mysqli_query($koneksi, $status);
        
            if ($result) {
                echo "Order status updated successfully.";
            } else {
                echo "Error updating order status: " . mysqli_error($koneksi);
            }
        }
        ?>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Order Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
                    <input type="hidden" id="order_id" name="order_id" value="<?php echo $nota; ?>">
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



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
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

      $(document).ready(function() {
        $(".search").keyup(function() {
          var searchTerm = $(".search").val();
          var listItem = $(".results tbody").children("tr");
          var searchSplit = searchTerm.replace(/ /g, "'):containsi('");

          $.extend($.expr[":"], {
            containsi: function(elem, i, match, array) {
              return (
                (elem.textContent || elem.innerText || "")
                  .toLowerCase()
                  .indexOf((match[3] || "").toLowerCase()) >= 0
              );
            },
          });

          $(".results tbody tr")
            .not(":containsi('" + searchSplit + "')")
            .each(function(e) {
              $(this).attr("visible", "false");
            });

          $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e) {
            $(this).attr("visible", "true");
          });

          var jobCount = $(".results tbody tr[visible='true']").length;
          $(".counter").text(jobCount + " item");

          if (jobCount == "0") {
            $(".no-result").show();
          } else {
            $(".no-result").hide();
          }
        });
      });

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

  </body>
</html>
