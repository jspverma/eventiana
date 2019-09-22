<?php
session_start();
unset($_SESSION['email_id']);
unset($_SESSION['name']);
unset($_SESSION['mobile']);
header('location:../index.php');

?>