<?php
session_start();
include 'DB.php';
include 'URLset.php';

$query1 = 'DELETE FROM tb_users_205 WHERE user_id="' .$_POST['userID']. '";';
$query2 = 'UPDATE tb_virus_205 SET uploader_id = 0 WHERE uploader_id="' .$_POST['userID'].'";';


//$query = "SELECT * FROM tb_virus_205 WHERE uploader_id='".$_SESSION["user_id"]."'";

//$result = mysqli_query($connection, $query);
//$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
//$result = json_encode($result);

$result1 = mysqli_query($connection, $query1);
$result2 = mysqli_query($connection, $query2);
mysqli_close($connection);
?>