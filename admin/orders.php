<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}

$servername = "localhost";
$username = "adminrogers_connect";
$password = "YD1qKfeW.p#9";
$database = "adminrogers_connect";
 
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update record if 'customer_came' is set
if (isset($_POST['customer_came']) && isset($_POST['id'])) {
    $customer_came = $_POST['customer_came'];
    $id = $_POST['id'];

    // Update the 'customer_came' column
    $updateStmt = $conn->prepare("UPDATE bookings SET customer_came = ? WHERE id = ?");
    $updateStmt->bind_param("si", $customer_came, $id);
    $updateStmt->execute();
    $updateStmt->close();
    echo "<script>
        alert('Customer status updated successfully!');
        window.location.href = 'orders.php';
      </script>";
    exit();
}

// Fetch the vendor_id from the session
if (isset($_SESSION['vendor_id'])) {
    $vendor_id = $_SESSION['vendor_id'];

    // Fetch records from the bookings table where the appointment_id matches the vendor_id
    $stmt = $conn->prepare("SELECT * FROM bookings WHERE appointment_id = ?");
    $stmt->bind_param("i", $vendor_id);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    // If vendor_id is not set, redirect to login or show an error
    echo "<script>
        alert('You are not logged in as a vendor.');
        window.location.href = 'login.php';
      </script>";
    exit();
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
              <h1 class="card-title" style="font-weight:bold;font-size:30px;">Appointments</h1>

              <!-- General Form Elements -->
           
    
              <table>
    <thead>
        <tr>
            <th>Service</th>
            <th>Location</th>
            <th>Date</th>
            <th>Time</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Customer Came to Store</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // Check if there are records to display
    if ($result->num_rows > 0) {
        // Loop through all records and display them
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($row['service']) . "</td>";
          echo "<td>" . htmlspecialchars($row['location']) . "</td>";
          echo "<td>" . htmlspecialchars($row['date']) . "</td>";
          echo "<td>" . htmlspecialchars($row['time']) . "</td>";
          echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
          echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
          echo "<td>" . htmlspecialchars($row['Phone']) . "</td>";
      
          // Dropdown to select 'Yes' or 'No' for customer came to store
          echo "<td>
              <form method='post' action=''>
                  <input type='hidden' name='id' value='" . $row['id'] . "' />
                  <select name='customer_came' onchange='this.form.submit()' style='width:100%; border-radius:5px; background-color:red; color:white;padding:6px 2px;'>
                      <option value='' disabled selected>Select</option>
                      <option value='Yes' " . ($row['customer_came'] == 'Yes' ? 'selected' : '') . ">Yes</option>
                      <option value='No' " . ($row['customer_came'] == 'No' ? 'selected' : '') . ">No</option>
                  </select>
              </form>
          </td>";
          echo "</tr>";
      }
      
    } else {
        echo "<tr><td colspan='8'>No records found.</td></tr>";
    }
    ?>
    </tbody>
</table>

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