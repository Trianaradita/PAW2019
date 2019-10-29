<?php
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Halaman Utama</title>
		<link rel="stylesheet" href="index.css" type="text/css">
	</head>
	<body>
		<table class="center">
			<tr>
				<td colspan="3"><div class="boxlines1">DATA UTAMA</div></td>
			</tr>
			<tr><td><div class="img"><img src='pict/tria.jpg' alt='tria'></div></td>
				<td><div class="sublines">
						<ol class="li">
						<li>Nama Lengkap</li>
						<li>NIM</li>
						<li>Program Studi</li>
						<li>Fakultas</li>
						<li>Universitas</li>
						</ol>
					</div>
				</td>
				<td><div class="sublines">
						:Triana Radita Indrawati<br>
						:160411100001<br>
						:Teknik Informatika<br>
						:Teknik<br>
						:Trunojoyo Madura<br>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan='3'><div class="boxlines2">HALAMAN</div></td>
			</tr>
			<tr>
				<td colspan="3"><div class="sublines">
						<ul>
						<li><a href='login.php'>Halaman Login</a></li>
						<li><a href='<?php if(isset($_SESSION['isAdmin'])){echo $_SESSION['data1'];} else{echo "login.php";} ?>'>Halaman Detil Data 1</a></li>
						<li><a href='<?php if(isset($_SESSION['isAdmin'])){echo $_SESSION['data2'];} else{echo "login.php";} ?>'>Halaman Detil Data 2</a></li>
						
						</ul>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>