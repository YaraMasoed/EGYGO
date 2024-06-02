<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="EGYGO" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet" />
    <title> Trips </title>
    <link rel="stylesheet" href="includes/Trips.css">
    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>


<body>
    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <br>
    <br>
    <br>
    <br>

    <div class="wrapper">

        <section id="blog">
            <div class="blog-heading " id="Food">
                <p class="subTitle">Best offers</p>
                <h1 class="title">Trips</h1>

            </div>


            <section class="section__container booking__container">
                <form action="/" class="booking__form">
                    <div class="input__group">
                        <span><i class="ri-calendar-2-fill"></i></span>
                        <div>
                            <label for="Departure Date">Departure Date</label>
                            <input type="text" placeholder="Departure Date" />
                        </div>
                    </div>
                    <div class="input__group">
                        <span><i class="ri-calendar-2-fill"></i></span>
                        <div>
                            <label for="Return Date">Return Date</label>
                            <input type="text" placeholder="Return Date" />
                        </div>
                    </div>
                    <div class="input__group">
                        <span><i class="ri-user-fill"></i></span>
                        <div>
                            <label for="Destination">Destination</label>
                            <input type="text" placeholder="Destination" />
                        </div>
                    </div>
                    <div class="input__group input__btn">
                        <button class="btn">Search</button>
                    </div>
                </form>
            </section>

            <section class="section__container trip__container">
                <p class="section__subheader">OUR AVAILABLE TRIPS</p>
                <h2 class="section__header">The Most Memorable Rest Time Starts Here.</h2>
                <div class="trip__grid">
                    <!-- <div class="trip__card">
                        <div class="trip__card__image">
                            <img src="images/Trip1.jpg" alt="trip" />
                            <div class="trip__card__icons">
                                <span><i class="ri-heart-fill"></i></span>
                                <span><i class="ri-paint-fill"></i></span>
                                <span><i class="ri-shield-star-line"></i></span>
                            </div>
                        </div>
                        <div class="trip__card__details">
                            <h4>Giza Pyramids Tour</h4>
                            <p>
                                Don't miss your chance to see Giza Pyramids. Guarantee your entry today. Hotel pickup
                                service, mobile
                                tickets and confirmation, and expert guides. Book Now!
                            </p>
                            <h5>Starting from <span>$299/person</span></h5>
                            <a href="BookTrip.php">
                                <button class="btn">Book Now</button>
                            </a>

                        </div>
                    </div> -->


                    <!-- <div class="trip__card">
                        <div class="trip__card__image">
                            <img src="images/Trip2.jpg" alt="trip" />
                            <div class="trip__card__icons">
                                <span><i class="ri-heart-fill"></i></span>
                                <span><i class="ri-paint-fill"></i></span>
                                <span><i class="ri-shield-star-line"></i></span>
                            </div>
                        </div>
                        <div class="trip__card__details">
                            <h4>Luxor Trip</h4>
                            <p>
                                These experiences are best for tours in Luxor: Small group Hurghada to Luxor, Valley of
                                the Kings by Van
                                · Hot Air Balloons Ride in Luxor
                            </p>
                            <h5>Starting from <span>$199/person</span></h5>
                            <a href="BookTrip.php">
                                <button class="btn">Book Now</button>
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="trip__card">
                        <div class="trip__card__image">
                            <img src="images/Trip3.jpg" alt="trip" />
                            <div class="trip__card__icons">
                                <span><i class="ri-heart-fill"></i></span>
                                <span><i class="ri-paint-fill"></i></span>
                                <span><i class="ri-shield-star-line"></i></span>
                            </div>
                        </div>
                        <div class="trip__card__details">
                            <h4>Aswan Trip</h4>
                            <p>
                                Start your ancient Egypt exploration in the beautiful city of Aswan. Your guide will
                                pick you up from
                                your Aswan hotel to escort you to Philae Temple.
                            </p>
                            <h5>Starting from <span>$249/person</span></h5>
                            <a href="BookTrip.php">
                                <button class="btn">Book Now</button>
                            </a>
                        </div>
                    </div> -->

                    <!-- <div class="trip__card">
                        <div class="trip__card__image">
                            <img src="images/Trip4.jpg" alt="trip" />
                            <div class="trip__card__icons">
                                <span><i class="ri-heart-fill"></i></span>
                                <span><i class="ri-paint-fill"></i></span>
                                <span><i class="ri-shield-star-line"></i></span>
                            </div>
                        </div>
                        <div class="trip__card__details">
                            <h4>Dahab Trip</h4>
                            <p>
                                This former Bedouin fishing village is now a popular tourist destination—especially for
                                serious
                                windsurfers, who'll find some of the best conditions.
                            </p>
                            <h5>Starting from <span>$399/person</span></h5>
                            <a href="BookTrip.php">
                                <button class="btn">Book Now</button>
                            </a>
                        </div>
                    </div> -->

                    <!-- <div class="trip__card">
                        <div class="trip__card__image">
                            <img src="images/Trip5.jpg" alt="trip" />
                            <div class="trip__card__icons">
                                <span><i class="ri-heart-fill"></i></span>
                                <span><i class="ri-paint-fill"></i></span>
                                <span><i class="ri-shield-star-line"></i></span>
                            </div>
                        </div>
                        <div class="trip__card__details">
                            <h4>hurghada Trip</h4>
                            <p>
                                These are the best places for adventurous tours in Hurghada: Sea Memories · Wonder
                                Travel Egypt · Dive
                                UK Hurghada·
                            </p>
                            <h5>Starting from <span>$599/person</span></h5>
                            <a href="BookTrip.php">
                                <button class="btn">Book Now</button>
                            </a>
                        </div>
                    </div> -->
                    <!-- 
                    <div class="trip__card">
                        <div class="trip__card__image">
                            <img src="images/Trip6.jpg" alt="trip" />
                            <div class="trip__card__icons">
                                <span><i class="ri-heart-fill"></i></span>
                                <span><i class="ri-paint-fill"></i></span>
                                <span><i class="ri-shield-star-line"></i></span>
                            </div>
                        </div>
                        <div class="trip__card__details">
                            <h4>Sharm El Sheikh</h4>
                            <p>
                                Swim with Dolphins; Star Gazing Safari tour By ATV Quad, Bedouin Dinner, telescope.
                            </p>
                            <h5>Starting from <span>$399/person</span></h5>
                            <a href="BookTrip.php">
                                <button class="btn">Book Now</button>
                            </a>
                        </div>
                    </div> -->


                    <?php

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
                    // Assuming you have a database connection established already

                    // Fetch trips from the database
                    $query = "SELECT * FROM trip";
                    $result = mysqli_query($conn, $query);

                    // Check if there are any trips
                    if (mysqli_num_rows($result) > 0) {
                        // Loop through each trip
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Extract trip information from the current row
                            $tripName = $row['Trip_Title'];
                            $tripDescription = $row['Trip_description'];
                            $tripImage = $row['Image'];
                            $tripPrice = $row['Price'];

                            // Output HTML for the trip card dynamically
                            echo ' <div class="trip__card"> <div class="trip__card__image"> <img src="images/' . $tripImage . '" alt="' . $tripName . '" />
                                        <div class="trip__card__icons">
                                            <span><i class="ri-heart-fill"></i></span>
                                            <span><i class="ri-paint-fill"></i></span>
                                            <span><i class="ri-shield-star-line"></i></span>
                                        </div>
                                    </div>
                                    <div class="trip__card__details">
                                        <h4>' . $tripName . '</h4>
                                        <p>' . $tripDescription . '</p>
                                        <h5>Starting from <span>$' . $tripPrice . '/person</span></h5>
                                        <a href="BookTrip.php">
                                            <button class="btn">Book Now</button>
                                        </a>
                                    </div>
                                </div>';
                        }
                    } else {
                        // If no trips found
                        echo "No trips available.";
                    }

                    // Close database connection
                    mysqli_close($conn);
                    ?>

                </div>
            </section>
        </section>

        <section class="section__container trip__container">
            <p class="section__subheader">OUR MOST POPULAR TRIP</p>
            <h2 class="section__header">Dont miss your chance to visit the trip of your life time</h2>
            <div id="countdown"></div>
            <div class="trip__card">
                <div class="trip__card__image">
                    <img src="images/luxor3.jpg" alt="trip" />
                    <div class="trip__card__icons">
                        <span><i class="ri-heart-fill"></i></span>
                        <span><i class="ri-paint-fill"></i></span>
                        <span><i class="ri-shield-star-line"></i></span>
                    </div>
                </div>
                <div class="trip__card__details">
                    <h4>Luxor Trip</h4>
                    <p>
                        Experience the awe-inspiring wonders of ancient Egypt on a Luxor trip, exploring magnificent
                        temples and tombs along the Nile River.
                        Immerse yourself in the rich history and culture of Luxor with a guided tour of the Valley of
                        the Kings, Karnak Temple, and Luxor Temple.
                    </p>
                    <h5>Starting from <span>$300/person</span></h5>
                    <a href="BookTrip.php">
                        <button class="btn">Book Now</button>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <section class="section__container trip__container">
        <p class="section__subheader">Feedback</p>
        <h2 class="section__header">Visited our trips before tell us what you think</h2>
        <p>We value your opinion! Let us know about your trip experience and how we can make it even better.</p>
        <br>
        <a href="Feedback.php">
            <button class="btn">Feedback</button>
        </a>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="contact_us.php">contact us</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="BookTrip.php">Book a trip</a></li>
                        <li><a href="accommodation.php">Hotel Rentals</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Other </h4>
                    <ul>
                        <li><a href="things_to_do.php">Things to do</a></li>
                        <li><a href="TravelStories.php">Travel Stories</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Follow Us</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </footer>

    
</body>

</html>
<script src="includes/trips.js"></script>