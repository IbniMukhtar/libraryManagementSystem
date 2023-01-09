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
     <section id="main-content" class="team-area section-gap team-page-teams">
       <section class="wrapper ">
         <!-- <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i></h3> -->


             <!-- Start team Area -->


                 <div class="row d-flex justify-content-center">
                   <div class="menu-content pb-70 col-lg-8">
                     <div class="title text-center">
                       <h1 class="mb-10">Project Team Members</h1>
                       <p>"None of us as smart as all of us." Working Together is Success.</p>
                     </div>
                   </div>
                 </div>
                 <div class="row justify-content-center d-flex align-items-center">
                   <div class="col-md-3 single-team">
                       <div class="thumb">
                           <img class="img-fluid" src="img/friends/sir.jpg" alt="">
                           <div class="align-items-center justify-content-center d-flex">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                       </div>
                       <div class="meta-text mt-30 text-center">
                         <h4>Prof. Ajaz</h4>
                         <p>Mentor & Project Manager</p>
                       </div>
                   </div>
                   <div class="col-md-3 single-team">
                       <div class="thumb">
                           <img class="img-fluid" src="img/friends/me.jpg" alt="">
                           <div class="align-items-center justify-content-center d-flex">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                       </div>
                       <div class="meta-text mt-30 text-center">
                         <h4>Mohsin Mukhtar</h4>
                         <p> Core Develope (Project)</p>
                       </div>
                   </div>
                   <div class="col-md-3 single-team">
                       <div class="thumb">
                           <img class="img-fluid" src="img/friends/t3.jpg" alt="">
                           <div class="align-items-center justify-content-center d-flex">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                       </div>
                       <div class="meta-text mt-30 text-center">
                         <h4>Shaikh Mujeeb</h4>
                         <p> Creative Art Director</p>
                       </div>
                   </div>
                   <div class="col-md-3 single-team">
                       <div class="thumb">
                           <img class="img-fluid" src="img/friends/t2.jpg" alt="">
                           <div class="align-items-center justify-content-center d-flex">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-linkedin"></i></a>
                           </div>
                       </div>
                       <div class="meta-text mt-30 text-center">
                         <h4>Molvi Aadil</h4>
                         <p>Creative Content Developer</p>
                       </div>
                   </div>
                 </div>
             <!-- End team Area -->
      </section>
    </section>
   <?php require_once('footer.html')?>
  </section>
</body>
</html>
<style media="screen">
.team-area .single-team {
  margin-bottom: 10px;
}

.team-area .thumb {
  position: relative;
}

.team-area .thumb div {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(250, 183, 0, 0.8);
  color: #fff;
  opacity: 0;
  transition: opacity 0.5s;
}

.team-area .thumb div i {
  color: #fff;
  font-size: 20px;
  padding: 10px;
  z-index: 9999;
}

.team-area .thumb img {
  display: block;
  width: 100%;
}

.team-area .thumb div span {
  display: block;
  position: absolute;
  bottom: 30px;
  left: 20px;
  text-transform: uppercase;
  font-size: 18px;
  font-weight: 600;
  letter-spacing: 3px;
}

.team-area .thumb div p {
  display: block;
  position: absolute;
  bottom: 10px;
  left: 20px;
  font-weight: 100;
}

@media (max-width: 768px) {
  .team-area .thumb div p {
    bottom: -15px;
  }
}

.team-area .thumb:hover div {
  cursor: pointer;
  opacity: 1;
}
a:focus, a:hover {
   text-decoration: none;
   outline: 0;
</style>
