<?php
session_start();
include 'DB.php';
include 'URLset.php';

$vir_num = $_GET["v_num"];

$query = "SELECT * FROM `tb_virus_205` WHERE vir_id= " . $vir_num . "";

$result = mysqli_query($connection, $query);
$result = mysqli_fetch_all($result,MYSQLI_ASSOC);
$result = json_encode($result);
mysqli_close($connection);
echo $result;
?>