<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"insert into admin values('','$username','$password')");

header("location:index.php?pesan=berhasil");

?>