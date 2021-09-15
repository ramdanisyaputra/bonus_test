<?php 
include '../koneksi.php';
 
$id = $_POST['id'];
$instansi = $_POST['instansi'];
$deskripsi = $_POST['deskripsi'];
 
mysqli_query($koneksi,"update tb_instansi set instansi='$instansi', deskripsi='$deskripsi' where id='$id'");
 
header("location:index.php");
 
?>