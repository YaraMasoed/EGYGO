<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Trips</title>
    <link rel="stylesheet" href="../includes/form.css">
    <link rel="stylesheet" href="../includes/Admin.css">
    <script src="../includes/form.js"></script>
</head>

<body>

    <?php include '../includes/headerAdmin.php'; ?>

    <?php
    include('connect.php');

    $Trip_ID = $_GET['Trip_ID'];
    $sql = "SELECT * FROM trip WHERE Trip_ID = $Trip_ID ";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    $Trip_advisor = $row['Trip_advisor'];
    $Trip_Title = $row['Trip_Title'];
    $Meeting_Point = $row['Meeting_Point'];
    $Trip_Date = $row['Trip_Date'];
    $Meeting_Time = $row['Meeting_Time'];
    $Price = $row['Price'];
    $description = $row['Trip_description'];

    if (($_SERVER["REQUEST_METHOD"] == "POST")) {
        $Trip_advisor = $_POST['newTripAdvisor'];
        $Trip_Title = $_POST['newActivities'];
        $Meeting_Point = $_POST['newMeetingPoint'];
        $Trip_Date = $_POST['newDate'];
        $Meeting_Time = $_POST['newTime'];
        $Price = $_POST["newPrice"];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];

        $sql = "UPDATE `trip` SET `Trip_ID` = '$Trip_ID', `Trip_advisor` = '$Trip_advisor', `Trip_Title` = '$Trip_Title',
                `Meeting_Point` = '$Meeting_Point', `Trip_Date` = '$Trip_Date', `Meeting_Time` = '$Meeting_Time', `Price` = '$Price' 
                , `Trip_description` = '$description', `Image` = '$image'     
                WHERE `Trip_ID` = '$Trip_ID' ";


        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Data Updated');</script>";
        } else {
            die(mysqli_error($con));
        }
    }

    ?>

    <div class="container-form">

        <!-- the outer box -->
        <div class="contact-box">

            <div id="contact-left">
                <h1>Edit Trip Details</h1>

                <form name="TripForm" onsubmit="return(validateTripForm())" method="POST" enctype="multipart/form-data">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Trip Advisor</label>
                            <input type="text" name="newTripAdvisor" id="newTripAdvisor" placeholder="new trip advisor name" value="<?php echo $Trip_advisor; ?>">
                        </div>
                        <div class="input-group">
                            <label>Price in EGP</label>
                            <input type="text" name="newPrice" id="newPrice" placeholder="new trip price" value="<?php echo $Price; ?>">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Meeting Point</label>
                            <input type="text" name="newMeetingPoint" id="newMeetingPoint" placeholder="new meeting point" value="<?php echo $Meeting_Point; ?>">
                        </div>
                        <div class="input-group">
                            <label>Activities</label>
                            <input type="text" name="newActivities" id="newActivities" placeholder=" new activities" value="<?php echo $Trip_Title; ?>">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Date</label>
                            <input type="date" name="newDate" id="newDate" placeholder="new trip date" value="<?php echo $Trip_Date; ?>">
                        </div>
                        <div class="input-group">
                            <label>Time</label>
                            <input type="time" name="newTime" id="newTime" placeholder="new trip time" value="<?php echo $Meeting_Time; ?>">
                        </div>
                    </div>

                    <div class="input-group">
                        <label for="image">Select Image:</label>
                        <input type="file" id="image" name="image" accept="image/*">
                    </div>

                    <div class="input-group">
                        <label>Trip description</label>
                        <textarea id="description" name="description" rows="4" cols="50" placeholder="Enter description here..."><?php echo $description; ?></textarea>
                    </div>

                    <button type="submit"> Apply changes</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>