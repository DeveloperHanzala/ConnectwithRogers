<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Credentials for rogers database
$rogersServername = "localhost";
$rogersUsername = "adminrogers_connect";
$rogersPassword = "YD1qKfeW.p#9";
$rogersDatabase = "adminrogers_connect";


// Credentials for rg database
$rgServername = "localhost";
$rgUsername = "adminrogers_rog"; 
$rgPassword = "9k+hqSH[rEI("; 
$rgDatabase = "adminrogers_rog";





// Connect to rogers database
$rogConn = new mysqli($rogersServername, $rogersUsername, $rogersPassword, $rogersDatabase);

// Connect to rg database
$b2cConn = new mysqli($rgServername, $rgUsername, $rgPassword, $rgDatabase);

// Check connections
if ($rogConn->connect_error) {
    die("Connection to rogers database failed: " . $rogConn->connect_error);
}
if ($b2cConn->connect_error) {
    die("Connection to rg database failed: " . $b2cConn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    $short_description = $_POST["short_description"];
    $price = $_POST["Price"];
    $website_option = $_POST["website_options"];

    // Sanitize price
    $price = preg_replace("/[^0-9.]/", "", $price);
    if (!is_numeric($price) || $price < 0) {
        die("Invalid price format.");
    }

    // Handle file upload
    $targetDir = "uploads/";

    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Upload file
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        // Prepare insert statement
        $insertSQL = "INSERT INTO hot_byod (title, short_description, price, file) VALUES (?, ?, ?, ?)";

        // Function to insert into a specific database
        function insertIntoDatabase($conn, $title, $short_description, $price, $fileName) {
            global $insertSQL;
            $stmt = $conn->prepare($insertSQL);
            $stmt->bind_param("ssds", $title, $short_description, $price, $fileName);
            if (!$stmt->execute()) {
                echo "Error inserting into database: " . $stmt->error;
            }
            $stmt->close();
        }

        // Insert based on selected option
        if ($website_option == "Connect with rogers") {
            insertIntoDatabase($rogConn, $title, $short_description, $price, $fileName);
        } elseif ($website_option == "B2C") {
            insertIntoDatabase($b2cConn, $title, $short_description, $price, $fileName);
        } elseif ($website_option == "Both") {
            insertIntoDatabase($rogConn, $title, $short_description, $price, $fileName);
            insertIntoDatabase($b2cConn, $title, $short_description, $price, $fileName);
        }

        // Redirect to success page
        header("Location: ../success.html");
        exit();
    } else {
        echo "Error uploading file.";
    }
}

// Close connections
$rogConn->close();
$b2cConn->close();
?>
