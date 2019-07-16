<?php
session_start();
include 'DB.php';
include 'URLset.php';

$query = "SELECT * FROM tb_virus_205 WHERE uploader_id='".$_SESSION["user_id"]."'";

$result = mysqli_query($connection, $query);
if (!$result) {
    echo "NULL";
} else {
    $resArray = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $resArray[] = $row;
    }
    $rows = json_encode($resArray);
    echo $rows;
}
mysqli_close($connection);

?>


