<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>

	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA</h3>

	<?php
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from tb_instansi where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Instansi</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="instansi" value="<?php echo $d['instansi']; ?>">
					</td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td><input type="text" name="deskripsi" value="<?php echo $d['deskripsi']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>