<?php
include_once("config.php");

$result = mysqli_query($mysqli, "select *from tasks order by task_date desc");
?>

<html>

<head>
    <title>Homepage</title>
</head>
<style>
    th {
        font-family: Verdana;
        font-size: 16px;
    }
    div.posisi {
        position: relative;
        left: 135px;
    }
</style>

<body>
    <center>
        <h1>Halaman Admin</h1>
        <table width='80%' border=1>

            <tr>
                <th>Nama Tugas</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['task_name'] . "</td>";
                echo "<td>" . $user_data['task_status'] . "</td>";
                echo "<td>" . $user_data['task_date'] . "</td>";
                echo "<td align='center'><a href='edit.php?task_id=$user_data[task_id]'>Edit</a> | <a href='delete.php?task_id=$user_data[id]'>Hapus</a></td></tr>";
            }
            ?>
        </table>
    </center>
    <br>
    <div class="posisi">

        <a href="add.php"><button>+ Tambahkan</button></a>
        
    </div>
</body>
</html>