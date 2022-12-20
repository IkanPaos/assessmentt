<!DOCTYPE html>
<html>
<head>
	<title>Todo List</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter</h1></center>
	<center><?php echo anchor('Crud/input','Tambah Data'); ?></center>
	<table style="margin:50px auto; width: 800px;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Keterangan</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($todo as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->title ?></td>
			<td><?php echo $u->description ?></td>
			<td><?php echo $u->status ?></td>
			<td>
			<?php echo anchor('Crud/edit/'.$u->id,'Edit'); ?>
            <?php echo anchor('Crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>