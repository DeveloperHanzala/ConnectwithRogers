<?php

session_start(); // Start session
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database credentials for 'rogers'
$rogersServername = "localhost";
$rogersUsername = "adminrogers_connect";
$rogersPassword = "YD1qKfeW.p#9";
$rogersDatabase = "adminrogers_connect";



// Database credentials for 'rg'
$rgServername = "localhost";
$rgUsername = "adminrogers_rog"; 
$rgPassword = "9k+hqSH[rEI("; 
$rgDatabase = "adminrogers_rog";

// Function to insert into rogers database
function insertIntoRogers($fileName) {
    global $rogersServername, $rogersUsername, $rogersPassword, $rogersDatabase;

    $connRogers = new mysqli($rogersServername, $rogersUsername, $rogersPassword, $rogersDatabase);
    if ($connRogers->connect_error) {
        die("Connection failed: " . $connRogers->connect_error);
    }

    $stmt = $connRogers->prepare("INSERT INTO banners (file) VALUES (?)");
    $stmt->bind_param("s", $fileName);

    if ($stmt->execute()) {
        header("Location: ../success.html");
    } else {
        echo "Error inserting into rogers: " . $stmt->error;
    }

    $stmt->close();
    $connRogers->close();
}

// Function to insert into rg database
function insertIntoRg($fileName) {
    global $rgServername, $rgUsername, $rgPassword, $rgDatabase;

    $connRg = new mysqli($rgServername, $rgUsername, $rgPassword, $rgDatabase);
    if ($connRg->connect_error) {
        die("Connection failed: " . $connRg->connect_error);
    }

    $stmt = $connRg->prepare("INSERT INTO banners (file) VALUES (?)");
    $stmt->bind_param("s", $fileName);

    if ($stmt->execute()) {
        header("Location: ../success.html");
    } else {
        echo "Error inserting into rg: " . $stmt->error;
    }

    $stmt->close();
    $connRg->close();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected option
    $websiteOption = $_POST['website_options'];

    // Ensure the directory exists
    $targetDir = "uploads/"; 
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    // Handle file upload
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow only certain file formats
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif', 'webp');
    if (!in_array(strtolower($fileType), $allowedTypes)) {
        die("Sorry, only JPG, JPEG, PNG, GIF, and WEBP files are allowed.");
    }

    // Move the uploaded file
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        // Insert into appropriate databases based on selected option
        if ($websiteOption === "Connect with rogers") {
            insertIntoRogers($fileName);
        } elseif ($websiteOption === "B2C") {
            insertIntoRg($fileName);
        } elseif ($websiteOption === "Both") {
            insertIntoRogers($fileName);
            insertIntoRg($fileName);
        } else {
            echo "Please select a valid option.";
        }
    } else {
        echo "Error uploading file.";
    }
}
?>
