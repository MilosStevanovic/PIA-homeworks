
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../unregistered/index.php');
}
else{ 
    if ($_SESSION['status'] != "admin") {
        header('location: ../registrovani/index.php');
    }
}

include('../logovanje/dbkonektovanje.php');

$id=$_REQUEST['id'];
$query = "SELECT * from bioskop where userID='$id'"; 
$r = $conn -> query($query);
$row = $r->fetch_assoc();

if (isset($_POST['update'])) {
    $fullname=$_POST['fname'];
    $email = $_POST['email'];
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    //Validation
    $q = "SELECT * FROM bioskop WHERE username = '$username' OR email = '$email'";

    $res = $conn->query($q);
    $num = mysqli_num_rows($res);  

    if ($num > 1) {
            echo "Greška";
            header('location: useri.php#error');
    } else {
        //$sql = "INSERT INTO userdata (Username,Pass,Fullname,Email) values('$username','$password','$fullname','$email')";

        $sql = "UPDATE bioskop SET realname='$fullname',username='$username',sifra = '$password', email='$email' WHERE userID='$id'";

        $result = $conn -> query($sql);

            header('location: useri.php#updatesuccess');  
    }
}

    

    
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Izmena podataka</title>
    

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

</head>
<body>
    
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="../img/logo-imdb.jpg" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!--<div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                
                                <div class="book_btn d-none d-lg-block">
                                    <a class="popup-with-form">Prijava</a>
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Početna</a></li>
                                        
                                        <li><a href="javascript:void(0)">Akcija</a></li>
                                                <li><a href="javascript:void(0)">Avantura</a></li>
                                                <li><a href="javascript:void(0)">Biografski</a></li>
                                                <li><a href="javascript:void(0)">Drama</a></li>
                                                <li><a href="javascript:void(0)">Horor</a></li>
                                                <li><a href="javascript:void(0)">Istorijski</a></li>
                                                <li><a href="javascript:void(0)">Komedija</a></li>
                                                <li><a href="javascript:void(0)">Krimi</a></li>
                                                <li><a href="javascript:void(0)">Misterija</a></li>
                                                <li><a href="javascript:void(0)">Porodični</a></li>
                                                <li><a href="javascript:void(0)">Ratni</a></li>
                                                <li><a href="javascript:void(0)">Romansa</a></li>
                                                <li><a href="javascript:void(0)">Triler</a></li>
                                        
                                        
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                
                                <div class="book_btn d-none d-lg-block">
                                    <a href="../logovanje/logout.php">Odjavi se</a>
                                    <a href="useri.php">Lista korisnika</a>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                        
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <br><br><br>

    <header>
        <div class="container req-box" >
        <center><h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #6AC045">Izmeni podatke korisnika</span></h3></center>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6 box1">
                        
                        <label for="title">Ime i prezime:</label><br>
                        <input type="text" name="fname" class="input" value="<?php echo $row['pravoime'];?>" required  ><br>
                        <label for="title">Email adresa:</label><br>
                        <input type="email" name="email" class="input" value="<?php echo $row['email'];?>" required><br>
                    
                    </div>
                    <div class="col-md-6 box1">
                        <label for="title">Korisničko ime:</label><br>
                        <input type="text" name="username" class="input" value="<?php echo $row['korisnickoime'];?>" required><br>
                        <label for="title">Lozinka:</label><br>
                        <input type="text" name="password" class="input" value="<?php echo $row['lozinka'];?>" required><br>
                        <input type="submit"  class="btn" name="update" value="Izmeni podatke korisnika">
                    </div>
                </div>   
            </form>
        </div>
    </header>

    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ajax-form.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/scrollIt.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/gijgo.min.js"></script>

    <script src="../js/contact.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>

    <script src="../js/main.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>