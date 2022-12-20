<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
    $id = $_POST['task_id'];
    $nama=$_POST['task_name'];
    $status=$_POST['task_status'];
    $date=$_POST['task_date'];
        
    $result = mysqli_query($mysqli, "UPDATE tasks SET task_name='$nama',task_status='$status',task_date='$date' WHERE task_id=$id");
    
    header("Location: index.php");
}
?>
<?php
$id = $_GET['task_id'];
 
$result = mysqli_query($mysqli, "SELECT * FROM tasks WHERE task_id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['task_name'];
    $status = $user_data['task_status'];
    $date = $user_data['task_date'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Tugas</td>
                <td><input type="text" name="task_name" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="task_status" value=<?php echo $status;?>></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="task_date" value=<?php echo $date;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="task_id" value=<?php echo $_GET['task_id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>