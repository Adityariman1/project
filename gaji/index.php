<?php
	session_start();
	include "conect/crud.php";
	if (isset($_SESSION['id'])) {
		
	}else{
		echo "<script>document.location='login.php'</script>";
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>PT MAYORA</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>
	<div class="header">
		<h1>PT MAYORA</h1>
		<a href="proses/p_logout.php"><button class="logout">Logout</button></a>
	</div>
	<div class="side-menu">
		<ul>
			<a href="index.php?p=home"><li>Beranda</li></a>
			<a href="index.php?p=tam_pegawai"><li>Daftar Pegawai</li></a>
			<a href="index.php?p=tam_gaji"><li>Daftar Gaji</li></a>
			
		</ul>
	</div>
	<div class="content">
		<div class="main-content">
			<?php 
				if (isset($_GET['p'])) {
					include "content/".$_GET['p'].".php";
				}else{
					include "content/home.php";
				}
		?>
		</div>
	</div>
</body>
</html>