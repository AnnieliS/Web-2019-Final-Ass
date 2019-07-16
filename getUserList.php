<?php
session_start();
include 'DB.php';
include 'URLset.php';

$query = "SELECT user_id, username, email FROM tb_users_205";

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


