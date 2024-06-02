<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!----LInk to sylesheet-->

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/addStory.css">
    <link rel="stylesheet" href="includes/form.css">

    <!-- Font Awesome (used for icons)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!----Link to scroll reveal-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <title>Add Story</title>

    <!--- link to remix icosn-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

    <script>
        function added() {

            if (document.addStory.caption.value == "") {
                alert("Please Enter caption!!");
                document.addStory.caption.focus();
                return false;
            }

            if (document.addStory.location.value == "") {
                alert("Please Enter location!!");
                document.addStory.location.focus();
                return false;
            }

        }
    </script>
</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <!-----create story------>
    <div class="container1">
        <header>Create new Story</header>
        <div class="wrapper">
            <div class="img-box">
                <i class="ri-image-add-fill"></i>
                <h3>Add image</h3>
                <p class="info">
                    Allowed image types are : [<strong> jpg, png ,gif</strong>] <br>
                    allowed max file size is : [<strong> 2MB </strong>] <br>
                </p>
                <form name="addStory" action="" method="POST" enctype="multipart/form-data" onsubmit=" return added()" >
    
                <input type="file" name="upload" id="upload">
                <div class="cancel-btn"><i class="ri-close-line"></i></div>
            </div>
            <div class="story-details">
                    <div class="post-profile">
                        <div class="post-img">
                            <img src="images/customer3.jpg">
                        </div>
                        <h3><?php echo $_SESSION['username']; ?></h3>
                    </div>
                    <div class="story-caption">
                        <label>Story Caption</label>
                        <textarea rows="5" name="caption" id="caption" placeholder="Tell us what do you think.."></textarea>
                    </div>
                    <div class="location">

                        <div class="location-icon">
                            <label>Add location</label>
                            <i class="ri-map-pin-add-line"></i>
                        </div>
                        <input type="text" name="location" id="location" placeholder=" example : City">
                    </div>
                    <div class="addStory-btn">
                    <button class="addstory" type="submit" name="addstory" id="addstory">Add Story</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <?php include 'includes/footer.php'; ?>

    <?php require "functions.php" ?>

<?php
$connection= mysqli_connect("localhost","root","");
$db= mysqli_select_db($connection,'egygo');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


session_start(); // Start the session
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Check if user is logged in
    if (isset($_SESSION['Customer_ID'])) {
        // Retrieve form data
        $customerID= $_SESSION['Customer_ID'];
    }

    
if (isset($_POST['addstory'])){

    $caption = $_POST['caption'];
    $location = $_POST['location'];
    $file = addslashes(file_get_contents($_FILES["upload"]["tmp_name"]));

    $response= image_validation($_FILES['upload']['name'],$_FILES['upload']['size'],$_FILES['upload']['tmp_name'],$_FILES['upload']['type']); 


    if ($response =="success") {
        // Image validation passed
        $query = "INSERT INTO travel_stories (usernameID, caption, location, image) VALUES ('$customerID', '$caption', '$location', '$file')";
        $query_run = mysqli_query($connection, $query);

    if ($query_run){
        echo '<script type ="text/javascript"> alert("Story posted successfully!") </script>';
    }

    else{
        echo '<script type ="text/javascript"> alert("Query failed: ' . mysqli_error($connection) . '") </script>';
    }

} else
       {
            // Image validation failed, handle accordingly

            echo '<script type="text/javascript">alert("Image validation failed : ' . $response . '")</script>';
        }

   }

}


?>