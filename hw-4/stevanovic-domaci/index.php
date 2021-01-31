<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: unregistered/index.php');
}
elseif (isset($_SESSION['username']) == "admin") {
    header('location: admin/index.php');
}
else{ 
    header('location: registrovani/index.php');
}


?>