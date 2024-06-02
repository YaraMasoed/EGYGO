<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="includes/styles.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="includes/signin_up_style.css">
    <title>Sign in / Sign up Form</title>
    <script src="includes/js_signin_up.js"></script>
</head>

<body>

    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <br>
    <br>
    <br>
    <br>
    <!-- sign up -->
    <form name="signupform" method="POST" class="sign-in-form" id="form">
        <h2 class="title">Sign up</h2>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Name" id="name" name="name" />
            <div class="error"></div>
        </div>
        <div class="input-field">
            <i class="fas fa-venus-mars"></i>
            <select id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            <div class="error"></div>
        </div>
        <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" id="Username" name="username" />
            <div class="error"></div>
        </div>
        <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" id="email" name="email" />
            <div class="error"></div>
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" id="password" name="password" />
            <div class="error"></div>
        </div>
        <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" id="ConfirmPass" name="ConfirmPass" />
            <div class="error"></div>
        </div>
        <input type="submit" class="btn" value="Sign up" name="signup" />
    </form>


    <?php include 'includes/footer.php';

    if (isset($_POST['signup'])) {
        // Retrieve form data
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Database connection
        $servername = "localhost";
        $username_db = "root";
        $password_db = "";
        $dbname = "egygo";

        // Create connection
        $conn = mysqli_connect($servername, $username_db, $password_db, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if username already exists
        $checkUsernameQuery = "SELECT * FROM Customer WHERE username = '$username'";
        $result = mysqli_query($conn, $checkUsernameQuery);


        if (mysqli_num_rows($result) > 0) {
            echo '<script>alert("Username already exists. Please choose a different username.");</script>';
        } else {
            // Insert new user data into database
            $insertQuery = "INSERT INTO Customer (Username, Password, Name, Gender, Email) VALUES ('$username',  '$password', '$name', '$gender',  '$email')";

            if (mysqli_query($conn, $insertQuery)) {
                echo '<script>alert("Account created successfully. You can now login.");</script>';
            } else {
                echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
            }
        }

        // Close connection
        mysqli_close($conn);
    }
