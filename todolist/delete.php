<?php

include_once("config.php");

$id = $_GET['task_id'];
 
$result = mysqli_query($mysqli, "DELETE FROM tasks WHERE task_id=$id");
 
header("Location:index.php");
?>