 <?php
 session_start();
 unset($_SESSION['Ename']);
 unset($_SESSION['EUname']);
 unset($_SESSION['Eemail']);
 unset($_SESSION['Epass']);
 unset($_SESSION['Ecpass']);
 unset($_SESSION['Eexist']);
 unset($_SESSION['Entered']);
 unset($_SESSION['NEntered']);
 if($_SERVER["REQUEST_METHOD"]=="POST"){
		require_once("validation/dbconnect.php");
		require_once("validation/adminValidate.php");
		$adm = new valAdmin();
		$adm->setName($_POST['name_txt']);
    $adm->setUname($_POST['Uname_txt']);
    $adm->setEmail($_POST['email_txt']);
		$adm->setPassword($_POST['password_txt']);
    $adm->confirmPassword($_POST['cpassword_txt']);

		if(!$adm->error){
			$connection=Database::connect();
			$adm->enterAdmin($connection,$_POST['name_txt'],$_POST['Uname_txt'],$_POST['email_txt'],$_POST['password_txt']);
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
   <!-- **********************************************************************************************************************************************************
     MAIN CONTENT
  *********************************************************************************************************************************************************** -->
  <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height" id="me1">
        <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Dashboard</h3>
        <div class="row mt">
          <div class="col-lg-8 col-md-offset-2">
            <button class="btn btn-danger" disabled style="width:100%;">ADD A NEW ADMIN</button>
             <div class="form-panel">
		       <form class="form-horizontal style-form" method="post" action="" id="myform">
		        <div class="form-group">
                  <div class="col-sm-10">
                   	<input type="text" class="form-control" placeholder="Enter Admin Name" name="name_txt">
                    <span style="margin:0px" class="text-danger">
		                   <?php
		                    if(isset($_SESSION['Ename']))
		                       echo $_SESSION['Ename'];
                           unset($_SESSION['Ename']);
			                 ?>
		                 </span>
                   </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10">
                	<input type="text" class="form-control" placeholder="Enter Admin UserName" name="Uname_txt">
                  <span style="margin:0px" class="text-danger">
                     <?php
                      if(isset($_SESSION['EUname']))
                         echo $_SESSION['EUname'];
                         // unset($_SESSION['EUname']);
                      else if(isset($_SESSION['Eexist']))
                      echo $_SESSION['Eexist'];
                     ?>
                   </span>
               </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10">
                 	<input type="email" class="form-control" placeholder="Enter Admin Email" name="email_txt">
                  <span style="margin:0px" class="text-danger">
                     <?php
                      if(isset($_SESSION['Eemail']))
                         echo $_SESSION['Eemail'];
                         // unset($_SESSION['Eemail']);
                     ?>
                   </span>
                </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10">
                 	<input type="Password" class="form-control" placeholder="Enter Admin Password" name="password_txt">
                  <span style="margin:0px" class="text-danger">
                     <?php
                      if(isset($_SESSION['Epass']))
                         echo $_SESSION['Epass'];
                         unset($_SESSION['Epass']);
                     ?>
                   </span>
                </div>
            </div>
            <div class="form-group">
               <div class="col-sm-10">
                 	<input type="Password" class="form-control" placeholder="Confirm Admin Password" name="cpassword_txt">
                  <span style="margin:0px" class="text-danger">
                     <?php
                      if(isset($_SESSION['Ecpass'])){
                         echo $_SESSION['Ecpass'];
                         unset($_SESSION['Ecpass']);
                       }
                      else if(isset($_SESSION['Emptypass'])){
                        echo $_SESSION['Emptypass'];
                        unset($_SESSION['Emptypass']);
                      }
                     ?>
                   </span>
                </div>
            </div>
              <button class="btn btn-success rounded" style="width:40%;margin-left:125px;" id="signup">Provide Authority</button>
			   </form>
            <div class="col-sm-10" id="errorDiv">
              <span style="margin:0px">
                <?php
                 if(isset($_SESSION['Entered'])){
                    echo $_SESSION['Entered'];
                    // unset($_SESSION['Entered']);
                  }
                 else if(isset($_SESSION['NEntered'])){
                   echo $_SESSION['NEntered'];
                   // unset($_SESSION['NEntered']);
                 }
                ?>
              </span>
            </div>
             </div>
            </div>
          </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->

    <!--main content end-->

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
