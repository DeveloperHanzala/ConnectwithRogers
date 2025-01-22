<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check in the admin table
    $sql = "SELECT * FROM admin WHERE username = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Admin login successful
        $_SESSION["loggedin"] = true; // Marking admin user as logged in
        header('location: index.php');
        exit(); // Stop further script execution
    }

    // Check in the vendors table
    $sql_vendor = "SELECT vendor_id, username, password FROM vendors WHERE username = '$email' AND password = '$password'";
    $result_vendor = $conn->query($sql_vendor);

    if ($result_vendor->num_rows > 0) {
        // Vendor login successful
        $vendor = $result_vendor->fetch_assoc(); // Fetch vendor details
        $_SESSION["loggedin"] = true;
        $_SESSION["vendor_id"] = $vendor['vendor_id']; // Store vendor_id in session
        header('location: orders.php'); // Redirect to orders page for vendors
        exit(); // Stop further script execution
    }

    // If no match found in either table
    echo '<script>alert("Invalid username or password.");</script>';
}

$conn->close();
?>
