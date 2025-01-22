<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="./images/rogers-logo-30D99701E8-seeklogo.com-removebg-preview (1).png">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8Uw0ByDvKeX21ZjEXYbd4Mlt1jcnwnGA&libraries=places"></script>
    <title>Rogers Store Near Me</title>
  
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PP3N2Q9Z');</script>
<!-- End Google Tag Manager -->



  <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16672565357"></script> <script>   window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'AW-16672565357'); </script>
    
    
    
    
    
    
    <style>
    body{
        overflow-x:hidden;
    }
   .search-bar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    border-radius: 30px;
    /*background-color: black;*/
   background-color: rgba(0, 0, 0, 0.5);

    
    padding: 15px;
    width: 100%;
    margin: 10px auto;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.search-bar select, .search-bar input {
    border: none;
    outline: none;
    padding: 10px;
    border-radius: 30px;
    margin: 5px 0;
    font-size: 16px;
    width: 100%;
}

.search-bar button {
    padding: 10px 20px;
    border: none;
    border-radius: 30px;
    background-color: red;
    color: white;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
}

.search-bar button:hover {
    background-color: #333;
}

.row-container {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.row-container > div {
    flex: 1;
    margin-right: 10px;
}

.row-container > div:last-child {
    margin-right: 0;
}

@media (max-width: 767px) {
    .row-container {
        flex-direction: column;
    }

    .row-container > div {
        margin-right: 0;
        width: 100%;
    }
}

.search-bar label {
    margin-bottom: 5px;
    color: white;
    font-weight: bold;
}

     .nav-link{
    border-radius:5px;
    border:1px solid red;
    margin:3px;
}
label{
    color:white;
}
.nav-link:hover{
    background-color:red;color:white;border-radius:5px;
}

h4{
    color:black;
}



 

        /* Sidebar styles */
        #sidebar {
            width: 350px;
            padding: 10px;
            /*background-color: black;*/
            
            overflow-y: auto;
            border-right: 1px solid #ccc;
        }

        #sidebar h3 {
            margin-top: 0;
        }

        .location-item {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .location-title {
            font-weight: bold;
            color: #1a0dab;
            margin: 0 0 5px;
        }

        .location-address {
            font-size: 0.9em;
            color: #555;
            margin-bottom: 10px;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }

        .action-button {
            display: inline-block;
            padding: 5px 10px;
            background-color: red;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            font-size: 0.9em;
            text-decoration: none;
            cursor: pointer;
            font-weight:bold;
        }

        .action-button:hover {
            background-color: #c9302c;
        }

        /* Map container styles */
        #map {
            flex-grow: 1;
            height: 100%;
        }
        .stdwl{
            display: flex;
            height: 430px;
            margin-bottom:2%;
        }
        @media(max-width:768px){
              #sidebar {
            width: 100%;
            height:500px;
           
           
        }
          .stdwl{
            display: flex;
            height: 430px;
        }
        
        
        
        .row-container2 {
     flex-direction: column;
}

.row-container2 > div {
    flex: 1;
    margin-right: 10px;
}

.row-container2 > div:last-child {
    margin-right: 0;
}

        }
        
        
        .corosal{
            height:450px;
        }
        @media(max-width:768px){
             .corosal{
            /*height:200px;*/
             height:160px;
        }
        .centersmall{
            text-align:center;
        }
        }
        
        
.footerbackgroungimg{
    background-image: url("../images/Group\ 24.png"); 
    background-repeat: no-repeat;
    background-size: cover;
    width:100%;
    height: 50vh; 
    position: relative; 
    background-position: center;
    padding: 0;
    overflow: hidden; /* Ensure the gradient doesn't overflow /
}
.footer-links {
    display: flex; / Use flexbox for alignment /
    gap: 15px; / Adjust spacing between links as needed /
}

.footer-links a {
    text-decoration: none; / Remove underline /
    color: inherit; / Use the inherited text color */
}       



#widthcont{
    max-width: 20%
}

.hiddenslider2{
    display:none;
}
@media(max-width:768px){
  #widthcont{
    max-width: 40%
}  
.hiddenslider2{
    display:block;
}
.hiddenslider1{
    display:none;
}
}


    </style>
</head>
<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PP3N2Q9Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <div class="container-fluid">
        <div class="row shadow1">
            <div class="col-md-3 flex">
                <div>
                   <img src="./images/logo2.png" id="logo2width2">
                </div>
            </div>
            <div class="col-md-6 flex" >
                <nav class="navbar navbar-expand ">
                    <div class="container-fluid">
                     
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse flex" id="mynavbar">
                        <!--<ul class="navbar-nav me-auto">-->
                        <!--  <li class="nav-item">-->
                        <!--    <a class="nav-link" href="#store" class="butstore">Store Finder</a>-->
                        <!--  </li>-->
                        <!--  <li class="nav-item">-->
                        <!--    <a class="nav-link" href="#pricing" >Pricing Plans</a>-->
                        <!--  </li>-->
                        
                        <!--</ul>-->
                      
                      </div>
                    </div>
                  </nav>
                  
            </div>
             <div class="col-md-3">
                <div class="end">
                   <a href="#appointment"><button class="button">Book Appointment</button></a>
                </div>
             </div>
        </div>
    </div>
    <!-- .............................................. -->

    <!-- ...............................................section1 -->
