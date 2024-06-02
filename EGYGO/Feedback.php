<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>

    <!-- forms's css -->
    <link rel="stylesheet" href="includes/form.css">

    <!-- shares css -->
    <link rel="stylesheet" href="includes/styles.css">

    <!-- Font Awesome (used for icons)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <div class="container-form">
        <div class="contact-box">
            <div id="contact-full">
                <h1>Feedback Form</h1>
                <p>
                    We would love to hear from you.
                    Please share your feedback on the trip with us.
                </p>
                <h3>Leave us your feedback</h3>
                <form name="feedBack" onsubmit="return validateFormFeedback()" method="POST">
                    <div class="input-group">
                        <label>Name</label>
                        <input type="text" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="input-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <label for="tripDetails">Trip</label>
                        <select id="tripDetails" name="tripDetails">
                            <option value="" disabled selected>Select Trip Details</option>
                            <option value="GizaPyramidsTour">Giza Pyramids Tour</option>
                            <option value="LuxorTrip">Luxor Trip</option>
                            <option value="AswanTrip">Aswan Trip</option>
                            <option value="GizaPyramidsTour">Giza Pyramids Tour</option>
                            <option value="DahabTrip">Dahab Trip</option>
                            <option value="HurghadaTrip">Hurghada Trip</option>
                        </select>
                    </div>
                    <div class="input-group">
                        <label>Rating</label>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <p id="review">Rating</p>
                        </div>

                    </div>
                    <div class="input-group">
                        <label for="joinAgain">Would you join us again?</label>
                        <input type="radio" id="yesJoin" name="joinAgain" value="yes">
                        <label class="Label-radio" for="yesJoin">Yes</label>
                        <input type="radio" id="noJoin" name="joinAgain" value="no">
                        <label class="Label-radio" for="noJoin">No</label>
                    </div>
                    <div class="input-group">
                        <label>Your Feedback</label>
                        <textarea rows="5" name="message" id="message" placeholder="Your feedback description..."></textarea>
                    </div>
                    <button type="submit">Send Feedback</button>
                </form>
            </div>
        </div>
    </div>


    <script src="includes/form.js"></script>
    <?php include 'includes/footer.php'; ?>