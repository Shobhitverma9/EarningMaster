<?php
session_start();
include 'connect.php';
session_destroy();
header('location: login.php');
exit();
?>
logout.php