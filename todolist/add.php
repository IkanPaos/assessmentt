<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="index.php"><button><- Kembali</button></a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Tugas</td>
                <td><input type="text" name="task_name"></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="task_status"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="task_date"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambahkan"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    if(isset($_POST['Submit'])) {
        $nama = $_POST['task_name'];
        $status = $_POST['task_status'];
        $date = $_POST['task_date'];
        
        include_once("config.php");
                
        $result = mysqli_query($mysqli, "INSERT INTO tasks (task_name,task_status,task_date) VALUES('$nama','$status','$date')");
        
        echo "User Berhasil Ditambahkan. <a href='index.php'>Lihat Users</a>";
    }
    ?>
</body>
</html>