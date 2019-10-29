<?php
	
	session_start();
	if(isset($_POST['submit']))
	{
		$username = $_POST['UserN'];
		$password = $_POST['Pass'];
		
		include "db.php";
		$state = $conn-> prepare("SELECT*FROM admins WHERE username= :user and password= SHA2(:pass, 0)");
		$state->bindValue(':user',$username);
		$state->bindValue(':pass',$password);
		$state->execute();
		if($state->rowCount()>0)
		{
			$data1="private1.php";
			$data2="private2.php";
			$_SESSION['isAdmin']=true;
			$_SESSION['data1']=$data1;
			$_SESSION['data2']=$data2;
		}
	}
	$use="";
	$pas="";
	
	$use = isset($_POST['UserN']) ? $_POST['UserN']:"";
	$pas = isset($_POST['Pass']) ? $_POST['Pass']:"";
	
	$useerr="";
	$paserr="";
	
	if (isset($_POST['submit'])) {
		//username
		if (empty($_POST["UserN"]))
		{
			$useerr= "Field is required";
		}
		elseif (!preg_match("/^[a-zA-Z0-9 ]*$/",$use))
		{
			$useerr="Must Contain Alfabets and Numerics Only";
		}
		//password
		if (empty($_POST["Pass"]))
		{
			$paserr= "Field is required";
		}
		elseif (!preg_match("/^[a-zA-Z0-9 ]*$/",$pas))
		{
			$paserr="Must Contain Alfabets and Numerics Only";
		}
		else{
			header('Location:login.php');
		}
	}
	elseif (isset($_POST['reset'])) {
		header ('Location:login.php');
	}
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" href="index.css" type="text/css">
	</head>
	<body>
		<form action="login.php" method="post">
		<table class="center">
			<tr>
				<td colspan="2"><div class="boxlines1">LOGIN</div></td>
			</tr>
				<tr> 
				<td>Username :</td>
				<td><input id="UserN" name="UserN" type="text" size="30"><span class="error"> <?php echo $useerr;?></span></td>
				</tr>
				<tr>
				<td>Password :</td>
				<td><input id="Pass" name="Pass" type="password" size="30"><span class="error"> <?php echo $paserr;?></span></td>
				</tr>
				<tr>
				<td><label> &nbsp; </label>
				<td><input type="submit" name="submit" id="submit" value="Submit">
				<input type="reset" name="butt" id="butt" value="Reset"></td>
				</tr>
			<tr>
				<td colspan="2"><div class="boxlines2">HALAMAN</div></td>
			
			</tr>
			<tr>
				<td colspan="2"><div class="sublines">
						<ul>
						<li><a href='index.php'>Halaman Utama</a></li>
						<li><a href='<?php if(isset($_SESSION['isAdmin'])){echo $_SESSION['data1'];} else{echo "login.php";}?>'>Halaman Detil Data 1</a></li>
						<li><a href='<?php if(isset($_SESSION['isAdmin'])){echo $_SESSION['data2'];} else{echo "login.php";}?>'>Halaman Detil Data 2</a></li>
						</ul>
					</div>
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>

