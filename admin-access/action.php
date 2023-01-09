<?php
include"functions.php";
$object =new crud();
// if(isset($_POST["action"]))
// {
//   if($_POST["action"]=="action")
//{

   $object->get_data_in_table('SELECT * FROM student_tbl ORDER BY id');


//   }
// }
 ?>
