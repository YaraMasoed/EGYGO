<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Accomodation</title>

    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="includes/accommodation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="includes/home.js"></script>

    <style>
        #range {
            font-weight: bold;
        }
    </style>

    <script>
        var details = {
            "New Royal Grand Hotel Cairo": 1129,
            "Cairo Marriott Hotel & Omar Khayyam Casino": 10337,
            "Four Seasons Hotel Cairo at The First Residence": 13789,
            "Kempinski Nile Hotel Garden City Cairos": 11116,
            "The St. Regis Almasa Hotel, Cairo": 8564,
            "Sofitel Cairo Nile El Gezirah": 11011
        };

        $(document).ready(function() {

            $("#slider").slider({
                max: 15000,
                range: true,
                values: [1000, 1500],
                change: function(event, ui) {
                    getDetails(ui.values[0], ui.values[1]);

                }
            });
            var current = $("#slider").slider("option", values);
            getDetails(current[0], current[1]);

        });

        function getDetails(minimum, maximum) {
            $("#range").text("EGP" + minimum + "-EGP" + maximum)
            var result = "<table><tr><th>Hotel name<th><th>Price (in EGP)</th></tr>";
            for (var item in details) {
                if (details[item] >= minimum && details[item] <= maximum) {
                    result += "<tr><td>" + item + "</td><td>" + details[item] + "</td></tr>";

                }
            }
            result += "</table>";
            $("#output").html(result);
        }
    </script>

</head>


<body>

    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <br>
    <br>
    <br>
    <br>
    <!--- -->>


    <section class="home" id="home">
        <div class="head_container">
            <div class="box">
                <div class="text">
                    <h1>Hello.Salut.Hola</h1>
                    <p>We are pleased to offer you a comprehensive range of comfortable and convenient accommodations to
                        choose from. Our list includes a variety of options such as single rooms, luxurious suites, and
                        other types of premium lodging to ensure your stay is as enjoyable as possible.</p>

                </div>
            </div>
            <div class="image">
                <img src="images/home1.jpg" class="slide">
            </div>
            <div class="image_item">
                <img src="images/home1.jpg" alt="" class="slide active" onclick="img('images/home1.jpg')">
                <img src="images/home2.jpg" alt="" class="slide" onclick="img('images/home2.jpg')">
                <img src="images/home3.jpg" alt="" class="slide" onclick="img('images/home3.jpg')">
                <img src="images/home4.jpg" alt="" class="slide" onclick="img('images/home4.jpg')">
            </div>
        </div>
    </section>
    <script>
        function img(anything) {
            document.querySelector('.slide').src = anything;
        }

        function change(change) {
            const line = document.querySelector('.image');
            line.style.background = change;
        }
    </script>

    <section class="priceRange">
        <div class="container">
            <b> Price Range: </b><span id="range"></span>
            <div id="slider"></div>
            <div id="output"></div>
        </div>
    </section>


    <section class="room top" id="room">
        <div class="container">
            <div class="heading_top flex1">
                <div class="heading">
                    <h5>RAISING COMFORT TO THE HIGHEST LEVEL</h5>
                    <h2>Rooms $ Suites</h2>
                </div>
            </div>

            <button onclick="myFunction()"> VIEW ALL</button>
            <div id="hotelLists">
                <div class="content grid">
                    <!--<div class="box">
                        <div class="img">
                            <img src="images/New Royal Grand Hotel Cairo.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>New Royal Grand Hotel Cairo</h3>
                            <p> <span>EGP</span>1129 <span>/per night</span> </p>

                            <a href="hotelBooking.php">
                                <button class="btn1">Go To Hotel</button>
                            </a>

                        </div>
                    </div>
                    <div class="box">
                        <div class="img">
                            <img src="images/Cairo Marriott Hotel & Omar Khayyam Casino.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Cairo Marriott Hotel & Omar Khayyam Casino </h3>
                            <p> <span>EGP</span>10,337<span>/per night</span> </p>
                            <a href="hotelBooking.php">
                                <button class="btn1">Go To Hotel</button>
                            </a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="img">
                            <img src="images/Four Seasons Hotel Cairo at The First Residence.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Four Seasons Hotel Cairo at The First Residence</h3>
                            <p> <span> EGP </span>13,789 <span>/per night</span> </p>

                            <a href="hotelBooking.php">
                                <button class="btn1">Go To Hotel</button>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="img">
                            <img src="images/Kempinski Nile Hotel Garden City Cairo.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3> Kempinski Nile Hotel Garden City Cairos</h3>
                            <p> <span>EGP</span>11,116 <span>/per night</span> </p>

                            <a href="hotelBooking.php">
                                <button class="btn1">Go To Hotel</button>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="img">
                            <img src="images/KNHGCC.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>The St. Regis Almasa Hotel, Cairo</h3>
                            <p> <span>EGP</span>8564 <span>/per night</span> </p>

                            <a href="hotelBooking.php">
                                <button class="btn1">Go To Hotel</button>
                            </a>
                        </div>
                    </div>

                    <div class="box">
                        <div class="img">
                            <img src="images/KNHGCC.jpg" alt="">
                        </div>
                        <div class="text">
                            <h3>Sofitel Cairo Nile El Gezirah</h3>
                            <p> <span>EGP</span>11,011 <span>/per night</span> </p>
                            <a href="hotelBooking.php">
                                <button class="btn1">Go To Hotel</button>
                            </a>
                        </div>
                    </div> -->

                    <?php
                    // Database connection details
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "egygo";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query to retrieve accommodations
                    $sql = "SELECT * FROM accommodation";
                    $result = $conn->query($sql);

                    // Check if there are rows in the result
                    if ($result->num_rows > 0) {
                        // Loop through each row of accommodations
                        while ($row = $result->fetch_assoc()) {
                            // Retrieve data for each accommodation
                            $name = $row['Hotel_name'];
                            $image = $row['image'];
                            $price = $row['Price'];

                            // Display each accommodation in HTML format
                            echo '<div class="box">';
                            echo '<div class="img">';
                            echo '<img src="images/' . $image . '" alt="">';
                            echo '</div>';
                            echo '<div class="text">';
                            echo '<h3>' . $name . '</h3>';
                            echo '<p> <span>EGP</span>' . $price . ' <span>/per night</span> </p>';
                            echo '<a href="hotelBooking.php">';
                            echo '<button class="btn1">Go To Hotel</button>';
                            echo '</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        // No accommodations found
                        echo "No accommodations found.";
                    }

                    // Close connection
                    $conn->close();
                    ?>





                </div>
            </div>
        </div>
    </section>


</body>

</html>

<!---footer-->
<?php include 'includes/footer.php'; ?>