<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Establishing database connection
$servername = "localhost";
$username = "adminrogers_connect";
$password = "YD1qKfeW.p#9";
$database = "adminrogers_connect";



$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST["service"];
    $location = $_POST["location"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Phone = $_POST["Phone"];
    
    // Match the location to the appointment_id
    switch ($location) {
        case '1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4':
            $appointment_id = '1';
            break;
        case '7205 Goreway Drive, Unit K3, Mississauga, ON L4T 2T9':
            $appointment_id = '2';
            break;
        case '3850 Sheppard Ave E Unit 0075, Toronto, ON M1T3L4':
            $appointment_id = '3';
            break;
        case '2900 Markham Road, Unit A47, Scarborough, ON M1X 1E6':
            $appointment_id = '4';
            break;
        case '45 Overlea Blvd. Unit 148, Toronto, ON M4H 1C3':
            $appointment_id = '5';
            break;
        case '4300 Steeles Ave. E, Unit E51, Markham, ON L3R 0Y5':
            $appointment_id = '6';
            break;
        case '1530 Albion Road, Unit 37C, Etobicoke, ON M9V 1B4':
            $appointment_id = '7';
            break;
        case '84 Lynden Road, Unit K03, Brantford, ON N3R 6B8':
            $appointment_id = '8';
            break;
        case '777 Guelph Line, Unit K018, Burlington, ON N3R 6B8':
            $appointment_id = '9';
            break;
        case '222 Spadina Avenue; Unit 103 B, Toronto, ON M5T 3B3':
            $appointment_id = '10';
            break;
        case '250 The East Mall, Unit 105, Etobicoke, ON M9B 3Y8':
            $appointment_id = '11';
            break;
        case '444 Yonge Street, Unit M7, Toronto, ON M5B 2H4':
            $appointment_id = '12';
            break;
        case '45 Overlea Blvd. Unit 160, Toronto, ON M4H 1C3':
            $appointment_id = '13';
            break;
        case '220 Yonge Street. Level 1 Unit Z019, Toronto, ON M5B 2H1':
            $appointment_id = '14';
            break;
        case '2 King Street West, Unit 158, Hamilton, ON L8P 1A1':
            $appointment_id = '15';
            break;
        case '2 Bloor Street E, Unit C12, Toronto, ON M4W 1A8':
            $appointment_id = '16';
            break;
        case '1911 Finch Avenue West, Unit K108, Toronto, ON M3N 2V2':
            $appointment_id = '17';
            break;
        case '700 Lawrence Ave. W, Unit 119B, Toronto, ON M6A 3B4':
            $appointment_id = '18';
            break;
        case '55 Ontario Street, Unit K003, Milton, ON L9T 2M3':
            $appointment_id = '19';
            break;
        case '4300 Steeles Ave E, Unit E32, Markham, ON L3R 0Y5':
            $appointment_id = '20';
            break;
        case '85 Ellesmere Road, Unit K017, Toronto, ON M1R 4B9':
            $appointment_id = '21';
            break;
        case '4141 Dixie Road, Unit K8, Mississauga, ON L4W 1V5':
            $appointment_id = '22';
            break;
        case '1151 Dundas St W, Unit K3, Mississauga ON L5C 1C6':
            $appointment_id = '23';
            break;
        case '2300 Yonge Street. Unit M12, Toronto, ON M4P 1E4':
            $appointment_id = '24';
            break;
        case '4841 Yonge Street, Unit 115, North York, ON M2N 5X2':
            $appointment_id = '25';
            break;
        case '1 York Gate Blvd. Unit K-9, Toronto, ON M3N 3A1':
            $appointment_id = '26';
            break;
        case '6064 Yonge Street, Toronto, ON M2M 3W6':
            $appointment_id = '27';
            break;
            case 'airline':
            $appointment_id = '28';
            break;
        default:
            $appointment_id = '0'; // Default if no match is found
            break;
    }

    // Calendar invite generation logic
    $startDateTime = date('Ymd\THis\Z', strtotime("$date $time")); // Start time
    $endDateTime = date('Ymd\THis\Z', strtotime("$date $time + 1 hour")); // End time (1 hour later)

    $subject = urlencode("New Form Submission: $service");
    $body = urlencode("Service: $service\nLocation: $location\nDate: $date\nTime: $time\nName: $Name\nEmail: $Email\nPhone: $Phone");
    $inviteLink = "https://outlook.live.com/calendar/0/deeplink/compose?subject=$subject&body=$body&startdt=$startDateTime&enddt=$endDateTime&location=" . urlencode($location);

    // CSV file processing (Store Directory)
    $csvFile = 'Store Directory.csv'; // Ensure the correct path to your CSV file
    $to = "";

    if (($handle = fopen($csvFile, "r")) !== FALSE) {
        $headers = fgetcsv($handle, 1000, ",");
        $storeAddressIndex = array_search('storeAddress', $headers);
        $storeEmailIndex = array_search('storeEmail', $headers);

        if ($storeAddressIndex === false || $storeEmailIndex === false) {
            echo "Error: 'storeAddress' or 'storeEmail' columns not found in the CSV file.";
            exit();
        }

        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if (trim($location) == trim($data[$storeAddressIndex])) {
                $to = $data[$storeEmailIndex];
                break; 
            }
        }
        fclose($handle);
    }

    if (empty($to)) {
        $to = "default@example.com"; 
    }

    // Prepare the email
    $emailSubject = "New Form Submission";
    $emailBody = "Service:  $service\n";
    $emailBody .= "Location: $location\n";
    $emailBody .= "Date:  $date\n";
    $emailBody .= "Time: $time\n";
    $emailBody .= "Name: $Name \n";
    $emailBody .= "Email:  $Email\n";
    $emailBody .= "Phone:  $Phone \n";
    $emailBody .= "Calendar Invite: $inviteLink\n"; 
    
    
   // Add the Cc to send a copy to han
$headers = "Cc: sathishkumar.subburam@wdna.ca";

    // Send email
    if (mail($to, $emailSubject, $emailBody,$headers)) {
        // Insert into the database
        $stmt = $conn->prepare("INSERT INTO bookings (service, location, date, time, Name, Email, Phone, appointment_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $service, $location, $date, $time, $Name, $Email, $Phone, $appointment_id);

        if ($stmt->execute()) {
            header("Location: success.html");  // Redirect to success page
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();  // Close the prepared statement
    } else {
        echo "Failed to send email.";
    }
}

$conn->close();  // Close the database connection
?>