<!--<script src="https://static.elfsight.com/platform/platform.js" async></script>-->
<!--<div class="elfsight-app-120d4aeb-2c0a-4cad-9a97-7faf2039a3fc" data-elfsight-app-lazy></div>-->
  <div class="container-fluid hiddenslider1" >
    <div class="row">
        <div class="col-md-12" style="padding: 0;margin: 0;">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel" >

               
                <div class="carousel-inner" >
                    <?php
         $servername = "localhost";
$username = "adminrogers_connect";
$password = "YD1qKfeW.p#9";
$database = "adminrogers_connect";


$conn = new mysqli($servername, $username, $password, $database);

                    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    
                    $result = $conn->query("SELECT file FROM banners");

                    if ($result->num_rows > 0) {
                        $isActive = true; 

                       
                        while ($row = $result->fetch_assoc()) {
                            $activeClass = $isActive ? 'active' : ''; 
                            echo "<div class='carousel-item $activeClass'>";
                            echo "<img src='./admin/uploads/" . htmlspecialchars($row['file']) . "' alt='Banner Image' class='d-block corosal' style='width:100%;padding: 0;margin: 0;'>";
                            echo "</div>";
                            $isActive = false; 
                        }
                    } else {
                        echo "<p>No images found in the database.</p>";
                    }

                  
                    $conn->close();
                    ?>
                </div>

              
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style=" border-radius: 10px;"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style=" border-radius: 10px;"></span>
                </button>

            </div>
        </div>
    </div>
</div>
<!--===========================================================================================================================-->
<!--=====================================================================================================================================-->
 <div class="container-fluid hiddenslider2" >
    <div class="row">
        <div class="col-md-12" style="padding: 0;margin: 0;">
            <!-- Carousel -->
            <div id="demo2" class="carousel slide" data-bs-ride="carousel" >

               
                <div class="carousel-inner" >
                    <?php
         $servername = "localhost";
$username = "adminrogers_connect";
$password = "YD1qKfeW.p#9";
$database = "adminrogers_connect";


$conn = new mysqli($servername, $username, $password, $database);

                    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    
                    $result = $conn->query("SELECT file FROM bottom_banners");

                    if ($result->num_rows > 0) {
                        $isActive = true; 

                       
                        while ($row = $result->fetch_assoc()) {
                            $activeClass = $isActive ? 'active' : ''; 
                            echo "<div class='carousel-item $activeClass'>";
                            echo "<img src='./admin/uploads/" . htmlspecialchars($row['file']) . "' alt='Banner Image' class='d-block ' style='width:100%;height:100%;padding: 0;margin: 0;'>";
                            echo "</div>";
                            $isActive = false; 
                        }
                    } else {
                        echo "<p>No images found in the database.</p>";
                    }

                  
                    $conn->close();
                    ?>
                </div>

              
                <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" style=" border-radius: 10px;"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" style=" border-radius: 10px;"></span>
                </button>

            </div>
        </div>
    </div>
</div>

<!--===========================================================================================================================-->
<!--=====================================================================================================================================-->





<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
<div class="container mt-5" >
    <div class="row justify-content-center">
    
    <div class="search-bar">
        <div class="row-container">
            
            <div>
               <label>Enter Your Location:</label><br>
               
                <input type="text" name="userLocation" id="location" placeholder="Enter your location" oninput="findNearestMall()">
            </div>
        </div>
        
        
  <div class="row-container2 container stdwl" >
          
        <div id="sidebar">
            <h3 style="color:white;">Rogers Stores</h3>
            <div id="locations-list"></div>
        </div>
        <div id="map"></div>
    </div>
    
    
      
    </div>

    </div>
</div>
<!--============================================================================================================================================-->
<div class="container" id="appointment">
    <div class="row justify-content-center" >
    <form action="message.php" method="POST">
    <div class="search-bar">
       
        
 
    
        <div style="width:100%;"  >
            <div class="row-container">
            <!-- Service Dropdown -->
            <div>
                <label >Service:</label><br>
              <input type="text" id="Services" placeholder="Service" name="service" value="Preferred Service" readonly>
                <!--<select name="service" id="service">-->
                <!--    <option value="" style="color:grey">Service</option>-->
                <!--    <option value="Preferred Service">Preferred Service</option>-->
                <!--    <option value="Bring Your Own Device (BYOD) wireless Plan">Bring Your Own Device (BYOD) wireless Plan</option>-->
                <!--    <option value="Home Internet Service">Home Internet Service</option>-->
                <!--    <option value="Rogers MasterCard">Rogers MasterCard</option>-->
                <!--    <option value="Upgrade Existing Device">Upgrade Existing Device</option>-->
                <!--    <option value="Device Trade-In Program">Device Trade-In Program</option>-->
                <!--    <option value="TV Service Packages">TV Service Packages</option>-->
                <!--    <option value="Accessory Purchases">Accessory Purchases</option>-->
                <!--    <option value="RPP (Rogers Preferred Program)">RPP (Rogers Preferred Program)</option>-->
                <!--    <option value="Mobile Device Protection">Mobile Device Protection</option>-->
                <!--</select>-->
            </div>

            <div>
                <label >Selected Store:</label><br>
               
                <input type="text" name="location" id="nearestMall" readonly>
            </div>

            <!-- Date Picker -->
            <div>
                <label >Date:</label><br>
              
                <input type="date" id="datePicker" placeholder="Any date" name="date">
            </div>

            <!-- Time Picker -->
            <div>
    <label>Time:</label><br>
    <input type="time" id="timePicker" name="time" placeholder="Any time" >
