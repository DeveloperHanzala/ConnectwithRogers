<?php
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

// Check if the record ID is provided
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Fetch the existing record to keep unchanged values
        $result = $conn->query("SELECT * FROM hot_byod WHERE id = $id");
        $record = $result->fetch_assoc();

        // Assign posted values, fallback to existing values if not set
        $title = !empty($_POST["title"]) ? $_POST["title"] : $record['title'];
        $short_description = !empty($_POST["short_description"]) ? $_POST["short_description"] : $record['short_description'];
        $price = isset($_POST["price"]) ? $_POST["price"] : $record['price'];

        // Handle the image file upload
        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $target_dir = "uploads/";  // Directory where the image will be uploaded
            $image = $_FILES['image']['name'];
            $target_file = $target_dir . basename($image);
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Validate file type (e.g., only allow JPG, PNG)
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($imageFileType, $allowed_types)) {
                echo "Sorry, only JPG, JPEG, PNG, & GIF files are allowed.";
                exit();
            }

            // Upload the file
            if (!move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                echo "Sorry, there was an error uploading your file.";
                exit();
            }
        } else {
            // Keep the old image if no new image is uploaded
            $image = $record['file'];
        }

        // Update the record in the database
        $stmt = $conn->prepare("UPDATE hot_byod SET title=?, short_description=?, price=?, file=? WHERE id=?");
        $stmt->bind_param("ssdsi", $title, $short_description, $price, $image, $id);
        $stmt->execute();
        $stmt->close();

        // Redirect back to the main page after the update
        header("Location: index.php");
        exit();
    }

    // Fetch the existing record to display in the form
    $result = $conn->query("SELECT * FROM hot_byod WHERE id = $id");
    $record = $result->fetch_assoc();
} else {
    die("ID not provided.");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bundle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
        }
        .form-group input[type="text"],
        .form-group textarea,
        .form-group input[type="file"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-group textarea {
            resize: vertical;
            height: 100px;
        }
        .form-group input[type="submit"] {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .form-group input[type="submit"]:hover {
            background-color: #218838;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            font-size: 16px;
        }
        .back-link:hover {
            text-decoration: underline;
        }
        img {
            max-width: 200px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Bundle</h2>
        <form method="POST" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($record['title']); ?>"  maxlength="40" required>
            </div>

            <div class="form-group">
                <label for="short_description">Short Description</label>
                <textarea name="short_description" id="short_description" maxlength="130" required><?php echo htmlspecialchars($record['short_description']); ?></textarea>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?php echo htmlspecialchars($record['price']); ?>" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
                <!-- Display the current image -->
                <?php if (!empty($record['file'])): ?>
                    <img src="uploads/<?php echo htmlspecialchars($record['file']); ?>" alt="Current Image">
                    <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($record['file']); ?>">
                <?php endif; ?>
            </div>

            <div class="form-group">
                <input type="submit" value="Save Changes">
            </div>
        </form>
        <a class="back-link" href="hot__byod.php">Back to Hot Deals BYOD List</a>
    </div>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
