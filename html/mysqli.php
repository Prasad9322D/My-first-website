<html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
      <?php
         $host = "localhost";
         $user = "root";
         $pass = "";
         $conn = mysqli_connect($host, $user, $pass)?>;
         
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error($conn));
         }
         echo "Connected successfully";
         mysqli_close($conn);
      ?>
   </body>
</html>