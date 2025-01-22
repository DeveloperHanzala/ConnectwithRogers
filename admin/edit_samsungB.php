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
    <?php
$servername = "localhost";
$username = "adminrogers_rog";
$password = "9k+hqSH[rEI(";
$database = "adminrogers_rog";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete record if 'delete' is requested
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $deleteStmt = $conn->prepare("DELETE FROM samsung WHERE id = ?");
    $deleteStmt->bind_param("i", $id);
    $deleteStmt->execute();
    $deleteStmt->close();
    echo "<script>
    alert('Record deleted successfully!');
    window.location.href = 'edit_samsung.php';
  </script>";
    exit();
}

// Fetch records from the database
$result = $conn->query("SELECT * FROM samsung");

?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h1 class="card-title" style="font-weight:bold;font-size:30px;">B2C</h1>

              <div style="display:flex;justify-content:end;align-items:end;flex-direction:column;">
              <select class="form-control" name="website_options" style="width:20%;background-color:black;color:white;" onchange="redirectToPage(this.value)">
              <option value="">...........Please Select............</option>
              <option value="B2C">B2C</option>
              <option value="Connect with rogers">Connect with rogers</option>
          </select>
              </div>
              <!-- General Form Elements -->
           
              <h2>Phones List</h2>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Short Description</th>
                <th>Price</th>
                <th>File/Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Check if there are records to display
        if ($result->num_rows > 0) {
            // Loop through all records and display them
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['title']) . "</td>";

                echo "<td>" . htmlspecialchars($row['short_description']) . "</td>";
              
                echo "<td>" . htmlspecialchars($row['Price']) . "</td>";
                echo "<td><img src='uploads/" . htmlspecialchars($row['file']) . "' alt='" . htmlspecialchars($row['title']) . "' style='width:100px;height:100px;'></td>";
                
                // Edit button
                echo "<td><a href='editsamsungB.php?id=" . $row['id'] . "' class='edit-btn'>Edit</a></td>";
                
                // Delete button with a trash icon
                echo "<td><a href='" . $_SERVER['PHP_SELF'] . "?delete=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")' class='delete-btn'><i class='fas fa-trash'></i> Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No records found.</td></tr>";
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

  <script>
function redirectToPage(value) {
    if (value === "B2C") {
        window.location.href = "edit_samsungB.php"; // Redirect to index.php if B2C is selected
    } else if (value === "Connect with rogers") {
        window.location.href = "edit_samsung.php"; // Redirect to booking.php if Connect with rogers is selected
    }
}
</script>

</body>

</html>