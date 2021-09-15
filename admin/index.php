<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
?>
<a href="logout.php">LOGOUT</a>
<!DOCTYPE html>
<html>
<head>
	<title>Instansi</title>
</head>
<body>

	<h2>Instansi</h2>
	<br/>
	<a href="tambah.php">+ Tambah Instansi</a>
	<br/>
	<br/>
	<form action="index.php" method="get">
		<label>Instansi :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>
	<?php 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
		}
	?>

	<table border="1">
		<tr>
			<th>NO</th>
			<th>Aksi</th>
			<th>Instansi</th>
			<th>Deskripsi</th>
		</tr>
		<?php
		include '../koneksi.php'; 
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$data = mysqli_query($koneksi,"select * from tb_instansi where instansi like '%".$cari."%'");				
		}else{
			$data = mysqli_query($koneksi,"select * from tb_instansi");		
		}
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
				<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
			</td>
			<td><?php echo $d['instansi']; ?></td>
			<td><?php echo $d['deskripsi']; ?></td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>