<?php
session_start();
include('dbkonektovanje.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    //validacija
    $q = "SELECT * FROM bioskop WHERE username = '$username' && sifra = '$password'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);  

    if ($num == 1) {

       $_SESSION['username'] = strtolower($username);
        
       if ($_SESSION['username']=="admin") {
            header('location: ../admin/index.php');
            $_SESSION['status'] = 'admin';
       } else {
            header('location: ../registrovani/index.php');
            $_SESSION['status'] = 'user';
       }
    } else {
        header('location: ../unregistered/index.php#error1');
    }
    $conn->close();
?>