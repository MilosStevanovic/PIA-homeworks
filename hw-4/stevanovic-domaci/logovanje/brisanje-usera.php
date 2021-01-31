<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../unregistered/index.php#popup1');
}

include('dbkonektovanje.php');
$id=$_REQUEST['id'];

$del = "DELETE  FROM bioskop WHERE userID= '$id'"; 
$result = $conn -> query($del);
header("Location: ../admin/useri.php"); 
$conn->close();
?>