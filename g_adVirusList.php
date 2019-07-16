<?php
session_start();
include 'DB.php';
include 'URLset.php';

$query = 'SELECT * FROM tb_virus_205 WHERE uploader_id="' . $_POST['userID'] . '";';

$result = mysqli_query($connection, $query);
$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
$result = json_encode($result);
mysqli_close($connection);
echo $result;
?>


