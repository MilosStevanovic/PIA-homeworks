<?php

   session_start();

   include('dbkonektovanje.php');

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    //Validacija
    $q = "SELECT * FROM bioskop WHERE username = '$username' OR email = '$email'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);  

    if ($num >= 1) {
        if ($_SESSION['username']=="admin") {
            header('location: ../registrovani/index.php#error');
        } else {
            header('location: ../unregistered/index.php#error');
        }
    } else {
        $sql = "INSERT INTO korisnici (username,sifra,realname,email,status) values('$username','$password','$fullname','$email','user')";

        $result = $conn -> query($sql);

        if ($_SESSION['username']=="admin") {
            header('location: ../admin/useri.php#success');
        } else {
            header('location: ../unregistered/index.php#success');
        }     
    }
    $conn->close();
?>