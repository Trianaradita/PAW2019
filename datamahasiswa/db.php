<?php 
	$h="localhost";
	$u="root";
	$p="";
	$db="myapp";
	
	try
	{
		$conn=new PDO("mysql:host=$h;dbname=$db",$u,$p);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
	catch(PDOException $e)
    {
		echo "Connection failed: " . $e->getMessage();
    }
?>