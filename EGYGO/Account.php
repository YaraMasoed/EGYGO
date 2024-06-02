<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- shares css -->
  <link rel="stylesheet" href="includes/styles.css">

  <!-- table's css -->
  <link rel="stylesheet" href="includes/account.css">

  <!-- Font Awesome (used for icons)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Include jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>EgyGo</title>
</head>

<body>

  <!-- header -->
  <?php include 'includes/header.php'; ?>


  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <?php

  // Check if the user is logged in
  if (isset($_SESSION['Customer_ID'])) {
    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "egygo";

    // Create connection
    $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }


    //check if clicked trip reservation delete
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
      $tripReservationId = $_POST['Reservation_ID'];

      $sqlDelete = "DELETE FROM trip_reservation WHERE Reservation_ID = '$tripReservationId'";

      if ($conn->query($sqlDelete) === TRUE) {
        echo "<script>alert('Reservation deleted successfully')</script>";
      } else {
        echo "<p>Error deleting reservation: " . $conn->error . "</p>";
      }
    }

    //check if clicked hotel reservation delete
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteH'])) {
      $HotelReservationId = $_POST['AB_ID'];

      $sqlDelete = "DELETE FROM acommodation_booking WHERE AB_ID = '$HotelReservationId'";

      if ($conn->query($sqlDelete) === TRUE) {
        echo "<script>alert('Reservation deleted successfully')</script>";
      } else {
        echo "<p>Error deleting reservation: " . $conn->error . "</p>";
      }
    }


    //------------Delete travel stories-------//

    //check if clicked post deleted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deletep'])) {
      $postID = $_POST['postID'];

      $sqlDelete2 = "DELETE FROM travel_stories WHERE postID = '$postID'";

      if ($conn->query($sqlDelete2) === TRUE) {
        echo "<script>alert('post deleted successfully')</script>";
      } else {
          echo "<p> Error deleting post: " . $conn->error . "</p>";
      }
    }


    $customerId = $_SESSION['Customer_ID'];

  


    //SQL query to fetch trip reservations with trip details
    $sql = "SELECT * FROM trip_reservation tr, trip t WHERE t.trip_ID=tr.trip_ID and Customer_ID = '$customerId'";
    $result = $conn->query($sql);

    // Display trip reservations in a table
    if ($result->num_rows > 0) {
      echo '<div class="table-content">';
      echo "<h1>Your Trip Reservations:</h1>";
      echo '<table class="trip-table">';
      echo "<thead><tr><th>Trip Title</th><th>Trip Date</th><th>Number of People</th><th>Pick up location</th><th>Delete</th></tr></thead>";
      echo "<tbody>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Trip_Title'] . "</td>";
        echo "<td>" . $row['Trip_Date'] . "</td>";
        echo "<td>" . $row['Number_of_people'] . "</td>";
        echo "<td>" . $row['Pickup_Location'] . "</td>";
        echo '<td> <form method="post">';
        echo '<input type="hidden" name="Reservation_ID" value="' . $row['Reservation_ID'] . '">';
        echo '<button type="submit" name="delete" class="btn delete">Delete</button>';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
      echo '</div>';
    } else {
      echo "<p>No trip reservations found.</p>";
    }

    //SQL query to fetch hotel reservations with hotel details
    $sql = "SELECT * FROM acommodation_booking ab, accommodation a WHERE a.Accommodation_ID=ab.Accommodation_ID and Customer_ID = '$customerId'";
    $result = $conn->query($sql);

    // Display trip reservations in a table
    if ($result->num_rows > 0) {
      echo '<div class="table-content">';
      echo "<h1>Your Hotel Reservations:</h1>";
      echo '<table class="trip-table">';
      echo "<thead><tr><th>Hotel Name</th><th>Check in Date</th><th>Check out Date<</th><th>Phone_number</th><th>Special Requests</th><th>Delete</th></tr></thead>";
      echo "<tbody>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Hotel_name'] . "</td>";
        echo "<td>" . $row['Check_in_date'] . "</td>";
        echo "<td>" . $row['Check_out_date'] . "</td>";
        echo "<td>" . $row['Phone_number'] . "</td>";
        echo "<td>" . $row['SpecialRequests'] . "</td>";
        echo '<td> <form method="post">';
        echo '<input type="hidden" name="AB_ID" value="' . $row['AB_ID'] . '">';
        echo '<button type="submit" name="deleteH" class="btn delete">Delete</button>';
        echo '</form>';
        echo '</td>';
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
      echo '</div>';
    } else {
      echo "<p>No hotel reservations found.</p>";
    }

     //------------------------------Display Travel stories posts--------------------------


    //SQL query to fetch travel stories 
    $sql = "SELECT * FROM travel_stories WHERE  usernameID = '$customerId'";
    $result = $conn->query($sql);

    // Display user posts in a table
    if ($result->num_rows > 0) {
      echo '<div class="table-content">';
        echo "<h1>Your Travel stories :</h1>";
        echo '<table class="trip-table">';
        echo "<thead><tr><th>Post ID </th><th> username ID</th><th>Caption</th><th>location</th><th>Delete</th></tr></thead>";
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['postID'] . "</td>";
            echo "<td>" . $row['usernameID'] . "</td>";
            echo "<td>" . $row['caption'] . "</td>";
            echo "<td>" . $row['location'] . "</td>";
           

            echo '<td> <form method="post">';
            echo '<input type="hidden" name="postID" value="' . $row['postID'] . '">';
            echo '<button type="submit" name="deletep" class="btn delete">Delete</button>';            
            echo '</form>';
            echo '</td>';
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo '</div>';
    } else {
        echo "<p>No posts have been posted.</p>";
    }




    // Display logout button
    echo "<form method='post'>";
    echo "<button class='dashboard-buttons' type='submit' name='logout'>Log Out</button>";
    echo "</form>";

    // Check if logout button was clicked
    if (isset($_POST['logout'])) {
      // Close database connection if it exists
      if (isset($conn)) {
        $conn->close();
      }

      // Unset all session variables
      session_unset();

      // Destroy the session
      session_destroy();

      //redireext to home page
      echo '<script>window.location.href = "home.php";</script>';
      exit();
    }
  }

  ?>

  <br>
  <br>
  <br>

  <?php include 'includes/footer.php'; ?>