<?php
include "database.php";
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <center><h1>EDIT DATA USER</h1></center>
    <br>
    <br>
     
    <div class="inputan">
    <center><form action="proses.php?aksi=update" method="POST">
    <?php
    foreach($db->edit($_GET['id']) as $isi){
    ?>
    <input type="hidden" name="id" value="<?php echo $isi['id']?>">
    <div class="form-group">
    <label for="name">Nama</label>
    <input type="text" name="nama" id="name" value="<?php echo $isi['nama']?>" class="form-control">
    </div>
    <div class="form-group">
    <label for="address">Alamat</label>
    <input type="text" name="alamat" id="address" value="<?php echo $isi['alamat']?>" class="form-control">
    </div>
    <div class="form-group">
    <label for="age">Usia</label>
    <input type="text" name="usia" id="age" value="<?php echo $isi['usia']?>" class="form-control">
    </div>
    <input type="submit" name="masuk" value="Simpan" class="btn btn-primary btn-lg">
    <?php } ?>
    </form></center>
    </div>
</body>
</html>