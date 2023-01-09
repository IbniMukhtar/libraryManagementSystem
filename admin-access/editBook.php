<?php
require_once('database.php');
if(!isset($_GET['id'])){
  header("location:404.php");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $bookname  =$_POST["bname_txt"];
  $auther    =$_POST["bAuther_txt"];
  $publisher =$_POST["bpublisher_txt"];
  $isbn      =$_POST["isbn_txt"];
  $copies    =$_POST["bcopies_txt"];
  $avl_copies=$_POST["avl_bcopies_txt"];
  $price     =$_POST["bprice_txt"];
  $id        =$_POST["id_txt"];
  $result= mysqli_query($connection, "UPDATE books_tbl SET book_name='$bookname' , auther='$auther' , publisher='$publisher' ,
    ISBN_no='$isbn' , book_copies='$copies' , available_books='$avl_copies' , book_price='$price' WHERE id= $id");
  header("location:viewbooks.php?message=10");
}
else{
$id=$_GET['id'];
$res=mysqli_query($connection,"SELECT * FROM books_tbl WHERE Id=$id");
$row=mysqli_fetch_assoc($res);
// echo var_dump($row);
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">
   <?php require_once('header.php')?>
   <!--main content start-->
     <section id="main-content">
       <section class="wrapper site-min-height">
         <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Update a Book</h3>
         <div class="row mt">
           <div class="col-lg-6 col-md-offset-3">
             <button class="btn btn-danger" disabled style="width:100%;">Update Selected Book</button>
             <div class="form-panel">
             <form class="form-horizontal style-form" method="post">
               <input type="hidden" name="id_txt" value="<?php echo $row["id"]; ?>">
              <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Book Name" name="bname_txt" value="<?php echo $row["book_name"] ?>">
                     </div>
               </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Book Auther" name="bAuther_txt" value="<?php echo $row["auther"] ?>">
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Book Publisher" name="bpublisher_txt" value="<?php echo $row["publisher"] ?>">
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter Unique ISBN No." name="isbn_txt" value="<?php echo $row["ISBN_no"] ?>">
                     </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Total Number Of Copies" name="bcopies_txt" value="<?php echo $row["book_copies"] ?>">
                     </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Available Number Of Copies" name="avl_bcopies_txt" value="<?php echo $row["available_books"] ?>">
                     </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Enter book price" name="bprice_txt" value="<?php echo $row["book_price"] ?>">
                     </div>
                  </div>
                  <button class="btn btn-success rounded" style="width:40%;margin-left:125px;" type="submit">Update BOOK</button>
           </form>
         </div>
           </div>
         </div>
      </section>
    </section>
   <?php require_once('footer.html')?>
  </section>
</body>
</html>
