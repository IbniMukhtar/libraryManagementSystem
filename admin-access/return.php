<?php
 require_once('database.php');
 $id= $_GET["id"];
 $a=date("d-m-Y");
 $res = mysqli_query($connection,"UPDATE issue_books_tbl SET book_return_date ='$a' where id=$id");
 $book_name='0';
 $result= mysqli_query($connection,"SELECT book_name FROM issue_books_tbl WHERE id = '$id' ");

 while($row=mysqli_fetch_assoc($result))
 {
   $book_name=$row['book_name'];
 }
 mysqli_query($connection,"UPDATE books_tbl SET available_books = available_books+1 WHERE book_name= '$book_name' ");
 ?>
<script type="text/javascript">
  window.location="viewissuedbooks.php";
  alert("book returned successfully");
</script>
