<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>

    <!-- forms's css -->
    <link rel="stylesheet" href="includes/form.css">

    <!-- shares css -->
    <link rel="stylesheet" href="includes/styles.css">

    <!-- Font Awesome (used for icons)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <div class="container-form">
        <div class="contact-box">
            <div id="contact-full">
                <h1>Hotel Booking Form</h1>
                <p>Please fill out the form below to book your stay at our hotel.</p>
                <h3>Book Your Stay</h3>
                <form name="bookingForm" method="POST">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" value="<?php echo isset($_SESSION['Name']) ? $_SESSION['Name'] : ''; ?>">
                    </div>

                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" placeholder="Your Email" value="<?php echo isset($_SESSION['Email']) ? $_SESSION['Email'] : ''; ?>">
                    </div>

                    <div class="input-group">
                        <label for="phone">Phone number:</label>
                        <input type="text" name="phone" id="phone">
                    </div>

                    <div class="input-group">
                        <label for="hotel">Choose a Hotel:</label>
                        <select id="hotel" name="hotel">
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "EgyGo";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            // Fetch available trips from database
                            $sql = "SELECT 	Accommodation_ID, Hotel_name  FROM accommodation";
                            $result = $conn->query($sql);

                            // Display trip options in dropdown menu
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['Accommodation_ID'] . "'>" . $row['Hotel_name'] . "</option>";
                                }
                            } else {
                                echo "<option value='' disabled>No hotels available</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <div class="input-group">
                        <label>Check-in Date</label>
                        <input type="date" name="checkInDate" id="checkInDate">
                    </div>

                    <div class="input-group">
                        <label>Check-out Date</label>
                        <input type="date" name="checkOutDate" id="checkOutDate">
                    </div>

                    <div class="input-group">
                        <label>Special Requests</label>
                        <textarea rows="5" name="specialRequests" id="specialRequests" placeholder="Any special requests (optional)..."></textarea>
                    </div>

                    <button type="submit">Book Now</button>

                </form>
            </div>
        </div>
    </div>


    <?php include 'includes/footer.php'; ?>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Validate Name

        if (empty($_POST["name"])) {
            echo '<script>alert("Please enter your name.");</script>';
            exit; // Stop further processing  
        }

        // Validate Email
        if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo '<script>alert("Please enter a valid email address.");</script>';
            exit;
        }

        // Validate Phone Number
        if (empty($_POST["phone"])) {
            echo '<script>alert("Please enter a valid phone number.");</script>';
            exit;
        }

        // Validate Check-in and Check-out Dates
        $checkInDate = $_POST["checkInDate"];
        $checkOutDate = $_POST["checkOutDate"];

        if (empty($checkInDate) || empty($checkOutDate)) {
            echo '<script>alert("Please select both check-in and check-out dates.");</script>';
            exit;
        }

        if (strtotime($checkOutDate) <= strtotime($checkInDate)) {
            echo '<script>alert("Check-out date must be after check-in date.");</script>';
            exit;
        }

        // Check if user is logged in
        if (isset($_SESSION['username'])) {

            // Retrieve form data
            $hotelId = $_POST["hotel"];
            $phone = $_POST["phone"];
            $checkInDate = $_POST["checkInDate"];
            $checkOutDate = $_POST["checkOutDate"];
            $specialRequests = $_POST["specialRequests"];
            $customerID = $_SESSION['Customer_ID'];

            // Prepare and execute SQL query to insert booking into database
            $sqlInsert = "INSERT INTO acommodation_booking (Customer_ID, Accommodation_ID, Phone_number, Check_in_date, Check_out_date, SpecialRequests)
                      VALUES ( '$customerID', '$hotelId','$phone' ,'$checkInDate', '$checkOutDate', ' $specialRequests')";

            if ($conn->query($sqlInsert) === TRUE) {
                echo "<script>window.alert('Booking Successful');</script>";
            } else {
                echo "Error: " . $sqlInsert . "<br>" . $conn->error;
            }

            // Close database connection
            $conn->close();
        } else {
            echo '<script>alert("Please log in to proceed with the booking.");</script>';
        }
    }
    ?>