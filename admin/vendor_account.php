<?php
session_start();


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$servername = "localhost";
$username = "adminrogers_connect";
$password = "YD1qKfeW.p#9";
$database = "adminrogers_connect";



$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_SESSION['vendor_id'])) {
    $vendor_id = $_SESSION['vendor_id'];

 
    $stmt = $conn->prepare("SELECT vendor_id, username, password FROM vendors WHERE vendor_id = ?");
    $stmt->bind_param("i", $vendor_id);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    
    echo "<script>
        alert('You are not logged in as a vendor.');
        window.location.href = 'login.php';
      </script>";
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $new_username = $_POST['username'] ?? '';
    $new_password = $_POST['password'] ?? '';

    if (!empty($new_username)) {
      
        $updateStmt = $conn->prepare("UPDATE vendors SET username = ? WHERE vendor_id = ?");
        $updateStmt->bind_param("si", $new_username, $vendor_id);
        $updateStmt->execute();
        $updateStmt->close();
        echo "<script>alert('Username updated successfully!'); window.location.href = 'logout.php';</script>";
    }

    if (!empty($new_password)) {
      
        $updateStmt = $conn->prepare("UPDATE vendors SET password = ? WHERE vendor_id = ?");
        $updateStmt->bind_param("si", $new_password, $vendor_id);  
        $updateStmt->execute();
        $updateStmt->close();
        echo "<script>alert('Password updated successfully!'); window.location.href = 'logout.php';</script>";
    }
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
     .container {
            width: 100%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            text-align: left;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #060922;
            color: #333;
            font-weight: bold;
            color:white;
        }

        td {
            vertical-align: middle;
        }

        img {
            border-radius: 8px;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }

        .edit-btn, .delete-btn {
            padding: 8px 12px;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            display: inline-block;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #28a745;
        }

        .edit-btn:hover {
            background-color: #218838;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .delete-btn i {
            margin-right: 5px;
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
    <a class="nav-link collapsed" href="#">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Appointments</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="orders.php" class="active">
              <i class="bi bi-circle"></i><span>My Appointments</span>
            </a>
          </li>

          <li>
            <a href="vendor_account.php" class="active">
              <i class="bi bi-circle"></i><span>My Account</span>
            </a>
          </li>  

         <li>
            <a href="logout.php" class="active">
              <i class="bi bi-circle"></i><span>Logout</span>
            </a>
          </li>     
    </ul>
</li>

     
      


    

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
              <h1 class="card-title" style="font-weight:bold;font-size:30px;">My Account</h1>

              <!-- General Form Elements -->
           
    
<!-- Form to update username or password -->
<h3>Edit Your Details</h3>
<form method="POST" action="">
    <label for="username" style="font-weight:bold;">New Username:</label>
    <input type="text" name="username" id="username" placeholder="Enter new username" style="width:100%;padding:10px 20px;border:none;"><br><br>

    <label for="password" style="font-weight:bold;">New Password:</label>
    <input type="password" name="password" id="password" placeholder="Enter new password" style="width:100%;padding:10px 20px;border:none;"><br><br>

    <input type="submit" value="Update" class="btn btn-success">
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
<?php
// Close the statement and connection
$stmt->close();
$conn->close();
?>