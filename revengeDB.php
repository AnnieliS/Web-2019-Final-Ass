<?php
session_start();
include 'DB.php';
include 'URLset.php';

$offset = $_GET["offst"];
$offsrt4 = $offset+4;
$query = "SELECT * FROM `tb_virus_205` JOIN `tb_users_205` ON tb_users_205.user_id = tb_virus_205.uploader_id  WHERE `vir_id`<7" ;

$result = mysqli_query($connection, $query);
$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
$result = json_encode($result);
mysqli_close($connection);
echo $result;
?>