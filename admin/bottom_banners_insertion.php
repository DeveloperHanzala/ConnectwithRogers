<?php

$servername = "localhost";
$username = "adminrogers_connect";
$password = "YD1qKfeW.p#9";
$database = "adminrogers_connect";



$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    
    $targetDir = "uploads/"; 

   
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allow only certain file formats
    $allowedTypes = array('jpg', 'jpeg', 'png', 'gif','webp');
    if (!in_array(strtolower($fileType), $allowedTypes)) {
        die("Sorry, only JPG, JPEG, PNG, and GIF files are allowed.");
    }

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
      
        $stmt = $conn->prepare("INSERT INTO bottom_banners ( file) VALUES ( ?)");
        $stmt->bind_param("s", $fileName);

     
        if ($stmt->execute()) {
           
            header("Location: ../success.html");
            exit();
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
      
        $stmt->close();
    } else {
        echo "Error uploading file.";
    }
}

$conn->close();
?>
