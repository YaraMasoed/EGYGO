<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Contact us</title>
    <link rel="stylesheet" href="includes/form.css">
    <link rel="stylesheet" href="includes/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="includes/form.js"></script>
</head>
</head>


<body>

    <!-- header -->
    <?php include 'includes/header.php'; ?>

    <br>
    <br>
    <br>
    <br>


    <div class="container-form">

        <!-- the outer box -->
        <div class="contact-box">

            <!-- the left box, the form itself -->
            <div id="contact-left">
                <h1>Contact Us</h1>
                <p>We would leave to hear from you.
                    <br> Contact Us by leaving a mesage and we will respond to you as soon as possible
                </p>
                <h3>Leave us a message</h3>
                <form name="contactForm" onsubmit="return(validateForm())" method="POST">
                    <div class="input-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" name="name" id="name" placeholder=" name">
                        </div>
                        <div class="input-group">
                            <label>Phone Number</label>
                            <input type="text" name="phone" id="phone" placeholder=" +2 010 23447855">
                        </div>
                    </div>

                    <div class="input-row">
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" placeholder=" user@gmail.com">
                        </div>
                        <div class="input-group">
                            <label>Message Title</label>
                            <input type="text" name="title" id="title" placeholder=" reservation cancellation inquiry">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea rows="5" name="message" id="message" placeholder="message description...."></textarea>
                    <button type="submit"> Send Message</button>
                </form>
            </div>
            <!-- the right box, contact details of EGYGO -->
            <div id="contact-right">
                <h3>How to find us</h3>

                <table>
                    <tr>
                        <td>Email <a href="https://outlook.office.com/mail/"><i class="fas fa-envelope"></i> </a> </td>
                        <td>contactServices@EGYGO.com</td>
                    </tr>

                    <tr>
                        <td>Phone <i class="fas fa-phone"></i></td>
                        <td>+2 010 567888003 </td>
                    </tr>

                    <tr>
                        <td>Address <a href="https://maps.app.goo.gl/GBFMiedmc5jzWiwH7"><i class="fas fa-map-marker-alt"></i></a></td>
                        <td> Third block, 28/20A, Zahraa El-Maadi, Cairo </td>
                    </tr>
                </table>

            </div>
        </div>

    </div>

    <?php include 'includes/footer.php'; ?>