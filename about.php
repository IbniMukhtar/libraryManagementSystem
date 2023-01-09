<?php
include"fun.php";
$object =new crud();
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
  <link href="admin-access/img/favicon.png" rel="icon">
  <link href="admin-access/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>
<body>
  <section id="container">
   <?php require_once('header.php')?>
<!--******************************************************************MAIN CONTENT**************************************************-->
    <section id="main-content">
      <section class="wrapper" style="min-height:23rem;">
        <h3 style="margin-top:28px;color:green;" centered><i class="fa fa-book"></i><b>ABOUT PROJECT</b></h3>
          <div>
            <h2>Project Title:  Library Management System</h2>
            <p>
     Submitted To:  Dept. Of Information Technology <br>
  Team Members:  Mohsin Mukhtar (171904) , Shaikh Mujeeb U Rahim (171926)  &
                                   Aadil Ahmad Gojri(171934)
<br>  Mentor:   Prof.  Ajaz  Khaki</p>
<h3>  INTRODUCTION</h3>
<p>
 The Project entitled “Library Management System” monitors & controls library books management transactions in library. The project will concentrate on main operations that takes place in library such as adding new member, new books, updating record of issued & returned books etc. The system is easy to use for both beginner & advanced users since it is very easy to operate with easy process for its implementation. Most of its features are familiar & well thought-out along with attractive user interface.</p>
 <h3> OBJECTIVE:</h3>
          <p>The main objective of this project is to automate the existing system of manually maintaining the records of the books issued , books returned from the students , managing students  and the book search to be computerised , so that the processes like issuing  books , returning books , searching etc. will be faster.
   </p><h3>SCOPE:</h3>
 <p>This project will fulfill most of requirements of librarian for record keeping of library books systematically. Students, after getting membership in the system, can borrow and return books. The library management system is dynamic system where admin can keep record of books & members dynamically & can add, delete & update books & members easily in the system. This application can be used by any library to automate the process of manually maintaining the records related to the subject of maintaining the stock and book related operations.</p>


 <h3>Problem & project as solution</h3>
 <p>There are different types of problems & difficulties of library in institutions which are suffered by teachers, students & most importantly the librarians. The problems had to be eliminated for success of library management. Some of problems which are suffered by most of the libraries are mentioned below:
 </p>a) It is hard for librarian to keep record of thousands of books manually.
  <br><br>b) Managing library manually is time consuming, ineffective & it is not systematic at all.
  <br><br>c) There is chance of losing & misplacing of library books.
  <br><br>d) Students are unable to get necessary books due to unorganized library system.<br><br>
 <p>So, for solution this project namely "Library Management System" can be helpful. Main purpose to build the project is to manage library books properly & systematically. In this system, admin can add details of books that are kept in school/college library & admin can also register students , so that they can borrow books from library.
 </p><h3>Aims & Objectives</h3>
<h3>Aims</h3>
<p>  The Library Management System aims to keep records of transactions of books available in library and to manage library daily operations efficiently. It is very easy to use & it fulfils requirement of librarian .It also reduces the hectic work for librarian to manage books and students manually.
</p><h3>  Objectives</h3>
  <br>a) Easy way to enter details of new books.
  <br><br>b) Easy way to keep record information of book
<br><br>  c) Easy way to issue books to students.
<br><br>  d) Easy way to keep record of returned book which were borrowed before.
  <br><br>e) Easy way to view books available in library.
  <br><br>f) Add & deletion of library members & their registration.
<br><br>  g) Update, add & deletion of books details.
<br><br>  h) User friendly & secure library management system along with admin login  for its operation.<br><br>
 <h3>Technical Aspects</h3>
 <p><h4>Technologies to be used in creating this project are mentioned below:</h4></p>
 <br>a) HTML & CSS: HTML will be  used to define elements of contents & CSS  to give them appearance & feel.
  <br><br>b) Bootstrap 4: it is the newest version of bootstrap , which is most popular HTML , CSS ,  JavaScript framework for developing responsive websites.
 <br><br>c) PHP: PHP is important tool for creating website which is easy to use for making dynamic website.
 <br><br>d) MySQL: It is popular open sources RDBMS due to its high performance, effectiveness & easy for using.
 <br><br>e) JavaScript: JavaScript is dynamic computer programming language that is usually used as part of web browser.

          </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
  </section>
<?php require_once('footer.php')?>
</body>
</html>
<!-- <script type="text/javascript">
  $(document).ready(function(){
    load_data();
    function load_data()
    {
      var action ="Load";
      $.ajax({
          url:"action.php",
          method:"POST",
          data:{action:Load},
          dataType:"json",
          success:function(data)
          {
            $("#user_table").html(data);
          }
      });
  });
</script> -->
<style media="screen">

    .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border: 1px solid black;
  }
  .table-bordered>tbody>tr>td{
    color:black;
  }
</style>
