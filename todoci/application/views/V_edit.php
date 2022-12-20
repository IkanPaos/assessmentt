<!DOCTYPE html>
<html>
<head>
	<title>CRUD To Do CodeIgniter</title>
</head>
<body>
	<center>
		<h1>Todo List</h1>
		<h3>Edit Data</h3>
	</center>
	<?php foreach($user as $u){ ?>
	<form action="<?php echo base_url(). 'index.php/Crud/update'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="title" value="<?php echo $u->title ?>">
				</td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="description" value="<?php echo $u->description ?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $u->status ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>