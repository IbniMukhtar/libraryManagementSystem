<?php
if(!isset($_SESSION)){
  session_start();
}
 unset($_SESSION['Ebname']);
 unset($_SESSION['EAuther']);
 unset($_SESSION['EPublisher']);
 unset($_SESSION['Eisbn']);
 unset($_SESSION['Ebcopies']);
 unset($_SESSION['Eabcopies']);
 unset($_SESSION['Ephoto']);
 unset($_SESSION['Eprice']);
 unset($_SESSION['Eexist']);
 unset($_SESSION['Entered']);
 unset($_SESSION['NEntered']);
 if($_SERVER["REQUEST_METHOD"]=="POST"){
   require_once("validation/dbconnect.php");
   require_once("validation/bookValidate.php");
   $adm = new valbook();
   $adm->setName($_POST['bname_txt']);
   $adm->setAuther($_POST['bAuther_txt']);
   $adm->setPublisher($_POST['bpublisher_txt']);
   $adm->setISBN($_POST['isbn_txt']);
   $adm->setBookCount($_POST['bcopies_txt']);
   $adm->setABookCount($_POST['abcopies_txt']);
   $adm->setPhoto($_POST['bimg_txt']);
   $adm->setPrice($_POST['bprice_txt']);
   if(!$adm->error){
     $connection=Database::connect();
     $adm->addBook($connection,$_POST['bname_txt'],$_POST['bAuther_txt'],$_POST['bpublisher_txt'],
                      $_POST['isbn_txt'],$_POST['bcopies_txt'],$_POST['abcopies_txt'],$_POST['bimg_txt'],$_POST['bprice_txt']);
   }
 }
 // session_destroy();
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
                   MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper" style="margin-top:2px;">
        <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Dashboard</h3>
        <div class="row mt" style="margin-top:0px;">
          <div class="col-lg-8 col-md-offset-2">
            <button class="btn btn-danger" disabled style="width:100%;">ADD A NEW BOOK TO LIBRARY</button>
             <div class="form-panel">
               <div class="col-sm-10" id="errorDiv">
                 <span style="margin:0px">
                   <?php if(isset($_SESSION['Entered'])) { echo $_SESSION['Entered'];}
                    else if(isset($_SESSION['NEntered'])) { echo $_SESSION['NEntered'];} ?>
               </div>
		       <form class="form-horizontal style-form" method="post">
		        <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Enter Book Name" name="bname_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['Ebname'])) echo $_SESSION['Ebname'];unset($_SESSION['Ebname']); ?>
                     </span>
                   </div>
                 </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Book Auther" name="bAuther_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['EAuther'])) echo $_SESSION['EAuther']; unset($_SESSION['EAuther']); ?>
                     </span>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Book Publisher" name="bpublisher_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['EPublisher'])) echo $_SESSION['EPublisher']; unset($_SESSION['EPublisher']); ?>
                     </span>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Enter Unique ISBN No." name="isbn_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['Eisbn'])) echo $_SESSION['Eisbn'];
                             else if(isset($_SESSION['Eexist']))
                                    echo $_SESSION['Eexist'];
                              unset($_SESSION['Eisbn']); ?>
                     </span>
                   </div>
                </div>
                <!-- <div class="btn-group">
                    <button type="button" class="btn btn-theme04 dropdown-toggle" data-toggle="dropdown" style="margin-bottom:20px;width:200px;" >
                       Status<span class="caret"></span>
                    </button>
                     <ul class="dropdown-menu" role="menu" style="border-style:groove;">
                       <li><span style="color:blue;"><b>Available</b></span></li>
                       <li class="divider"></li>
                      <li><span style="color:red;"><b>Not Available</b></span></li>
                    </ul>
                 </div> -->
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Total Number Of Copies" name="bcopies_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['Ebcopies'])) echo $_SESSION['Ebcopies']; unset($_SESSION['Ebcopies']); ?>
                     </span>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Available Number Of Copies" name="abcopies_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['Eabcopies'])) echo $_SESSION['Eabcopies']; unset($_SESSION['Eabcopies']); ?>
                     </span>
                   </div>
                </div>
                <!-- <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Enter Call Number">
                   </div>
                </div> -->
                <div class="form-group">
                  <div class="col-sm-10">
                      <input type="file" class="form-control"accept="image/*"style="color:blue;" name="bimg_txt">&nbsp;&nbsp;
                      <label for="files">Upload A Photo</label>&nbsp;&nbsp;&nbsp;&nbsp;
                      <span style="margin:0px" class="text-danger">
                         <?php if(isset($_SESSION['Ephoto'])) echo $_SESSION['Ephoto']; unset($_SESSION['Ephoto']); ?>
                       </span>
                   </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Enter book price" name="bprice_txt">
                    <span style="margin:0px" class="text-danger">
                       <?php if(isset($_SESSION['Eprice'])) echo $_SESSION['Eprice']; unset($_SESSION['Eprice']); ?>
                     </span>
                   </div>
                </div>
                <button class="btn btn-success rounded" style="width:40%;margin-left:125px;">ADD BOOK</button>
			   </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

   <?php require_once('footer.html')?>
</section>
</body>
</html>
<style>
  #errorDiv{
    font-size:24px;
    background-color: #ffebeb;
    margin-top:20px;
    color:red;
    width: 101%;
    word-spacing:14px;
    /* height: 60px; */
    /* padding: inherit; */
    font-weight:bolder;
  }
</style>
