<?php
	class Database{
		static function connect(){
			return mysqli_connect("localhost","root","","librarydb");
		}
	}
?>
