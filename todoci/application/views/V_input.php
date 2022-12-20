<!DOCTYPE html>
<html>
    <head>
        <title>list Sederhana</title>
    </head>
    <body>
        <center>
            <h1>Tambah Pekerjaan</h1>
            <h3>Tambah Tugas</h3>
        </center>
        <form action="<?php echo base_url(). 'index.php/Crud/aksi'; ?>" method="post">
        <table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="description"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>