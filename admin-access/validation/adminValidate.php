<?php
 class valAdmin{
   private $name;
   private $uname;
   private $Email;
	 private $password;
   private $Cpassword;
	 public $error=false;
//*****************************************************************
      function setName($Name){
		   if(empty($Name)){
			   $_SESSION['Ename']="* Please Enter Name";
		       $this->error="true";
		   }
		   $this->name=$Name;
	   }
//*****************************************************************
     function setUname($Uname){
      if(empty($Uname)){
        $_SESSION['EUname']="* Please Enter UserName";
          $this->error="true";
      }
      $this->uname=$Uname;
    }
//*****************************************************************
     function setEmail($email){
      if(empty($email)){
        $_SESSION['Eemail']="* Please Enter Email";
          $this->error="true";
      }
      $this->Email=$email;
     }
//*****************************************************************
       function setPassword($Password){
        if(empty($Password)){
          $_SESSION['Epass']="* Please Enter Password";
            $this->error="true";
        }
        $this->password=$Password;
       }
//*****************************************************************
       function confirmPassword($cPassword){
        if($this->password!=$cPassword){
          $_SESSION['Ecpass']="* Please confirm Your Password";
            $this->error="true";
        }
      else if(empty($cPassword)){
          $_SESSION['Emptypass']="* this field is required";
          $this->error="true";
      }
        $this->Cpassword=$cPassword;
       }
//*****************************************************************

//**********************************************************************
  function enterAdmin($connection,$namee,$username,$mail,$password){
    $Uname=$username;
    $name=$namee;
    $email=$mail;
    $pass=$password;
	  $query="select * from admin_info where username='$Uname'";
	  $result=mysqli_query($connection,$query);
    $row= mysqli_num_rows($result);
	  if(mysqli_num_rows($result)>0){
      $_SESSION['Eexist']="* userName already exists";
      $this->error="true";
	  }
      $sql="INSERT INTO admin_info VALUES(NULL,'$name','$username','$email','$pass','')";
      $me=mysqli_query($connection,$sql);
  	  if($me)
        $_SESSION['Entered']="*USER REGISTERED SUCCESSFULLY";
      else{
        $_SESSION['NEntered']="*USER REGISTRATION FAILED";
        $this->error="true";
      }

  }
//*****************************************************************
 }
?>
