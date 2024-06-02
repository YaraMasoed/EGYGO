<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Complaints</title>
    <link rel="stylesheet" href="../includes/Admin.css">
    <link rel="stylesheet" href="../includes/addStory.css">


</head>

<body>

    <?php include '../includes/headerAdmin.php'; ?>
    <div class="table-content">
        <h1>View Complaints</h1>

        <table class="trip-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>phone Number</th>
                    <th>Email</th>
                    <th>Message Title</th>
                    <th>Message</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Anna</td>
                    <td>+021345677</td>
                    <td>AnnaB@gmail.com</td>
                    <td>Complaint</td>
                    <td>i'd like to complain that this website said that they would pick me up,
                        but i didn't know exactly where was the pickup</td>
                    <td>
                        <button class="btn edit" id="btn-reply">reply</button>

                    </td>
                </tr>
                <tr>
                    <td>Marques B</td>
                    <td>+972367438</td>
                    <td>MarquesB@gmail.com</td>
                    <td>Luggage lost</td>
                    <td>i'd like to complain that this website said that they would pick me up,
                        but i didn't know exactly where was the pickup</td>

                    <td>
                        <button class="btn edit" id="btn-reply">reply</button>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="reply">
        <label>Reply to complain</label>
        <textarea rows="5" name="reply" id="replyarea" placeholder="insert reply..." required></textarea>
        <button class="btn edit" id="send-reply">Send reply</button>
    </div>

    <script>
        var replybtn = document.querySelectorAll('#btn-reply');
        var replydiv = document.getElementsByClassName('reply')[0];
        var sendbtn = document.querySelectorAll('#send-reply');
        var textarea1 = document.getElementById("replyarea");


        function reply() {

            replydiv.style.display = 'block';
        }

        replybtn.forEach(button => {
            button.addEventListener('click', reply);
        });

        sendbtn.forEach(button => {
            button.addEventListener('click', sendreply);
        });

        function sendreply() {
            if (textarea1.value.trim() === "") {
                alert("Please enter text!");
                return false;
            }

            replydiv.style.display = 'none';
            alert("Reply sent successfully!");
            return true;
        }
    </script>

</body>

</html>