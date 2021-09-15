<?php 
include '../koneksi.php';

$instansi = $_POST['instansi'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($koneksi,"insert into tb_instansi values('','$instansi','$deskripsi')");

header("location:index.php");

?>