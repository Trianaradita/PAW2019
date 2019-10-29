<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Halaman Detil Data 1</title>
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
				<td colspan="3"><div class="boxlines2">DATA PRIBADI</div></td>
			</tr>
			<tr>
				<td><div class="sublines">
						<ol class="li">
						<li>Nama Panggilan</li>
						<li>Jenis Kelamin</li>
						<li>Alamat</li>
						<li>Alamat email</li>
						</ol>
					</div>
				</td>
				<td colspan='2'><div class="sublines">
						:Tria<br>
						:Perempuan<br>
						:Perumahan Cendana I Kamal <br>
						:<a href="mailto:Trianaradita@gmail.com">Trianaradita@gmail.com</a>
					</div>
				</td>
			</tr>
			<tr>
				<td colspan="3"><div class="boxlines1">HALAMAN</div></td>
			</tr>
			<tr>
				<td colspan="3"><div class="sublines">
						<ul>
						<li><a href='index.php'>Halaman Utama</a></li>
						<li><a href="<?php if(isset($_SESSION['isAdmin'])){echo $_SESSION['data2'];} else{echo 'login.php';}?>">Halaman Detil Data 2</a></li>
						<li><a href='logout.php'>Halaman Logout</a></li>
						</ul>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>