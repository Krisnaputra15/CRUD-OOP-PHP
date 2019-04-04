<?php
class database{
    var $host="localhost";
    var $uname="root";
    var $pass="";
    var $database="malasngoding";

    function __construct(){
        $conn = new mysqli($this->host,$this->uname,$this->pass,$this->database);
    }
    function tampil_data(){
        $conn = new mysqli($this->host,$this->uname,$this->pass,$this->database);
        $sql = "select * from user";
        $data = mysqli_query($conn,$sql);
        while($hasil = mysqli_fetch_array($data)){
            $result[] = $hasil;
        }
        return $result;
    }
    function input($nama,$alamat,$usia){
        $conn = new mysqli($this->host,$this->uname,$this->pass,$this->database);
        mysqli_query($conn,"INSERT INTO user VALUES('','$nama','$alamat','$usia')");
    }
    function hapus($id){
        $conn = new mysqli($this->host,$this->uname,$this->pass,$this->database);
        mysqli_query($conn,"DELETE FROM user WHERE id='$id'");
    }
    function edit($id){
        $conn = new mysqli($this->host,$this->uname,$this->pass,$this->database);
        $sql=mysqli_query($conn,"SELECT * from user WHERE id='$id'");
        while($isi=mysqli_fetch_array($sql)){
            $hasil[]=$isi;
        }
        return $hasil;
    }
    function update($id,$nama,$alamat,$usia){
        $conn = new mysqli($this->host,$this->uname,$this->pass,$this->database);
        mysqli_query($conn,"UPDATE user SET nama='$nama',alamat='$alamat',usia='$usia' WHERE id='$id'");
        header("location:index.php");
    }
}

?>