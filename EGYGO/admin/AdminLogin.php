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

    <header class="header">
        <div class="logo">
            <img src="../Images/logo.png">
            <h1>EgyGo</h1>
        </div>
    </header>


    <div class="container-form">

        <!-- the outer box -->
        <div class="contact-box">

            <div id="contact-left">
                <h1>Admin Login</h1>


                <form name="AdminLogin" method="POST" action="AdminLogin.php">

                    <div class="input-row">
                        <div class="input-group">
                            <label>Admin User</label>
                            <input type="text" name="adminUsername" id="adminUsername" placeholder="admin user">

                        </div>
                        <div class="input-group">
                            <label>Password</label>
                            <input type="password" name="adminPassword" id="adminPassword" placeholder="password">
                        </div>
                    </div>




                    <button type="submit"> Login </button>
                </form>
            </div>



</body>

</html>

<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $admin_username = $_POST['adminUsername'];
    $admin_password = $_POST['adminPassword'];


    $servername = "localhost";
    $username_db = "root";
    $password_db = "";
    $dbname = "egygo";


    $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);


    if (!($conn)) {
        die("Cannot connect to database");
    }


    $sql = "SELECT * FROM admin WHERE admin_username = '$admin_username' AND admin_password = '$admin_password'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $_SESSION['admin_username'] =  $row['admin_username'];
        $_SESSION['admin_password'] =  $row['admin_password'];

        if (isset($_SESSION['admin_username'])) {

            header("Location: AdminHome.php");
            exit();
        }
    } else {
        echo '<script>alert("Invalid username or password. Please try again.");</script>';
    }

    // Close connection
    $conn->close();
}
?>