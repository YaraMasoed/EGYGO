<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Trips</title>
    <link rel="stylesheet" href="../includes/Admin.css">
</head>

<body>

    <?php include '../includes/headerAdmin.php'; ?>

    <div class="table-content">
        <h1>Trip Management</h1>

        <?php
        // Database connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "EgyGo";
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch trips info
        $sql = "SELECT Trip_ID, Trip_advisor, Trip_Title, Meeting_Point, Trip_Date, Meeting_Time, Price FROM trip";
        $result = $conn->query($sql);

        // Output data of each row
        if ($result->num_rows > 0) {
            echo "<table class='trip-table'>";
            echo "<thead><tr> <th>Trip ID</th><th>Trip Title</th><th>Trip Advisor</th><th>Meeting Point</th><th>Trip Date</th><th>Meeting Time</th><th>Price</th>  <th>Actions</th> <th></th> </tr></thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["Trip_ID"] . "</td>";
                echo "<td>" . $row["Trip_Title"] . "</td>";
                echo "<td>" . $row["Trip_advisor"] . "</td>";
                echo "<td>" . $row["Meeting_Point"] . "</td>";
                echo "<td>" . $row["Trip_Date"] . "</td>";
                echo "<td>" . $row["Meeting_Time"] . "</td>";
                echo "<td>" . $row["Price"] . "</td>";
                echo "<td><a href='EditTrip.php?Trip_ID=" . $row["Trip_ID"] . "'><button class='btn edit'>Edit</button></a>";
                echo "<td><a href= 'DeleteTrip.php?Trip_ID=" . $row["Trip_ID"] . "'  style='text-decoration: none;'> <button class='btn delete'> Delete </a> </button></td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "0 results";
        }

        // Close database connection
        $conn->close();
        ?>

        <a href="AddTrip.php"><button class="btn add">Add</button></a>
    </div>

</body>

</html>