<?php
include 'URLset.php';
$_SESSION["name"] = null;
$_SESSION["email"] = null;
$_SESSION["info"] = null;
$_SESSION["dis"] = null;
session_start();
session_unset();
session_destroy();
header('Location: ' . URL . 'index.php');