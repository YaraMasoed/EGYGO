<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF_8">
    <meta name="viewport" content="width=device_width, initial_scale=1.0">
    <title>Travel Booking Form</title>
    <link rel="stylesheet" href="includes/bookingForm.css">
    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to calculate total price
            function calculateTotalPrice() {
                var tripPrice = 0;
                var transportationPrice = 0;

                // Get selected values
                var selectedOption = $('#Trip option:selected');
                var tripPrice = parseFloat(selectedOption.attr('data-price'));
                var noOfPeople = parseInt($('#no_of_people').val());
                var transportation = $('#transportation').val();

                // Set transportation price based on selected option
                if (transportation === 'car') {
                    transportationPrice = 0;
                } else if (transportation === 'bus') {
                    transportationPrice = 50;
                }

                // Calculate total price
                var totalPrice = (tripPrice * noOfPeople) + transportationPrice;

                // Update total price display
                $('#total-price').text('Total Price: $' + totalPrice);
            }

            // Event listeners for select elements
            $('#Trip, #no_of_people, #transportation').change(function() {
                calculateTotalPrice();
            });

            // Initial calculation
            calculateTotalPrice();
        });
    </script>
</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <div class="background">
        <div class="booking-form">
            <h2>Travel Booking Form</h2>

            <form method="post">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>

                <label for="phone">Phone number:</label>
                <input type="text" name="phone" id="phone" required>

                <label for="Trip">Choose a Trip:</label>
                <select id="Trip" name="Trip" required>
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
                    $sql = "SELECT Trip_ID, Trip_Title, Price  FROM trip";
                    $result = $conn->query($sql);

                    // Display trip options in dropdown menu
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row['Trip_ID'] . "' data-price='" . $row['Price'] . "'>" . $row['Trip_Title'] . "</option>";
                        }
                    } else {
                        echo "<option value='' disabled>No trips available</option>";
                    }
                    ?>
                </select>

                <label for="no_of_people">Number of People:</label>
                <input type="number" name="no_of_people" id="no_of_people" required>

                <label for="pickUp">Pick up Location:</label>
                <input type="text" name="pickUp" id="pickUp" required>

                <label for="transportation">Transportation:</label>
                <select id="transportation" name="transportation">
                    <option value="car">Car</option>
                    <option value="bus">Bus</option>
                </select>

                <p id="total-price">Total Price: $0</p>

                <button type="submit">Book Now</button>
            </form>

        </div>
    </div>


    <?php include 'includes/footer.php'; ?>


    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        session_start(); // Start the session
        // Check if user is logged in
        if (isset($_SESSION['username'])) {
            // Retrieve form data
            $phone = $_POST["phone"];
            $tripId = $_POST["Trip"];
            $numberOfPeople = $_POST["no_of_people"];
            $pickUpLocation = $_POST["pickUp"];
            $transportation = $_POST["transportation"];
            $customerID = $_SESSION['Customer_ID'];

            $transport;
            if ($transportation === 'car') {
                $transport = false;
            } else if ($transportation === 'bus') {
                $transport = true;
            }

            // Prepare and execute SQL query to insert reservation into trip_reservation table
            $sqlInsert = "INSERT INTO trip_reservation (Trip_ID, Customer_ID, Phone_number, Number_of_people, Pickup_Location, Transport)
                    VALUES ('$tripId', '$customerID','$phone', '$numberOfPeople', '$pickUpLocation', '$transport')";

            if ($conn->query($sqlInsert) === TRUE) {
                echo "Booking Successful";
            } else {
                echo "Error: " . $sqlInsert . "<br>" . $conn->error;
            }
            // Close database connection
            $conn->close();
        } else {
            echo '<script>alert("Login first");</script>';
        }
    }
    ?>