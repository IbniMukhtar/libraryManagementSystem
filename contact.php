
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
  <link href="admin-access/img/favicon.png" rel="icon">
  <link href="admin-access/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
  <?php require_once('header.php')?>
  <section class="contact-page-area section-gap">
     <div class="container">
       <div class="row">
         <!-- <div class="map-wrap" style="width:100%; height:65px;" id="map"></div> -->
         <div class="col-lg-4 d-flex flex-column address-wrap">
           <div class="single-contact-address d-flex flex-row">
             <div class="icon">
               <span class="lnr lnr-home"></span>
             </div>
             <div class="contact-details">
               <h5>Srinagar, Kashmir</h5>
               <p>190001, Lal Chock</p>
             </div>
           </div>
           <div class="single-contact-address d-flex flex-row">
             <div class="icon">
               <span class="lnr lnr-phone-handset"></span>
             </div>
             <div class="contact-details">
               <h5>00 (880) 9865 562</h5>
               <p>Mon to Fri 9am to 6 pm</p>
             </div>
           </div>
           <div class="single-contact-address d-flex flex-row">
             <div class="icon">
               <span class="lnr lnr-envelope"></span>
             </div>
             <div class="contact-details">
               <h5>youmailmohsin@gmail.com</h5>
               <p>Send us your query anytime!</p>
             </div>
           </div>
         </div>
         <div class="col-lg-8">
           <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
             <div class="row">
               <div class="col-lg-6 form-group">
                 <input name="fname" placeholder="Enter your name"  class="common-input mb-20 form-control" required="" type="text">

                 <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                 class="common-input mb-20 form-control" required="" type="email">

                 <input name="subject" placeholder="Enter your subject" class="common-input mb-20 form-control" required="" type="text">
                 <div class="mt-20 alert-msg" style="text-align: left;"></div>
               </div>
               <div class="col-lg-6 form-group">
                 <textarea class="common-textarea form-control" name="message" placeholder="Messege"  required=""></textarea>
                 <button class="primary-btn mt-20 text-white" style="float: right;">Send Message</button>

               </div>
             </div>
           </form>
         </div>
       </div>
     </div>
   </section>
   <!-- End contact-page Area -->
   <?php require_once('footer.php')?>
</body>
</html>
<style media="screen">
.section-gap {
padding: 50px 0;
}
.container.fullwidth {
  width: 100%;
}

.container.no-padding {
  padding-left: 0;
  padding-right: 0;
}
.contact-page-area .form-area textarea {
    height: 180px;
    margin-top: 0px;
}
.primary-btn {
    background-color: #fab700;
    line-height: 42px;
    padding-left: 40px;
    padding-right: 40px;
    border: none;
    color: #f1f1f1;
    display: inline-block;
    font-weight: 500;
    position: relative;
    border: 1px solid transparent;
    cursor: pointer;
    text-transform: uppercase;
    position: relative;
}
</style>
