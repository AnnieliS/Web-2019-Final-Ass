<?php
session_start();
include 'DB.php';
include 'URLset.php';

$query = "SELECT user_id, username, email FROM tb_users_205";

$result = mysqli_query($connection, $query);
$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
$result = json_encode($result);
mysqli_close($connection);
echo $result;
?>


