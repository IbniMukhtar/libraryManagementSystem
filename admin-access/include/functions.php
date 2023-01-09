<?php
  require_once("database.php");
  //display data function
  function display_record()
  {
    global $connection;
    $value="";
    $value = '<table class="table table-bordered">
              <tr>
                <td>Id</td>
                <td>Name</td>
                <td>UserName</td>
                <td>Rollno</td>
                <td>DEPT</td>
                <td>Contact</td>
                <td>email</td>
                <td>Edit</td>
                <td>Delete</td>
              </tr>';
$query = "select * from student_tbl";
$result =mysqli_query($connection,$query);
   while($row=mysqli_fetch_assoc($result))
   {
     $value.='
             <tr>
               <td>".row['Id']."</td>
               <td>".row['Name']."</td>
               <td>".row['UserName']."</td>
               <td>".row['Rollno']."</td>
               <td>".row['DEPT']."</td>
               <td>".row['Contact']."</td>
               <td>".row['email']."</td>
               <td>Edit</td>
               <td>Delete</td>
             </tr>';
   }
  $value.='</table>';
  echo json_encode(['status'=>'success','html'=>$value]);
  }
 -->

 ?>
