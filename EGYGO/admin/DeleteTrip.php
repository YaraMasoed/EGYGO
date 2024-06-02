<?php

if (isset($_GET['Trip_ID'])) {
  $tripID = $_GET['Trip_ID'];



  $servername = "localhost";
  $username_db = "root";
  $password_db = "";
  $dbname = "egygo";


  $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // Prepare and execute SQL query to delete trip
  $sqlDelete = "DELETE FROM trip WHERE Trip_ID= '$tripID'";

  if ($conn->query($sqlDelete) === TRUE) {
    echo "<p>Trip deleted successfully.</p>";
    header("Location: AdminTrip.php");
    exit();
  } else {
    echo "<p>Error deleting Trip: " . $conn->error . "</p>";
  }
}
