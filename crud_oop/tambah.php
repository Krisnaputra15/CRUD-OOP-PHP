<?php
include "database.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
<center><h1>INPUT DATA BARU</h1></center>
<br>
<br>
</header>
    <div class="inputan">
    <center><form action="proses.php?aksi=tambah" method="POST">
    <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" name="nama" id="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="address">Alamat</label>
    <input type="text" name="alamat" id="address" class="form-control">
    </div>
    <div class="form-group">
    <label for="age">Usia</label>
    <input type="number" name="usia" id="age" class="form-control">
    </div>
    <center><input type="submit" class="btn btn-primary btn-lg" name="masuk" value="Tambah"></center>
    </form></center>
    </div>
</body>
</html>
