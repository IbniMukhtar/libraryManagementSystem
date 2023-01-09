<?php
   	class LibAdm{
		private $Uname;
		private $password;
		public $error=false;

    function setUname($username){
		if(empty($username)){
			$_SESSION['Ename']="* Please Enter UserName";
		    $this->error="true";
		}
		$this->Uname=$username;
	}
    function setPassword($password){
		if(empty($password)){
			$_SESSION['Epass']="* Please Enter Password";
		    $this->error="true";
		}
		$this->password=$password;
	}

	function Login($connection){
		$username=$this->Uname;
		$password=$this->password;
		if($this->isuserameExist($connection)){
		 $query="select password from admin_info where username='$username'";
			$result=mysqli_query($connection,$query);
			$row=mysqli_fetch_assoc($result);
			$Dbpass=$row['password'];
			if($Dbpass==$password){
        $_SESSION['Elname'] = $_POST['username'];
				header("location:admin-access/index.php?username=$username;?message='10'");
			}else{
				$_SESSION['Enpa']= "* Pasword invalild";
			}
		}else{
			$_SESSION['Env']=" * UserName doesn't exist";
		}
	}

  function isuserameExist($connection){
	  $username=$this->Uname;
	  $query="select * from admin_info where username='$username'";
	  $result=mysqli_query($connection,$query);
	  if(mysqli_num_rows($result)>0){
		  return true;
	  }else
		  return false;
  }


}

?>
