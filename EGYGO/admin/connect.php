 <?php

   $con = new mysqli('localhost', 'root', '', 'egygo');

   if ($con) {
      echo 'Connected Successfully';
   } else {
      die(mysqli_error(($con)));
   }

   ?>
