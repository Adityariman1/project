<?php
include "conect/crud.php";
include "proses/p_login.php";
if (isset($_SESSION['id'])) {
	echo "<script>document.location='index.php'</script>";
} else {
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login With Your account</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
        <h4><center> Masuk ke PT MAYORA</center></h4>
        <form action="" method="POST">

            <div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
            <p><center> Daftar? <a href="register.php" name="register">Disini</a></p>
            <input type="submit" name="login" value="Masuk" /></center>

        </form>
            
        </div>
    </div>
</div>
    
</body>
</html>