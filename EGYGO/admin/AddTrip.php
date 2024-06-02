<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Trips</title>
    <link rel="stylesheet" href="../includes/form.css">
    <link rel="stylesheet" href="../includes/Admin.css">


    <script>
        function validateTripForm() {

            if (document.TripForm.newTripAdvisor.value == "") {
                alert("Please Enter the Trip Advisor Name");
                document.TripForm.newTripAdvisor.focus();
                return false;
            }

            if (document.TripForm.newPrice.value == "") {
                alert("Please Enter Trip Price");
                document.TripForm.newPrice.focus();
                return false;
            }

            if (document.TripForm.newMeetingPoint.value == "") {
                alert("Please Enter the Meeting Point");
                document.TripForm.newMeetingPoint.focus();
                return false;
            }

            if (document.TripForm.newActivities.value == "") {
                alert("Please Enter the Activities Names");
                document.contactForm.newActivities.focus();
                return false;
            }


            if (document.TripForm.newDate.value == "") {
                alert("Please Enter the trip Date");
                document.TripForm.newDate.focus();
                return false;
            }

            if (document.TripForm.newTime.value == "") {
                alert("Please Enter the trip time");
                document.contactForm.newTime.focus();
                return false;
            }

            var todayDate = new Date();
            var newDate = new Date(document.TripForm.newDate.value);

            if (newDate < todayDate) {
                alert("You can not enter a date in the past");
                return false;
            }

            if (isNaN(document.TripForm.newPrice.value)) {
                alert("Invalid Price entered");
                return false;
            }

            var tripAdvisorName = document.getElementById('newTripAdvisor').value;

            if (!validateTextEntry(tripAdvisorName)) {
                alert("You cannot enter characters other than letters for trip advisor name");
                return false;
            }


            alert("Trip Details Update Successfully");
            return true;
        }
    </script>
</head>

<body>

    <?php include '../includes/headerAdmin.php'; ?>


    <div class="container-form">

        <!-- the outer box -->
        <div class="contact-box">

            <div id="contact-left">
                <h1>Add Trip Details</h1>


                <form name="TripForm" method="POST" action="AddTrip.php" onsubmit="return validateTripForm()" enctype="multipart/form-data">

                    <div class="input-row">
                        <div class="input-group">
                            <label>Trip Advisor</label>
                            <input type="text" name="newTripAdvisor" id="newTripAdvisor" placeholder="new trip advisor name">
                        </div>
                        <div class="input-group">
                            <label>Price in EGP</label>
                            <input type="text" name="newPrice" id="newPrice" placeholder="new trip price">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Meeting Point</label>
                            <input type="text" name="newMeetingPoint" id="newMeetingPoint" placeholder="new meeting point">
                        </div>
                        <div class="input-group">
                            <label>Trip Title</label>
                            <input type="text" name="newActivities" id="newActivities" placeholder=" new activities">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Date</label>
                            <input type="date" name="newDate" id="newDate" placeholder="new trip date">
                        </div>
                        <div class="input-group">
                            <label>Time</label>
                            <input type="time" name="newTime" id="newTime" placeholder="new trip time">
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="image">Select Image:</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>

                    <div class="input-group">
                        <label>Trip description</label>
                        <textarea id="description" name="description" rows="4" cols="50" placeholder="Enter description here..."></textarea>
                    </div>

                    <button type="submit"> Add </button>
                </form>
            </div>



</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["newTripAdvisor"]) || empty($_POST["newPrice"]) || empty($_POST["newMeetingPoint"]) || empty($_POST["newActivities"]) || empty($_POST["newDate"]) || empty($_POST["newTime"])) {
        echo "All fields are required.";
    } else {
        // Get form data
        $tripAdvisor = $_POST["newTripAdvisor"];
        $price = $_POST["newPrice"];
        $meetingPoint = $_POST["newMeetingPoint"];
        $activities = $_POST["newActivities"];
        $date = $_POST["newDate"];
        $time = $_POST['newTime'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];


        if ($price < 0) {
            echo "Price cannot be negative.";
        } else if (!preg_match("/^[a-zA-Z]+$/", $tripAdvisor)) {
            echo "Trip Advisor should only contain text values (no numbers allowed).";
        } else {

            // Database connection details
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "EgyGo";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Prepare SQL statement
            $sqlInsert = "INSERT INTO trip (Trip_advisor, Trip_Title, Meeting_Point, Trip_Date, Meeting_Time, Price, adminID, 	Trip_description, Image)
                  VALUES ('$tripAdvisor', '$activities', '$meetingPoint', '$date', '$time', '$price', '1', '$description', '$image')";

            // Execute SQL statement
            if ($conn->query($sqlInsert) === TRUE) {
                echo "<script>alert('Trip Added Successfully')</script>";
            } else {
                echo "Error: " . $sqlInsert . "<br>" . $conn->error;
            }

            // Close connection
            $conn->close();
        }
    }
}
?>