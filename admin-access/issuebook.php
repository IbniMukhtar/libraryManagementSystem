
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

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
   <?php
        session_start();
        require_once('header.php');
         require_once('database.php');
   ?>
   <!--main content start-->
     <section id="main-content">
       <section class="wrapper site-min-height">
         <form  action="" method="POST" style="margin-top:20px;" class="form-group has-feedback">
           <input type="text" name="t1" value=""
           style="float: right;border-radius:25px;border:2px  gray;padding:10px;color:black;height:35px;" placeholder="&nbsp;&nbsp;&nbsp;Search...">
           <button class="btn btn-success" type="submit" name="submit1" style="float: right;"><i class="fa fa-search"></i></button>
         </form>
         <h3 style="margin-top:28px;"><i class="fa fa-angle-right"></i>Dashboard</h3>
         <div class="row mt">
           <div class="col-lg-6 col-md-offset-3">
               <button class="btn btn-danger" disabled style="width:100%;">Issue a book</button>
             <div class="form-panel">
               <!-- *************************************************************************************** -->
               <form class="" action="" method="post" name="form1">
                 <table>
                   <th>
                     <td>
                       <h4 type="button" style="color:red;" class="" disabled>SELECT ROLL NO BELOW AND SEARCH</h4>
                     </td>
                   </th>
                   <tr>
                     <td>
                        <select class="form-control" name="rollno">
                            <?php
                               $res=mysqli_query($connection,"select rollno from student_tbl");
                               while($row=mysqli_fetch_array($res))
                               {
                                 echo "<option>";
                                 echo $row["rollno"];
                                 echo "</option>";
                               }
                             ?>
                        </select>
                     </td>
                     <td>
                       <div class="input-group">
                         <span class="input-group-addon" id="search-query"><span class="glyphicon glyphicon-search"></span></span>
                         <input type="submit" name="submit1" value="search..." class="form-control" aria-describedby="search-query" >
                       </div>
                     </td>
                   </tr>
                 </table>
          </form>

               <!-- ************************************************************************** -->
               <?php
                    if(isset($_POST["submit1"]))
                    {
                    $res5=mysqli_query($connection,"select * from student_tbl where rollno='$_POST[rollno]'");
                       while($row5=mysqli_fetch_array($res5))
                       {
                         $rollno=$row5["rollno"];
                         $name=$row5["name"];
                         $mobile=$row5["mobile"];
                         $email=$row5["email"];
                         $username=$row5["username"];
                         $dept=$row5["dept"];
                         $_SESSION["rollno"]=$rollno;
                       }
                     ?>
                     <form class="" action="" method="post" name="form2">
                     <table class="table table-bordered">
                       <tr>
                         <td>
                             <input type="text" name="rollno" value="<?php echo  $rollno; ?>" class="form-control" placeholder="rollno" disabled>
                         </td>
                       </tr>
                       <tr>
                         <td>
                             <input type="text" name="studentname" value="<?php echo $name; ?>" class="form-control" placeholder="studentname" required>
                         </td>
                       </tr>
                       <tr>
                         <td>
                             <input type="text" name="studentcontact" value="<?php echo $mobile; ?>" class="form-control" placeholder="studentcontact" required>
                         </td>
                       </tr>
                       <tr>
                         <td>
                             <input type="text" name="studentemail" value="<?php echo $email; ?>" class="form-control" placeholder="studentemail" required>
                         </td>
                       </tr>
                       <tr>
                         <td>
                             <input type="text" name="studentusernmae" value="<?php echo $username; ?>" class="form-control" placeholder="studentusernmae" required>

                         </td>
                       </tr>
                       <tr>
                         <td>
                           <select class="form-control" name="bookname">
                               <?php
                                  $res=mysqli_query($connection,"select book_name from books_tbl");
                                  while($row=mysqli_fetch_array($res))
                                  {
                                    echo "<option>";
                                    echo $row["book_name"];
                                    $book_name=$row["book_name"];
                                    echo "</option>";
                                  }
                                ?>
                         </td>
                       </tr>
                       <tr>
                         <td>
                             <input type="text" name="issuedate" value="<?php echo date("d-M-Y"); ?>" class="form-control" placeholder="issuedate" required>
                         </td>
                       </tr>
                       <tr>
                         <!-- <td>
                             <input type="text" name="returndate" value="" class="form-control" placeholder="returndate">
                         </td> -->
                       </tr>
                       <tr>
                         <td>
                             <input type="submit"  value="Issue Book" class="form-control btn btn-success" name="submit2">
                         </td>
                       </tr>
                     </table>
                     <?php
                    }
                ?>
              </form>
              <!-- <div class="" class="form-control">
                  <img src="img/issue.png" alt="img" style="width:96%;margin-top:15px;">
              </div> -->
              <?php
                   if(isset($_POST["submit2"]))
                    {
                      $qty=0;
                      $res=mysqli_query($connection,"SELECT available_books FROM books_tbl WHERE book_name='$_POST[bookname]'");

                      while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
                      {
                        $qty=$row["available_books"];
                      }
                        if($qty==0){
                          ?>
                              <div class="alert alert-danger col-lg-6 col-lg-push-3">
                               <strong>No Book Available</strong>
                            </div>
                           <?php
                         }
                         else{
                      mysqli_query($connection,"insert into issue_books_tbl values('NULL','$_SESSION[rollno]','$_POST[studentname]',
                      '$_POST[studentcontact]','$_POST[studentemail]','$_POST[studentusernmae]','$_POST[bookname]','','$_POST[issuedate]','')");
                      mysqli_query($connection, "UPDATE books_tbl SET available_books=available_books-1 WHERE book_name= '$_POST[bookname]'&&
                        available_books>0");
                    ?>
                    <script type="text/javascript">
                      window.location="viewissuedbooks.php";
                      alert("Book Issued Successfully");
                    </script>
                    <?php
                  }
                  }
               ?>
             </div>
           </div>
         </div>
      </section>
    </section>
   <?php require_once('footer.html')?>
  </section>
</body>
</html>
