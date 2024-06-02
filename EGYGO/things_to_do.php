<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Things To Do</title>

    <link rel="stylesheet" href="includes/ThingsToDo.css">
    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</head>



<body>

    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <br>
    <br>
    <br>
    <br>

    <div class="wrapper">
        <!-- new code -->
        <!-- //things to do heading and sections -->
        <section id="blog">
            <div class="blog-heading " id="Food">
                <p class="subTitle">Activities</p>
                <h1 class="title">Things To Do</h1>

                <div class="icons-container">

                    <img src="images/food1.png" alt="food icon" onclick="scrollToSection('Food')">
                    <img src="images/arts1.png" alt="arts icon" onclick="scrollToSection('Arts')">
                    <img src="images/pyramids1.png" alt="pyramids icon" onclick="scrollToSection('Culture')">
                    <img src="images/hiking1.png" alt="hiking icon" onclick="scrollToSection('Hiking')">
                </div>

                <h3>Food</h3>
            </div>


            <!-- blog container -->
            <div class="blog-container">


                <!-- first blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.tripadvisor.com/Restaurant_Review-g294202-d2731187-Reviews-Kebdet_El_Prince-Giza_Giza_Governorate.html">
                        <div class="blog-img">
                            <img src="images/kebda3.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Try Kebdet El Prince</span>
                            <p class="blog-title">Try out mouth-watering Kebdet El Prince food, known for its
                                delicousness and
                                unique flavour.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- second blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.zoobaeats.com/menu/egypt-menu/">
                        <div class="blog-img">
                            <img src="images/zooba-food.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Try Zooba Breakfast</span>
                            <p class="blog-title">Try out mouth-watering Egyptian Zooba Breakfast, known for its
                                delicousness and
                                unique flavour.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- third blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.tripadvisor.com/Restaurant_Review-g294201-d1508799-Reviews-Koshary_Abou_Tarek-Cairo_Cairo_Governorate.html">
                        <div class="blog-img">
                            <img src="images/koshary3.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Try Abo Tarek Koshari</span>
                            <p class="blog-title">Try out mouth-watering Abu Tarek Koshari, known for its delicousness
                                and
                                unique flavour.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </section>


        <!-- arts section -->
        <!-- //things to do heading and sections -->
        <section id="blog">
            <div class="blog-heading" id="Arts">

                <h3>Arts</h3>
            </div>

            <!-- blog container -->
            <div class="blog-container">

                <!-- first blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.tripadvisor.com/Attraction_Review-g295398-d3721059-Reviews-The_Fine_Arts_Museum-Alexandria_Alexandria_Governorate.html">
                        <div class="blog-img">
                            <img src="images/AlexFineArtsMuseum.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit the Fine Arts Museum</span>
                            <p class="blog-title"> Visit the fine arts museum,
                                cultural institution dedicated to preserving Egypt's artistic heritage.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- second blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://egymonuments.gov.eg/monuments/bayt-al-suhaymi-house-of-suhaymi/">
                        <div class="blog-img">
                            <img src="images/suhaymi.jpeg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Bayt Al Suhaymi</span>
                            <p class="blog-title">Visit Bayt Al Suhaymi, explore 17th century islamic art and
                                architecture.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- third blog box -->
                <div class="blog-box">
                    <a href="https://www.cairoopera.org/">
                        <!-- image -->
                        <div class="blog-img">
                            <img src="images/CairoOperaHouse.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Cairo Opera House</span>
                            <p class="blog-title">Enjoy world-class performances ranging from opera and
                                ballet to classical music concerts.
                            </p>
                        </div>
                </div>
                </a>
            </div>
        </section>



        <!-- culture section -->
        <!-- //things to do heading and sections -->
        <section id="blog">
            <div class="blog-heading" id="Culture">

                <h3>Culture and History</h3>
            </div>

            <!-- blog container -->
            <div class="blog-container">

                <!-- first blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="http://www.coptic-cairo.com/museum/museum.html">
                        <div class="blog-img">
                            <img src="images/copticmuseum.jpg">

                        </div>

                        <div class="blog-text">
                            <span>Visit Coptic Museum</span>
                            <p class="blog-title"> A fascinating glimpse into
                                Egypt's rich Christian heritage, housing a remarkable collection of artifacts.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- second blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.presidency.eg/en/%D8%A7%D9%84%D9%82%D8%B5%D9%88%D8%B1-%D8%A7%D9%84%D8%B1%D8%A6%D8%A7%D8%B3%D9%8A%D8%A9/%D9%82%D8%B5%D8%B1-%D8%B9%D8%A7%D8%A8%D8%AF%D9%8A%D9%86/">
                        <div class="blog-img">
                            <img src="images/abdeenpalace.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Abdeen Palace</span>
                            <p class="blog-title"> A captivating journey,
                                allowing you to explore interiors of this historic royal residence.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- third blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.tripadvisor.com/Attraction_Review-g730107-d1150459-Reviews-Imhotep_Museum-Saqqara_Giza_Governorate.html">
                        <div class="blog-img">
                            <img src="images/imhotep1.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Imhotep Museum</span>
                            <p class="blog-title"> An opportunity to delve
                                into the life of Imhotep, one of ancient Egypt's most revered figures.
                            </p>
                        </div>
                    </a>
                </div>

            </div>
        </section>




        <!-- Hiking section -->
        <!-- //things to do heading and sections -->
        <section id="blog">
            <div class="blog-heading" id="Hiking">

                <h3>Hiking</h3>
            </div>

            <!-- blog container -->
            <div class="blog-container">

                <!-- first blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.weseektravel.com/climbing-mount-sinai-in-egypt/">
                        <div class="blog-img">
                            <img src="images/mountsinai2.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Mount Sinai</span>
                            <p class="blog-title">
                                Hiking in Mount Sinai offers an enriching experience for its Religious Significance.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- second blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://www.tripadvisor.com/Attractions-g303857-Activities-c61-t219-Siwa_Matrouh_Governorate.html">
                        <div class="blog-img">
                            <img src="images/siwa.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Siwa</span>
                            <p class="blog-title">Hiking in Siwa Oasis offers a unique and enriching experience due to
                                its
                                stunning desert landscapes.
                            </p>
                        </div>
                    </a>
                </div>


                <!-- third blog box -->
                <div class="blog-box">
                    <!-- image -->
                    <a href="https://holidaytours.one/package/wadi-el-gemal-hike-hamata-trail/">
                        <div class="blog-img">
                            <img src="images/wadielgemal.jpg">
                        </div>

                        <div class="blog-text">
                            <span>Visit Wadi El Gemal</span>
                            <p class="blog-title"> Experience Wadi El Gemal's diverse natural landscapes, abundant
                                wildlife and cultural wildlife.
                            </p>
                        </div>
                    </a>
                </div>

            </div>

        </section>


        <div class="gallery" class="blog-heading">

            <h3>Places to Explore</h3>

            <ul class="gallery-controls">
                <li class="gallery-buttons active" data-filter="all">all</li>
                <li class="gallery-buttons" data-filter="Gouna">Gouna</li>
                <li class="gallery-buttons" data-filter="Dahab">Dahab</li>
                <li class="gallery-buttons" data-filter="Aswan">Aswan</li>
                <li class="gallery-buttons" data-filter="Luxor">Luxor</li>
                <li class="gallery-buttons" data-filter="Fayoum">Fayoum</li>
            </ul>

            <div class="gallery-image-container">
                <a href="images/elgouna2.jpg" class="gallery-image Gouna">
                    <img src="images/elgouna2.jpg">
                </a>


                <a href="images/elgouna3.jpg" class="gallery-image Gouna">
                    <img src="images/elgouna3.jpg">
                </a>


                <a href="images/elgouna5.jpg" class="gallery-image Gouna">
                    <img src="images/elgouna5.jpg">
                </a>


                <a href="images/dahab1.jpg" class="gallery-image Dahab">
                    <img src="images/dahab1.jpg">
                </a>

                <a href="images/dahab7.jpg" class="gallery-image Dahab">
                    <img src="images/dahab7.jpg">
                </a>


                <a href="images/luxor1.jpg" class="gallery-image Luxor ">
                    <img src="images/luxor1.jpg">
                </a>
                <a href="images/luxor2.jpg" class="gallery-image Luxor ">
                    <img src="images/luxor2.jpg">
                </a>

                <a href="images/luxor3.jpg" class="gallery-image Luxor ">
                    <img src="images/luxor3.jpg">
                </a>


                <a href="images/aswan1.jpg" class="gallery-image Aswan ">
                    <img src="images/aswan1.jpg">
                </a>

                <a href="images/aswan2.jpg" class="gallery-image Aswan ">
                    <img src="images/aswan2.jpg">
                </a>

                <a href="images/fayoum1.jpg " class="gallery-image Fayoum ">
                    <img src="images/fayoum1.jpg">
                </a>
                <a href="images/fayoum3.jpg" class="gallery-image Fayoum ">
                    <img src="images/fayoum3.jpg">
                </a>
            </div>

        </div>


        <button id="scrollToTop" onclick="scrollUp()">

            <i class="fa fa-arrow-up"></i>
        </button>

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


    <script src="includes/things_to_do.js"></script>
    <script src="includes/home.js"></script>
    <?php include 'includes/footer.php'; ?>