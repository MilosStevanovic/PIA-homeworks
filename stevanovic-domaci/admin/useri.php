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


include('svi-korisnici.php');


?>

<!doctype html>
<html lang="sr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Korisnici</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
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
    
</head>

<body>
    
    <style>
    
        .log-box {
    width: 40%;
    margin: 0 auto;
    background: rgba(255,255,255,0.2);
    padding: 35px;
    border: 2px solid #fff;
    border-radius: 20px/50px;
    background-clip: padding-box;
    text-align: center;
    }
    
    .open-button {
    font-size: 1em;
    padding: 10px;
    color: #fff;
    border: 2px solid #6AC045;
    border-radius: 20px/50px;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.3s ease-out;
    }
    
    .button:hover {
    background: #6AC045;
    }
    
    .popup-overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    }
    .popup-overlay:target {
    visibility: visible;
    opacity: 1;
    }
    
    .log-popup {
    margin: 100px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 1s ease-in-out;
    text-align: center;
    }
    
    .log-popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
    text-transform: uppercase;
    }
    .log-popup .close-window {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
    }
    .log-popup .close-window:hover {
    color: #6AC045 !important;
    }
    .log-popup .log-content {
    max-height: 30%;
    overflow: auto;
    }
    
    @media screen and (max-width: 700px){
    .log-box{
        width: 70%;
    }
    .log-popup{
        width: 70%;
    }
    }
    
    
    .log-input{
    font-size: 20px;
    padding: 5px 10px;
    margin-top: 15px;
    width: 60%;
    border: 1px solid #6AC045;
    outline: 0;
    border-radius: 50px;
    } 
    
    .btn-log {
        font-size: 18px;
        background: #6AC045;
        padding: 10px;
        border: 0;
        outline: 0;
        display: inline;
        color: #fff;
        width: 60%;
        border-radius: 50px;
        margin-top: 13px;
    }

    .icon {
        padding: 15px 18px;
        background: #6AC045;
        color: white;
        text-align: center;
        border-radius: 50%;
    }

    
    </style>
   
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
                                    <a href="../logovanje/logout.php">Odjava</a>
                                    
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

    <div class="container req-box" >
        <form action="" method="post">
            <div class="row">
                <div class="col-md-10 box1">
                    <h3 style="margin-bottom:50px;"><span style="font-weight:bold; color: #6AC045">Svi korisnici </span>(<?php echo $total ?>)</h3>
                    <?php 
                    echo $list;
                    ?>
                    <a href="#popup2" class="btn"> Dodaj novog korisnika</a>
                </div>
            </div>   
        </form>
    </div>

    <div id="popup2" class="popup-overlay">
        <div class="log-popup">
            <h2>Dodaj novog korisnika</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
                <form action="../kontroler/registracija.php" method="post">
                    <i class="fa fa-user icon"></i>
                    <input type="text" placeholder="Ime korisnika" name="fullname" class="log-input" required>
                    <br>
                    <i class="fa fa-envelope icon"></i>
                    <input type="email" placeholder="Email korisnika" name="email" class="log-input" required>
                    <br>
                    <i class="fa fa-link icon"></i>
                    <input type="text" placeholder="Korisničko ime" name="username" class="log-input" required>
                    <br>
                    <i class="fa fa-lock icon"></i>
                    <input type="password" placeholder="Lozinka" name="password" class="log-input" required>
                    <br>
                    <input type="submit" value="Kreiraj korisnika" name="signup-btn" class="btn-log">
                </form>
            </div>
        </div>
    </div>
    <div id="success" class="popup-overlay">
        <div class="log-popup">
            <h2>Uspešno!</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Korisnik uspešno dodat!</p> 
            </div>
        </div>
    </div>
    <div id="updatesuccess" class="popup-overlay">
        <div class="log-popup">
            <h2>Uspešno izvršenje radnje</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Podaci korisnika uspešno update-ovani</p> 
            </div>
        </div>
    </div>
    <div id="error" class="popup-overlay">
        <div class="log-popup">
            <h2>Greška</h2>
            <a class="close-window" href="#">&times;</a>
            <div class="log-content">
               <p style="color:black">Uneto korisničko ime ili email adresa već postoje!</p> 
            </div>
        </div>
    </div>
    
    <footer class="footer">
        
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Miloš Stevanović| Programiranje internet aplikacija </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>