</div>

        </div>

        <!-- Second Row: Name, Email, Phone -->
        <div class="row-container">
            <!-- Name -->
            <div>
                <label>Name:</label><br>
              
                <input type="text" id="name" placeholder="Name" name="Name">
            </div>

            <!-- Email -->
            <div>
                <label >Email:</label><br>
            
                <input type="email" id="email" placeholder="Email" name="Email">
            </div>

            <!-- Phone -->
            <div>
                <label >Phone:</label><br>
                <input type="tel" id="phone" placeholder="Phone" name="Phone">
            </div>
        </div>

        <!-- Third Row: Button -->
        <div class="row-container mt-2">
            <div>
                <button type="submit" style="z-index:2000;">Book Appointment</button>
            </div>
        </div>
        </div>
    </div>
</form>
    </div>
</div>

<script>
    document.getElementById('timePicker').addEventListener('change', function() {
        const time = this.value;
        
        // Only proceed if time is selected
        if (time) {
            const [hours, minutes] = time.split(':').map(num => parseInt(num, 10));

            // Check if time is within 10:00 AM to 6:00 PM range
            if (hours < 10 || (hours === 18 && minutes > 0) || hours > 18) {
                alert('Please select a time between 10:00 AM and 6:00 PM');
                this.value = '';  // Reset the input if time is out of range
            }
        }
    });
</script>
 


<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
 <script>
    // Initialize Flatpickr for date selection
    flatpickr("#datePicker", {
        altInput: true,
        altFormat: "F j, Y",
        dateFormat: "Y-m-d",
        defaultDate: new Date(), // Sets the current date as the default
        minDate: new Date() // Prevents selection of past dates
    });
</script>

<script>
function initAutocomplete() {
    const input = document.getElementById('location');
    const autocomplete = new google.maps.places.Autocomplete(input);

    // Add listener for when a place is selected
    autocomplete.addListener('place_changed', () => {
        const place = autocomplete.getPlace();
        if (place.geometry) {
            const { lat, lng } = place.geometry.location;
            findNearestMall(lat(), lng());
        } else {
            document.getElementById('nearestMall').value = 'No results found.';
        }
    });
}

function findNearestMall(userLat, userLon) {
    let nearestMall = null;
    let minDistance = Infinity;

    malls.forEach(mall => {
        const distance = calculateDistance(userLat, userLon, mall.coords.lat, mall.coords.lon);
        if (distance < minDistance) {
            minDistance = distance;
            nearestMall = mall;
        }
    });

    if (nearestMall) {
        document.getElementById('nearestMall').value = `${nearestMall.address}`;
    }
}

