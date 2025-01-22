<?php
session_start();

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rogers</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../images/392-3923626_rogers-logo-black-and-white-hd-png-download_1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
th{
  background-color:#060922;
  color:white;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
.customize{
  font-weight:bold;font-size:40px;

}
.flex{
  display:flex;
  justify-content:center;
  align-items:center;
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../images/392-3923626_rogers-logo-black-and-white-hd-png-download_1.png" alt="">
        <span class="d-none d-lg-block">Rogers</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

           
           

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

      

    

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

   <!-- ======= Sidebar ======= -->
   <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="booking.php">
      <i class="bi bi-grid"></i>
      <span>Bookings</span>
    </a>
  </li><!-- End Dashboard Nav -->


  <li class="nav-item">
    <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Top Deals/Bundle</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
      <li>
        <a href="index.php" class="active">
          <i class="bi bi-circle"></i><span>Add Bundle</span>
        </a>
      </li>
      <li>
        <a href="edit_update_bundle.php" class="active">
          <i class="bi bi-circle"></i><span>Edit/Delete</span>
        </a>
      </li>
     <li>
        <a href="logout.php" class="active">
          <i class="bi bi-circle"></i><span>Logout</span>
        </a>
      </li>     
</ul>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Hot Deals BYOD</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
        <a href="hot__byod.php" class="active">
          <i class="bi bi-circle"></i><span>Add Hot Deals BYOD</span>
        </a>
      </li>
      <li>
        <a href="edit_hot__byod.php" class="active">
          <i class="bi bi-circle"></i><span>Edit/Delete</span>
        </a>
      </li>
      <li>
        <a href="logout.php" class="active">
          <i class="bi bi-circle"></i><span>Logout</span>
        </a>
      </li>    
    </ul>
  </li><!-- End Charts Nav -->  
 
  

  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Limited-Time Offers</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="limited_time_offers.php">
              <i class="bi bi-circle"></i><span>Add Limited-Time Offers</span>
            </a>
          </li>
          <li>
            <a href="edit_limited_offers.php">
              <i class="bi bi-circle"></i><span>Edit/Delete</span>
            </a>
          </li>
          <li>
           
          </li>
        </ul>
      </li><!-- End Charts Nav -->


  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Phones</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
    <li>
        <a href="samsung.php" class="active">
          <i class="bi bi-circle"></i><span>Add Phones</span>
        </a>
      </li>
      <li>
        <a href="edit_samsung.php" class="active">
          <i class="bi bi-circle"></i><span>Edit/Delete</span>
        </a>
      </li>
      <li>
        <a href="logout.php" class="active">
          <i class="bi bi-circle"></i><span>Logout</span>
        </a>
      </li>    
    </ul>
  </li><!-- End Icons Nav -->




  <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Banners</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="top_banners.php">
              <i class="bi bi-circle"></i><span>Top Banners</span>
            </a>
            <a href="edit_top_banners.php">
              <i class="bi bi-circle"></i><span>Edit/Delete top banners</span>
            </a>
          </li>
         <li>
            <a href="bottom_banners.php">
              <i class="bi bi-circle"></i><span>Mobile Banners</span>
            </a>
            <a href="edit_bottom_banners.php">
              <i class="bi bi-circle"></i><span>Edit/Delete Mobile Banners</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

</ul>

</aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Elements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Elements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title" style="font-weight:bold;font-size:30px;">Click Out Our Top Deals</h1>

              <!-- General Form Elements -->
              <form action="data_insertion.php" method="POST" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" maxlength="40" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Short Description</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="short_description"  maxlength="130"  required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Price" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="formFile" class="col-sm-2 col-form-label">File Upload</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile" name="file" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="formFile" class="col-sm-2 col-form-label">Options</label>
                    <div class="col-sm-10">
                      <select class="form-control" name="website_options">
                        <option value="">...........Please Select............</option>
                        <option value="B2C">B2C</option>
                        <option value="Connect with rogers">Connect with rogers</option>
                        <option value="Both">Both</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Submit Button</label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Submit Form</button>
                    </div>
                </div>
            </form>
            <!-- End General Form Elements -->

            </div>
          </div>


         <div>
                
<!-- ///////////////////// -->

        </div>

      
      </div>
    </section>

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>