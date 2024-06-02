    <?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Retrieve form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Database connection
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "egygo";

        // Create connection
        $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

        // Check connection
        if (!($conn)) {
            die("Cannot connect to database");
        }

        // Prepare SQL query 
        $sql = "SELECT * FROM Customer WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        // Check if user exists
        if ($result->num_rows > 0) {

            $row = $result->fetch_assoc();
            $_SESSION['username'] =  $row['Username'];
            $_SESSION['gender'] = $row['Gender'];
            $_SESSION['Customer_ID'] =  $row['Customer_ID'];
            $_SESSION['Email'] =  $row['Email'];
            $_SESSION['Name'] =  $row['Name'];

            if (isset($_SESSION['username'])) {
                // Redirect to homepage upon successful login
                header("Location: home.php");
                exit();
            }
        } else {
            echo '<script>alert("Invalid username or password. Please try again.");</script>';
        }

        // Close connection
        $conn->close();
    }
    ?>