// Call initAutocomplete after the page has loaded
window.onload = initAutocomplete;
</script>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- ...............................................section2 -->
    <!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->


 <script>
    const locations = [
      {name: "1250 South Service Road, Unit K9A, Mississauga, ON L5E 1V4", coords: {lat: 43.5739, lng: -79.6345}, heading: "Dixie Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "7205 Goreway Drive, Unit K3, Mississauga, ON L4T 2T9", coords: {lat: 43.7009, lng: -79.5902}, heading: "Westwood Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "3850 Sheppard Ave E Unit 0075, Toronto, ON M1T3L4", coords: {lat: 43.7784, lng: -79.2988}, heading: "Agincourt Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "2900 Markham Road, Unit A47, Scarborough, ON M1X 1E6", coords: {lat: 43.7863, lng: -79.2008}, heading: "Majestic City",timeing:"11:00 am to 8:00 pm"},
        {name: "45 Overlea Blvd. Unit 148, Toronto, ON M4H 1C3", coords: {lat: 43.7063, lng: -79.3471}, heading: "East York Town Centre",timeing:"10:00 am to 8:00 pm"},
        {name: "4300 Steeles Ave. E, Unit E51, Markham, ON L3R 0Y5", coords: {lat: 43.8185, lng: -79.3452}, heading: "Pacific Mall",timeing:"11:00 am to 7:00 pm"},
        {name: "1530 Albion Road, Unit 37C, Etobicoke, ON M9V 1B4", coords: {lat: 43.7172, lng: -79.5821}, heading: "Albion Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "84 Lynden Road, Unit K03, Brantford, ON N3R 6B8", coords: {lat: 43.1664, lng: -80.2611}, heading: "Brantford Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "777 Guelph Line, Unit K018, Burlington, ON N3R 6B8", coords: {lat: 43.4446, lng: -79.7405}, heading: "Burlington Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "222 Spadina Avenue; Unit 103 B, Toronto, ON M5T 3B3", coords: {lat: 43.6535, lng: -79.3978}, heading: "China Town Centre",timeing:"11:00 am to 7:00 pm"},
        {name: "250 The East Mall, Unit 105, Etobicoke, ON M9B 3Y8", coords: {lat: 43.6191, lng: -79.5755}, heading: "Cloverdale Mall",timeing:"10:00 am to 8:00 pm"},
        {name: "444 Yonge Street, Unit M7, Toronto, ON M5B 2H4", coords: {lat: 43.6571, lng: -79.3807}, heading: "College Park",timeing:"10:00 am to 7:00 pm"},
        {name: "45 Overlea Blvd. Unit 160, Toronto, ON M4H 1C3", coords: {lat: 43.7063, lng: -79.3471}, heading: "East York Town Centre",timeing:"10:00 am to 8:00 pm"},
        {name: "220 Yonge Street. Level 1 Unit Z019, Toronto, ON M5B 2H1", coords: {lat: 43.6532, lng: -79.3802}, heading: "Eaton Centre",timeing:"10:00 am to 9:00 pm"},
        {name: "2 King Street West, Unit 158, Hamilton, ON L8P 1A1", coords: {lat: 43.2595, lng: -79.8711}, heading: "Hamilton Jackson Square",timeing:"9:30 am to 6:00 pm"},
        {name: "2 Bloor Street E, Unit C12, Toronto, ON M4W 1A8", coords: {lat: 43.6678, lng: -79.3832}, heading: "Hudson Bay Centre",timeing:"10:00 am to 7:00 pm"},
        {name: "1911 Finch Avenue West, Unit K108, Toronto, ON, M3N 2V2", coords: {lat: 43.7580, lng: -79.5233}, heading: "Jane & Finch Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "700 Lawrence Ave. W, Unit 119B, Toronto, ON M6A 3B4", coords: {lat: 43.7256, lng: -79.4487}, heading: "Lawrence Square",timeing:"10:00 am to 9:00 pm"},
        {name: "55 Ontario Street, Unit K003, Milton, ON L9T 2M3", coords: {lat: 43.5059, lng: -79.9035}, heading: "Milton Mall",timeing:"10:00 am to 8:00 pm"},
        {name: "4300 Steeles Ave E, Unit E32, Markham, ON L3R 0Y5", coords: {lat: 43.8185, lng: -79.3452}, heading: "Pacific Mall",timeing:"11:00 am to 7:00 pm"},
        {name: "85 Ellesmere Road, Unit K017, Toronto, ON M1R 4B9", coords: {lat: 43.7500, lng: -79.2942}, heading: "Parkway Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "4141 Dixie Road, Unit K8, Mississauga, ON L4W 1V5", coords: {lat: 43.5969, lng: -79.6422}, heading: "Rockwood Mall",timeing:"10:00 am to 7:00 pm"},
        {name: "1151 Dundas St W, Unit K3, Mississauga ON L5C 1C6", coords: {lat: 43.5900, lng: -79.6235}, heading: "Westdale Mall",timeing:"9:30 am to 8:00 pm"},
        {name: "2300 Yonge Street. Unit M12, Toronto, ON M4P 1E4", coords: {lat: 43.7112, lng: -79.3950}, heading: "Yonge & Eglinton",timeing:"10:00 am to 7:00 pm"},
        {name: "4841 Yonge Street, Unit 115, North York, ON M2N 5X2", coords: {lat: 43.7697, lng: -79.4120}, heading: "Yonge & Sheppard",timeing:"10:00 am to 7:00 pm"},
        {name: "1 York Gate Blvd. Unit K-9, Toronto, ON M3N 3A1", coords: {lat: 43.7264, lng: -79.4534}, heading: "Yorkgate Mall",timeing:"10:00 am to 9:00 pm"},
        {name: "6064 Yonge Street, Toronto, ON M2M 3W6", coords: {lat: 43.7906, lng: -79.4164}, heading: "6064 Yonge St",timeing:"10:00 am to 6:00 pm"}
    ];

  let userCoords = null;
    window.map = null;

   function initMap() {
    const mapCenter = { lat: 43.7, lng: -79.4 };
    window.map = new google.maps.Map(document.getElementById("map"), {
        zoom: 10,
        center: mapCenter
    });

    const locationsList = document.getElementById("locations-list");

    locations.forEach((location) => {
        const marker = new google.maps.Marker({
            position: location.coords,
            map: window.map,
            title: location.name
        });

        const locationElement = createLocationElement(location);
        locationsList.appendChild(locationElement);

        // Generate Google Maps link based on the location's coordinates
        const googleMapsLink = `https://www.google.com/maps/search/?api=1&query=${location.coords.lat},${location.coords.lng}`;

        // Create an info window with detailed content including the link button
        const infoWindow = new google.maps.InfoWindow({
            content: `
                <div style="font-size: 14px;">
                    <strong>${location.heading}</strong><br>
                    ${location.name}<br>
                    Timings: ${location.timeing}<br>
                    <a href="${googleMapsLink}" target="_blank" 
                        style="
                            display: inline-block;
                            margin-top: 10px;
                            padding: 8px 16px;
                            background-color: red;
                            color: #fff;
                            text-decoration: none;
                            border-radius: 4px;
                            font-size: 14px;
                            font-weight: bold;
                            text-align: center;
                        ">View on Google Maps</a>
                </div>
            `
        });

        // Open the info window and center the map on marker click
        marker.addListener("click", () => {
            infoWindow.open(window.map, marker);
            window.map.setCenter(marker.getPosition());
            window.map.setZoom(12);
        });
    });
}



  function createLocationElement(location) {
    const locationElement = document.createElement("div");
    locationElement.classList.add("location-item");

    const locationHeading = document.createElement("h5");
    locationHeading.classList.add("location-heading");
    locationHeading.textContent = location.heading;
    locationElement.appendChild(locationHeading);

    const locationTitle = document.createElement("div");
    locationTitle.classList.add("location-title");
    locationTitle.textContent = location.name;
    locationElement.appendChild(locationTitle);
    
    const locationTiming = document.createElement("div");
    locationTiming.classList.add("location-timing");
    locationTiming.textContent = `${location.timeing}`;
    locationElement.appendChild(locationTiming);

    const actionButtons = document.createElement("div");
    actionButtons.classList.add("action-buttons");
    
    const showOnMapBtn = document.createElement("div");
    showOnMapBtn.classList.add("action-button");
    showOnMapBtn.textContent = "Show on Map";
    showOnMapBtn.addEventListener("click", () => {
        // Clear existing markers if needed
        if (window.currentMarker) {
            window.currentMarker.setMap(null);
        }

        // Create a new marker for the selected location
        const marker = new google.maps.Marker({
            position: location.coords,
            map: window.map,
            title: location.name
        });

        // Add a 'View on Google Maps' link
        const googleMapsLink = `https://www.google.com/maps?q=${location.coords.lat},${location.coords.lng}`;
        
        const infoWindow = new google.maps.InfoWindow({
            content: `<strong>${location.heading}</strong><br>
                      ${location.name}<br><br>
                      <em>Timings: ${location.timeing}</em><br><br><br>
                      <a href="${googleMapsLink}" target="_blank" 
                     style="
                        display: inline-block;
                        margin-top: 10px;
                        padding: 8px 16px;
                        background-color: red;
                        color: #fff;
                        text-decoration: none;
                        border-radius: 4px;
                        font-size: 14px;
                        font-weight: bold;
                        text-align: center;
                     ">View on Google Maps</a>`
        });
        infoWindow.open(window.map, marker);

        // Center the map on the marker
        window.map.setCenter(marker.getPosition());
        window.map.setZoom(12);

        // Store the current marker to remove later if necessary
        window.currentMarker = marker;
    });
    actionButtons.appendChild(showOnMapBtn);

    const bookAppointmentBtn = document.createElement("div");
    bookAppointmentBtn.classList.add("action-button");
    bookAppointmentBtn.textContent = "Book Appointment";
    bookAppointmentBtn.addEventListener("click", () => {
        // Set the nearest mall name in the input field
        document.getElementById("nearestMall").value = location.name;

        // Scroll to the nearest mall input field smoothly
        const nearestMallInput = document.getElementById("nearestMall");
        nearestMallInput.scrollIntoView({ behavior: "smooth", block: "center" });
    });
    actionButtons.appendChild(bookAppointmentBtn);

    locationElement.appendChild(actionButtons);
    return locationElement;
}

    
    
    
    
    
    

  async function findNearestMall() {
    const locationInput = document.getElementById("location").value;

    if (locationInput.length === 0) {
        userCoords = null;
        return;
    }

    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({ address: locationInput }, (results, status) => {
        if (status === "OK") {
            userCoords = results[0].geometry.location;

            // Add a marker for the user's location
            if (window.userMarker) {
                window.userMarker.setMap(null); // Clear existing marker if any
            }

            window.userMarker = new google.maps.Marker({
                position: userCoords,
                map: window.map,
                title: "Your Location",
                icon: "http://maps.google.com/mapfiles/ms/icons/blue-dot.png" // Custom icon for user location
            });

            // Center the map on the user's location and update the list
            window.map.setCenter(userCoords);
            window.map.setZoom(12);
            updateLocationList(); // Sort and display locations based on user's location
        } else {
            console.error("Geocoding failed: " + status);
        }
    });
}

 function updateLocationList() {
    const locationsList = document.getElementById("locations-list");
    locationsList.innerHTML = ""; // Clear existing content

    if (!userCoords) return; // Ensure userCoords is set

    // Create an array of locations with their distances
    const locationsWithDistances = locations.map(location => {
        const distance = calculateDistance(userCoords.lat(), userCoords.lng(), location.coords.lat, location.coords.lng);
        return { location, distance };
    });

    // Sort the array by distance
    locationsWithDistances.sort((a, b) => a.distance - b.distance);

    // Populate the sidebar with sorted locations
    locationsWithDistances.forEach(({ location, distance }) => {
        const locationElement = document.createElement("div");
        locationElement.classList.add("location-item");

        const locationHeading = document.createElement("h5");
        locationHeading.classList.add("location-heading");
        locationHeading.textContent = location.heading;
        locationElement.appendChild(locationHeading);

        const locationTitle = document.createElement("div");
        locationTitle.classList.add("location-title");
        locationTitle.innerHTML = `${location.name}  <br> <span style="color: red;">${distance.toFixed(2)} miles away</span>`;
        locationElement.appendChild(locationTitle);
       
        const locationTiming = document.createElement("div");
        locationTiming.classList.add("location-timing");
        locationTiming.textContent = `${location.timeing}`;
        locationElement.appendChild(locationTiming);

        const actionButtons = document.createElement("div");
        actionButtons.classList.add("action-buttons");

        const showOnMapBtn = document.createElement("div");
        showOnMapBtn.classList.add("action-button");
        showOnMapBtn.textContent = "Show on Map";
        showOnMapBtn.addEventListener("click", () => {
            // Clear existing markers if needed
            if (window.currentMarker) {
                window.currentMarker.setMap(null);
            }

            // Create a new marker for the selected location
            const marker = new google.maps.Marker({
                position: location.coords,
                map: window.map,
                title: location.name
            });

            // Add a 'View on Google Maps' link
            const googleMapsLink = `https://www.google.com/maps?q=${location.coords.lat},${location.coords.lng}`;
            
            const infoWindow = new google.maps.InfoWindow({
                content: `<strong>${location.heading}</strong><br>
                          ${location.name}<br><br>
                          <em>Timings: ${location.timeing}</em><br><br><br>
                          <a href="${googleMapsLink}" target="_blank" 
                         style="
                            display: inline-block;
                            margin-top: 10px;
                            padding: 8px 16px;
                            background-color: red;
                            color: #fff;
                            text-decoration: none;
                            border-radius: 4px;
                            font-size: 14px;
                            font-weight: bold;
                            text-align: center;
                         ">View on Google Maps</a>`
            });
            infoWindow.open(window.map, marker);

            // Center the map on the marker
            window.map.setCenter(marker.getPosition());
            window.map.setZoom(12);

            // Store the current marker to remove later if necessary
            window.currentMarker = marker;
        });

        actionButtons.appendChild(showOnMapBtn);

        const bookAppointmentBtn = document.createElement("div");
        bookAppointmentBtn.classList.add("action-button");
        bookAppointmentBtn.textContent = "Book Appointment";
        bookAppointmentBtn.addEventListener("click", () => {
            // Set the nearest mall name in the input field
            document.getElementById("nearestMall").value = location.name;

            // Display the appointment container
            const appointmentContainer = document.getElementById("appointment");
            appointmentContainer.style.display = "block"; // Change this to "block" to make it visible
            
            // Scroll to the nearest mall input field smoothly
            const nearestMallInput = document.getElementById("nearestMall");
            nearestMallInput.scrollIntoView({ behavior: "smooth", block: "center" });
        });
        actionButtons.appendChild(bookAppointmentBtn);

        locationElement.appendChild(actionButtons);
        locationsList.appendChild(locationElement);
    });
}



   function calculateDistance(lat1, lon1, lat2, lon2) {
        const R = 3958.8; // Radius of the Earth in miles
        const dLat = (lat2 - lat1) * (Math.PI / 180);
        const dLon = (lon2 - lon1) * (Math.PI / 180);
        const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                  Math.cos(lat1 * (Math.PI / 180)) * Math.cos(lat2 * (Math.PI / 180)) *
                  Math.sin(dLon / 2) * Math.sin(dLon / 2);
        const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
        return R * c; // Distance in miles
    }
    
    google.maps.event.addDomListener(window, 'load', initMap);
</script>




    <!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->
    
    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- ...............................................section2 -->
    <!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->
    
    
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

// Fetch data from the samsung table
$sql = "SELECT file, title, price,short_description FROM limited_offers";
$result = $conn->query($sql);

// Start generating HTML
?>
<div class="container-fluid margin_10 grAY">
    <div class="container">
        <div>
            <h1 class="align bold">Limited-Time Offers</h1>
        </div>
        <div class="row mt-5">
            <?php
            // Check if there are results and output rows
            if ($result->num_rows > 0) {
                // Loop through each row and display the data
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-md-12 mb-4">
                        <div class="d-flex flex-column flex-md-row align-items-center shadow-lg rounded" style="background-color: #f5f5f5; border-radius: 10px; overflow: hidden;">
                            <!-- Image Section -->
                            <div class="col-md-6" style="flex: 1; background-color: white; display: flex; justify-content: center; align-items: center;">
                                <img src="./admin/uploads/<?php echo $row['file'] ? htmlspecialchars($row['file']) : 'default_image.jpg'; ?>" alt="Product Image" style="max-width: 100%; height: auto; max-height: 200px; object-fit: contain;">
                            </div>
                            <!-- Text Section -->
                            <div class="col-md-6 centersmall" style="flex: 2; padding: 10px;">
                                <!-- Title -->
                                <h5 class="fw-bold mb-2"><?php echo $row['title'] ? htmlspecialchars($row['title']) : 'No Title Available'; ?></h5>

                                <!-- Price -->
                                <h5 class="text-danger mb-3">$<span class="priceh2"><?php echo $row['price'] ? htmlspecialchars($row['price']) : '0'; ?></span>/mo</h5>
                                <p class="text-muted mb-3" style="font-size: 0.9rem;"><?php echo $row['short_description'] ? htmlspecialchars($row['short_description']) : 'No short_description'; ?></p>
                                <a href="#" class="btn btn-danger px-4 py-2">Get Now</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<p>No products found.</p>';
            }
            ?>
        </div>
    </div>
</div>



<?php
// Close connection
$conn->close();
?>


                                    
                                  
    <!-- .........../////////////////////////////////////////////mobbile_view -->
   
    <!-- ...............................................section2 -->
    <!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->

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

// Fetch data from the samsung table
$sql = "SELECT file, title,short_description, price FROM samsung";
$result = $conn->query($sql);

// Start generating HTML
?>
<div class="container margin_10" id="pricing">
<div>
            <h1 class="align bold mb-5">Special  Offers</h1>
        </div>
    <div class="row">
        <?php
        // Check if there are results and output rows
        if ($result->num_rows > 0) {
            // Loop through each row and display the data
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4 mb-5"> <!-- Add margin-bottom here -->
                    <div class="samshadow" style="background-color: #E9292B; border-radius:5px;" >
                        <!-- Image -->
                        <img src="./admin/uploads/<?php echo $row['file'] ? htmlspecialchars($row['file']) : 'default_image.jpg'; ?>" class="" width="100%">
                        <!-- Title -->
                        <h3 class="bold flex mt-2 text-white">
                            <?php echo $row['title'] ? htmlspecialchars($row['title']) : 'No Title Available'; ?>
                        </h3>
                        <div class="mt-5" style="text-align:left; " >
                            <p class="text-white" >For as low as</p>
                        <!-- Price -->
                        <h3 class="text-white" >$<span class="text-white" style="font-weight: bold;" ><?php echo $row['price'] ? htmlspecialchars($row['price']) : '0'; ?></span>/mo</h3>
                        </div>
                        <div class="mt-4" style="border-top:2px solid white; color:white; " >
                            <p><?php echo $row['short_description'] ? htmlspecialchars($row['short_description']) : '0'; ?></p>
                            <div class="text-center" >
                                 <a href="#" class="btn  px-4 py-2" style="background-color:white; font-weight:bold; " >Get Now</a>
                            </div>
                             
                        </div>
                         
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p>No products found.</p>';
        }
        ?>
    </div>
</div>

<?php
// Close connection
$conn->close();
?>


    <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- ...............................................section2 -->
    <!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM
    MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->
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

// Fetch data from the hot_byod table
$sql = "SELECT file, title, short_description, price FROM hot_byod";
$result = $conn->query($sql);
?>

<div class="container-fluid margin_10 grAY2 ">
    <div class="container">
        <div>
            <h1 class="align bold">Hot Deals BYOD</h1>
        </div>
        <div class="row">
            <?php
            // Check if there are results and output rows
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-12 col-md-4 ">
                        <div class="shadow3 text p-3 ">
                            <!-- Image -->
                            <img src="./admin/uploads/<?php echo $row['file'] ? htmlspecialchars($row['file']) : 'default_image.jpg'; ?>" style="width:100%;height:250px;">
                            <div class="shadow3pad">
                                <!-- Title -->
                                <h2 class="bold mt-2 white">
                                    <?php echo htmlspecialchars($row['title']); ?>
                                </h2>
                                <!-- Short description -->
                              
                                <div class="mt-5" >
                                   <!-- Price -->
                                <h3>$<span class="" style="font-weight:bold" ><?php echo htmlspecialchars($row['price']); ?></span>/mo</h3>
                               </div>
                              <div class="mt-4"  style="border-top:2px solid white;" >
                                    <p><?php echo htmlspecialchars($row['short_description']); ?></p>
                                    <div class="text-center" >
                                 <a href="#" class="btn  px-4 py-2" style="background-color:white; font-weight:bold; " >Get Now</a>
                            </div>
                              </div> 
                              
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<p>No deals found.</p>';
            }
            ?>
        </div>
    </div>
</div>

<?php
// Close connection
$conn->close();
?>
    
   
    
    
    <!-- MMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMMM -->
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

// Fetch data from the database
$sql = "SELECT title, short_description, price, file FROM bundle";
$result = $conn->query($sql);

// Start generating HTML
?>
<div class="container margin_10">
    <div class="flex">
        <h1 class="bold">Check Out Our Top Deals</h1>
    </div>

    <div class="row mb-5 margin_10" style="margin: 0 -15px;">
    <?php
    // Initialize counter for columns
    $counter = 0;

    // Check if there are results and output rows
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-12 mb-5" style="padding: 0 15px;">
                <div class="d-flex flex-column flex-md-row align-items-center shadow-lg rounded" style="display: flex; align-items: center; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px; overflow: hidden; background-color: #ffffff; transition: transform 0.3s; padding: 15px;">
                    <!-- Image Section -->
                    <div style="flex: 1;  text-align: center;" class="col-md-6 " id="widthcont">
                        <img src="./admin/uploads/<?php echo $row['file']; ?>" alt="Deal Image" style="width: 100%; height: auto; max-height: 250px; border-radius: 10px;">
                    </div>
                    <!-- Text Section -->
                    <div style="flex: 2; padding: 15px;" class="col-md-6 centersmall">
                        <h3 style="font-weight: bold; color: #333; margin-bottom: 15px;"><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p style="margin-bottom: 10px;"><?php echo htmlspecialchars($row['short_description']); ?></p>
                        <h2 style="font-size: 28px; color: #d9534f; margin: 15px 0;">
                            <span style="font-size:22px;">$</span><?php echo htmlspecialchars($row['price']); ?><span style="font-size:30px;">/mo</span>
                        </h2>
                        <a href="#appointment">
                            <button style="background-color: #E9292B; color: #ffffff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;" 
                                    onmouseover="this.style.backgroundColor='#c12e2a'" 
                                    onmouseout="this.style.backgroundColor='#E9292B'">
                                Buy Now
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo '<p>No products found.</p>';
    }
    ?>
</div>

</div>

<?php
// Close connection
$conn->close();
?>



<!-- .//////////////////////////////////////////////////////////////////mobile view -->
<!--        <script src="https://static.elfsight.com/platform/platform.js" async></script>-->
<!--<div class="elfsight-app-c4265a14-df0b-4bc8-bc59-8ed16ff40314" data-elfsight-app-lazy></div>-->

<!-- ....................................... map section-->

 <!---->
 <div class="container mt-5" id="store">
    <div>
        <script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-6e50e949-015c-4081-b4c7-bb08a58d6358" data-elfsight-app-lazy></div>
    </div>
</div>



    <!-- ...............................................section3 -->
     




<hr>
 <div class="mt-5"   style="background-color: #F2F2F2;">
        <div>
        
            <!--footer top start-->
            <div>
                <div class="container pt-3">
                    <div class="row justify-content-around">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="footer-nav-wrap ">
                                <!--<img src="images/rogers-1_1.png" alt="footer logo" width="250" class="img-fluid mb-3">-->
                                <p class="text-dark">Connecting Canada with Innovation and Excellence</p>
                                
                                <div class="social-list-wrap">
                                    <ul class="social-list list-inline list-unstyled" >
                                        <a href="http://facebook.com/connecwithrogers" target="_blank" title="Facebook" style="text-decoration: none; color: #555;">   <i class="fa-brands fa-square-facebook fa-2x"  ></i>
                                        </a>
    
                                        <a href="https://www.instagram.com/connectwithrogers/" target="_blank" title="Instagram" style="text-decoration: none; color: #555;">  <i class="fa-brands fa-square-instagram fa-2x"></i>
                                        </a>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 ml-auto mb-4 mb-lg-0">
                            <div class="footer-nav-wrap ">
                                <!-- <h5 class="mb-3 text-white">Others Links</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="#">About Us</a></li>
                                    <li class="mb-2"><a href="#">Contact Us</a></li>
                                    <li class="mb-2"><a href="#">Privacy Policy</a></li>
                                    <li class="mb-2"><a href="#">Terms and Conditions</a></li>
                                </ul> -->
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-nav-wrap 
                            ">
                                <h5 class="mb-3 ">Location</h5>
                                <img src="images/13.png" alt="location map" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top end-->
        
            <!--footer copyright start-->
            <div class="footer-bottom gray-light-bg pt-4 pb-4">
                <div class="container">
                    <div class="row text-center justify-content-center">
                        <div class="col-md-6 col-lg-5"><p class="copyright-text pb-0 mb-0">Â© 2024 Rogers Preferred Program. All Rights Reserved. Rogers Preferred Program is a registered trademark.
                           
                        </div>
                    </div>
                    <div class="row mt-4" >
                    <diV class="col-md-4" style="display: flex; align-items: center; justify-content: center;">
                    <img src="./images/Wireless.png" width="256px" alt="">
                    </diV>    
                    <diV class="col-md-4" style="display: flex; align-items: center; justify-content: center;">
                      <!--<img src="./images/preferred.png"  width="256px" alt="">-->
                    </diV>  
                    <diV class="col-md-4" style="display: flex; align-items: center; justify-content: center;">
                      <img src="./images/Deal.png"  width="256px" alt="">
                    </diV>  
                </div>
                </div>
                
            </div>
            <!--footer copyright end-->
        </footer>
    </div>
    <!--footer section end-->
    </div>
</body>
</html>
