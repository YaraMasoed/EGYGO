<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- homes's css -->
  <link rel="stylesheet" href="includes/home.css">

  <!-- shares css -->
  <link rel="stylesheet" href="includes/styles.css">

  <!-- Font Awesome (used for icons)-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Include jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <title>EgyGo</title>
</head>

<body>

  <!-- header -->
  <?php include 'includes/header.php'; ?>

  <!-- header -->
  <div class="Header">
    <div class="header-content">
      <p class="subTitle">Timeless Wonders Await</p>
      <h1>Explore Egypt</h1>
      <p>
        Discover the enchanting history and breathtaking landscapes of Egypt on our immersive tours.
        From the iconic pyramids to the vibrant streets of Cairo, let us guide you through this captivating land.
      </p>
      <div class="search-bar">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </div>

  <!-- body -->
  <div class="body-content">
    <div class="body">

      <!-- Services offered -->
      <div class="services-section">
        <div class="section-left">
          <div class="video-container">
            <video autoplay loop muted src="images/tour_video.MOV"></video>
          </div>
        </div>
        <div class="section-right">

          <p class="subTitle">Why choose us</p>
          <h1 class="title">Services Offered</h1>

          <a href="accommodation.php">
            <div class="service">
              <i id="icon" class="fas fa-home icon" style="font-size: 45px"></i>
              <div class="service-text">
                <h1>Hotel Retal</h1>
                <p>Book your stay at our luxurious hotels. We offer a variety of accommodations to suit your needs,
                  whether
                  you're traveling for business or leisure.</p>
              </div>
            </div>
          </a>

          <a href="TravelStories.php">
            <div class="service">
              <i id="icon" class="fas fa-blog"></i>
              <div class="service-text">
                <h1>Travel Stories</h1>
                <p>
                  Read our insightful blog posts covering travel tips, destination guides, and more.
                </p>
              </div>
            </div>
          </a>

          <a href="Trips.php">
            <div class="service">
              <i id="icon" class="fas fa-map-marked-alt"></i>
              <div class="service-text">
                <h1>Trips</h1>
                <p>
                  Embark on unforgettable trips with us.
                  Choose from our programs and have the trip of your life time.
                </p>
              </div>
            </div>
          </a>

          <a href="things_to_do.php">
            <div class="service">
              <i id="icon" class="fa fa-binoculars" aria-hidden="true"></i>
              <div class="service-text">
                <h1>Things to Do</h1>
                <p>
                  Discover exciting activities at your destination. From sightseeing to
                  adventure, we have something for everyone.
                </p>
              </div>
            </div>
          </a>

        </div>
      </div>
    </div>

    <!--activities-->
    <div class="activities">
      <div id="left" class="col">
        <p class="subTitle">Activities</p>
        <h1 class="title">Things To Do</h1>
        <p class="text">
          In Egypt, you can explore ancient wonders like the pyramids and temples,
          dive into the vibrant marine life of the Red Sea, wander through bustling markets for local treasures,
          and unwind on a leisurely Nile cruise.
          This captivating destination offers a diverse range of activities to suit every traveler's interests.
        </p>

        <a id="btn" href="things_to_do.php">Explore more</a>

      </div>

      <div id="right" class="col">

        <a href="things_to_do.php">
          <div class="card card1">
            <h5>Food</h5>
          </div>
        </a>

        <a href="things_to_do.php">
          <div class="card card2">
            <h5>Arts</h5>
          </div>
        </a>

        <a href="things_to_do.php">
          <div class="card card3">
            <h5>Culture</h5>
          </div>
        </a>

        <a href="things_to_do.php">
          <div class="card card4">
            <h5>Hiking</h5>
          </div>
        </a>

      </div>

    </div>

    <div class="body">
      <!--Trips-->
      <div class="title-section-white">
        <p class="subTitle">Best offers</p>
        <h1 class="title">Trips</h1>
      </div>
      <div class="tour-container">
        <div class="tour-card">
          <img src="images/tour2.jpg">
          <div class="tour-card-content">
            <h2>
              Sharm El Sheikh
            </h2>
            <p>
              Swim with Dolphins; embark on a Star Gazing Safari tour by ATV Quad,
              followed by a Bedouin Dinner under the stars, and telescope observation of the night sky.
              <br><br> Starting from $399/person
            </p>
            <a href="BookTrip.php" id="btn">
              Book Now
            </a>
          </div>
        </div>
        <div class="tour-card">
          <img src="images/tour1.jpg">
          <div class="tour-card-content">
            <h2>
              Giza Pyramids Tour
            </h2>
            <p>
              Don't miss your chance to see Giza Pyramids.
              Guarantee your entry today. Hotel pickup service, mobile tickets and confirmation, and expert guides. Book
              Now!
              <br><br> Starting from $299/person
            </p>
            <a href="BookTrip.php" id="btn">
              Book Now
            </a>
          </div>
        </div>
        <div class="tour-card">
          <img src="images/tour3.jpg">
          <div class="tour-card-content">
            <h2>
              Baron Empain Palace
            </h2>
            <p>
              Experience the mystique of Egypt's Baron Empain Palace with our exclusive trip!
              Book now for a captivating journey throught this architectural gem.
              <br><br> Starting from $80/person
            </p>
            <a href="BookTrip.php" id="btn">
              Book Now
            </a>
          </div>
        </div>
        <a id="btn" href="Trips.php">Explore more</a>
      </div>

      <!-- blog -->
      <div class="title-section">
        <p class="subTitle">Our travel memories</p>
        <h1 class="title">Blogs</h1>
      </div>
      <div class="blog-container">
        <div class="blog-card">
          <img src="images/tour5.jpg" class="blog-card-img">
          <div class="blog-card-content">
            <h2>My Journey Through Egypt: Exploring Pyramids and Temples</h2>
            <p>
              Join me on an unforgettable adventure through Egypt's ancient wonders.
              From standing in awe before the Great Pyramids to wandering through the mystical temples of Luxor,
              every moment was a discovery of history and beauty.
            </p>
            <p>June 6, 2022</p>
            <p><i class="fas fa-heart" style="color: red;"></i>100</p>
            <div class="blog-profile">
              <img src="images/customer1.jpg" alt="Profile Image">
              <span>Anna Brown</span>
            </div>
          </div>
        </div>

        <div class="blog-card">
          <img src="images/tour4.jpg" class="blog-card-img">
          <div class="blog-card-content">
            <h2>Sailing the Nile: A Journey Through Egypt's Timeless Treasures</h2>
            <p>
              Sharing my unforgettable Nile River cruise experience in Egypt. From exploring ancient temples to watching
              the sunset over the river,
              this journey was a dream come true, filled with history and enchantment.
            </p>
            <p>April 9, 2023</p>
            <p><i class="fas fa-heart" style="color: red;"></i>100 </p>
            <div class="blog-profile">
              <img src="images/customer3.jpg" alt="Profile Image">
              <span>Lilian Cornstarch</span>
            </div>
          </div>
        </div>

        <a id="btn" href="TravelStories.php">Read More</a>
      </div>



      <!-- Customer review -->
      <div class="hero">
        <p class="subTitle">Testemony</p>
        <h1 class="title">Customer Reviews</h1>
        <div class="review-box">
          <div id="slide">
            <div class="slider-card">
              <div class="profile">
                <img src="images/customer1.jpg">
                <div>
                  <h3>Anna Brown</h3>
                  <span>&#11088;&#11088;&#11088;&#11088;</span>
                </div>
              </div>
              <p>
                I'm gonna say my honest opinion here, I have never tried trave agency websites before but when
                my
                friends recomendded me this website , I fell in LOVE! they were very organized in their
                programs,
                the trips were afordable, and the staff was very helpful when I almost lost one of my luggages
                but that wasn't really their fault.
              </p>
            </div>
            <div class="slider-card">
              <div class="profile">
                <img src="images/customer2.jpg">
                <div>
                  <h3>Mert Guzman</h3>
                  <span>&#11088;&#11088;&#11088;&#11088;&#11088;</span>
                </div>
              </div>
              <p>
                I wanted to surprise my fiancee for our fifth month anniversary, and I though of taking her to
                somewhere
                special and authentic like Egypt.
                So I found this website and booked for us this really cool trip to the pyramids! They were so
                huge! We took
                lots of great photos
                and we rode camels but the best thing that the staff was very professional with us throughout
                the trip.
              </p>
            </div>
            <div class="slider-card">
              <div class="profile">
                <img src="images/customer3.jpg">
                <div>
                  <h3>Lilian Cornstarch</h3>
                  <span>&#11088;&#11088;&#11088;&#11088;</span>
                </div>
              </div>
              <p>
                when I was a kid my grandpa used to tell me stories abut Egypt and it's civilizations so I
                wanted to check
                this place myself.
                So I took my kids, packed my bags and got ready for a fun trip that I have never seen before.
                I went to this website EgyGo and I found a page called 'Travel Blogs' and oh my god their blogs
                were really
                interesting!
              </p>
            </div>
            <div class="slider-card">
              <div class="profile">
                <img src="images/customer4.jpg">
                <div>
                  <h3>Bong-il Park</h3>
                  <span>&#11088;&#11088;&#11088;</span>
                </div>
              </div>
              <p>
                I basically wanted to have a holiday for myself, so I thought of 'why not go to Egypt?' and I
                found this
                website and it says
                that it offers car rentals, and since I didn't have a car I rented one to pick me up... but they
                were very
                late
                and when I asked they told me 'for technichal issues'.. I was so frustrated.. like really?? but
                to be fair
                the trip itself indeed was very nice.
              </p>
            </div>
          </div>


          <div class="sidebar">
            <img src="images/up-arrow.png" id="upArrow">
            <img src="images/down-arrow.png" id="downArrow">
          </div>


        </div>
      </div>
    </div>


    <!--scrip--->
    <script src="includes/home.js"></script>

    <?php include 'includes/footer.php'; ?>