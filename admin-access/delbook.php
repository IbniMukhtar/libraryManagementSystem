<?php
require_once('database.php');
$id=$_GET['id'];
mysqli_query($connection, "DELETE FROM books_tbl WHERE id=$id");
 ?>
 
