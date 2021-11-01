<!DOCTYPE html>
<html>
<head>
	<title>No. 4</title>
</head>
<body>
 
	<h2>Nomer 4</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Course</h3>
 
	<?php
	include 'db.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * from news where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>ID</td>
					<td><input type="int" name="id" value="<?php echo $d['id']; ?>"></td>
				</tr>
				<tr>
					<td>ID_Author</td>
					<td><input type="int" name="id_author" value="<?php echo $d['id_author']; ?>"></td>
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