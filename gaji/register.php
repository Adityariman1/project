<?php
require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $kode = filter_input(INPUT_POST, 'kode_petugas', FILTER_SANITIZE_STRING);
    $user = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO petugas (kode_petugas, nama_petugas, password_petugas, status) 
            VALUES (:kode_petugas, :nama_petugas, :password_petugas, :status)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":kode_petugas" => $kode,
        ":nama_petugas" => $user,
        ":password_petugas" => $pass,
        ":status" => $status
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Dulu guys</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Bergabunglah bersama ribuan orang lainnya</h4>
        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <form action="" method="POST">

    <div class="form-group">
    <label for="kode_petugas">Kode Petugas</label>
    <input class="form-control" type="text" name="kode_petugas" placeholder="kode petugas" />
    </div>

    <div class="form-group">
    <label for="nama_petugas">Nama Petugas</label>
    <input class="form-control" type="text" name="username" placeholder="nama petugas" />
    </div>

    <div class="form-group">
    <label for="password_petugas">Password Petugas</label>
    <input class="form-control" type="password" name="password" placeholder="Password" />
    </div>

    <div>
    <label for="status">Status</label> <br>
    <select name="status">
    <option value="Petugas">Petugas</option>
    <option value="Direktur">Direktur</option>
    </select>
    </div>

<br><input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

</form>      
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/company.jpg" />
        </div>

    </div>
</div>

</body>
</html>