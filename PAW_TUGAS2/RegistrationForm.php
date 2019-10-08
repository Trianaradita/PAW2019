<?php

//inisialisasi variable
$surname="";
$firstname="";
$email="";
$mobilenumber="";
$password="";
$confirmpassword="";

$surname = isset($_POST['surname']) ? $_POST['surname']:"";
$firstname = isset($_POST['firstname']) ? $_POST['firstname']:"";
$email = isset($_POST['email']) ? $_POST['email']:"";
$mobilenumber = isset($_POST['number']) ? $_POST['number']:"";
$password = isset($_POST['password']) ? $_POST['password']:"";
$confirmpassword = isset($_POST['confirmpass']) ? $_POST['confirmpass']:"";

//wadah error
$surnameerror="";
$firsterror="";
$emailerror="";
$mobileerror="";
$passerror="";
$confirmerror="";


//code validate
if (isset($_POST['Register'])) {
	//surname
	if (empty($_POST["surname"]))
	{
		$surnameerror= "Field is required";
	}
	elseif (!preg_match("/^[a-zA-Z ]*$/",$surname))
	{
		$surnameerror="Must Contain Alfabets Only";
	}
	//firstname
	if (empty($_POST["firstname"]))
	{
		$firsterror= "Field is required";
	}
	elseif (!preg_match("/^[a-zA-Z ]*$/",$firstname))
	{
		$firsterror="Must Contain Alfabets Only";
	}
	//email
	if (empty($_POST["email"]))
	{
		$emailerror= "Field is required";
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		$emailerror="Invalid Email Address";
	}
	//phone
	if (empty($_POST["number"]))
	{
		$mobileerror= "Field is required";
	}
	elseif(!is_numeric($_POST["number"]))
	{
		$mobileerror= "Must Contain Numerics Only";
	}
	elseif(strlen($_POST["number"])<=11)
	{
		$mobileerror= "Mobile number is less than 12 digits long";
	}
	//password
	if (empty($_POST["password"]))
	{
		$passerror= "Field is required";
	}
	elseif (!preg_match("/^[a-zA-Z0-9]*$/",($password)))
	{
		$passerror= "Must contain alphabets (both lowercase & uppercase) & numerics";
	}
	elseif(strlen($password)<=7)
	{
		$passerror= "Password is less than 8 digits long";
	}
	//confirmpassword
	if (empty($_POST["confirmpass"]))
	{
		$confirmerror= "Field is required";
	}
	elseif (!preg_match("/^[a-zA-Z0-9]*$/",($confirmpassword)))
	{
		$confirmerror= "Must contain alphabets (both lowercase & uppercase) & numerics";
	}
	elseif(strlen($confirmpassword)<=7)
	{
		$confirmerror= "Password is less than 8 digits long"; 
	}
	else{
		header('Location: SuksesForm.php');
	}
}
elseif (isset($_POST['butt'])){
	include 'RegistrationForm.html';
}
include 'RegistrationForm.html';

	
?>