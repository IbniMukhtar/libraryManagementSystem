<?php
    $connection = mysqli_connect('localhost','root','','librarydb');
    if(!$connection)
     die('failed to connect');
    else {
      echo "connected successfully";
    }
?>
