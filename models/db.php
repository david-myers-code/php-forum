<?php
	$dsn = "mysql:host=localhost; dbname=mydb";
	$username = "root";
	$password= "root";
	
	
	try{
		$db= new PDO($dsn, $username, $password);
		//echo "connected";
	}
	catch(PDOException $e){
		$error = $e->getMessage();
		echo $error;
	
	}

?>