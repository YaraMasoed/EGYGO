<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view Feedback</title>
    <link rel="stylesheet" href="../includes/Admin.css">
</head>

<body>

    <?php include '../includes/headerAdmin.php'; ?>

    <div class="table-content">
        <h1>Feedbacks</h1>

        <table class="Feedback-list">
            <thead>
                <tr>
                    <th>Customer Name</th>
                    <th>Feedback</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Fiona Hawthorne</td>
                    <td>“The rooms were clean, very comfortable, and the staff was amazing. They went over and beyond to
                        help make our stay enjoyable. I highly recommend this hotel for anyone visiting downtown.”</td>

                    <td>
                        <a href="#"> <button class="btn edit">Reply</button></a>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>Lila Bennett</td>
                    <td>“They were extremely accommodating and allowed us to check in early at like 10am. We got to the
                        hotel super early, and I didn’t want to wait. The service was exceptional as well. Would
                        definitely send a friend there.” </td>
                    <td>
                        <a href="#"> <button class="btn edit">Reply</button></a>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>Lila Bennett</td>
                    <td>I had a wonderful experience. Every staff member I encountered, from the valet to the check-in
                        to the cleaning staff, were delightful and eager to help! Thank you! Will recommend to my
                        colleagues!”</td>

                    <td>
                        <a href="#"> <button class="btn edit">Reply</button></a>
                        <button class="btn delete">Delete</button>
                    </td>
                </tr>


            </tbody>
        </table>
    </div>




</body>

</html>