<header>
    <div class="navbar">
        <img src="images/logo.png" class="logo">
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="Trips.php">Trip</a></li>
                <li><a href="things_to_do.php">Things to do</a></li>
                <li><a href="TravelStories.php">Travel Stories</a></li>
                <li><a href="accommodation.php">Hotel Rental</a></li>
                <li><a href="contact_us.php">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Login and Sign Up Section -->
        <div class="auth-btn">
            <?php
            session_start(); // Start the session

            // Check if user is logged in
            if (isset($_SESSION['username'])) {
                $color = '';

                // Determine color based on gender
                if ($_SESSION['gender'] == 'F') {
                    $color = '#ff00ea';
                } else if ($_SESSION['gender'] == 'M') {
                    $color = 'blue';
                }

                echo '<a href="Account.php"><i class="fas fa-user" style="color: ' . $color . ';"></i> <span class="auth-text">' . htmlspecialchars($_SESSION['username']) . '</span></a>';
            } else {
                // User is not logged in, display default "Login" link
                echo '<a href="LoginPage.php"><i class="fas fa-user"></i><span class="auth-text">Login</span></a>';
            }
            ?>
        </div>
    </div>
</header>