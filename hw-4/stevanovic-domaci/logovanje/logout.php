<?php 

session_start();
session_destroy();
header('location: ../unregistered/index.php#popup1');
?>