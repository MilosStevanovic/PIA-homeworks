<?php



session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../unregistered/index.php');
}
else{ 
    if ($_SESSION['status'] == "admin") {
        header('location: ../admin/index.php');
    }
}


?>


<!DOCTYPE html>
<html lang="sr">
<head>
	<title>Advokat na točkovima</title>
	<meta charset="UTF-8">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="../img/imdb-removebg-preview.png" rel="shortcut icon">

	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/slicknav.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="../css/magnific-popup.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	<link rel="stylesheet" href="../css/style.css"/>



</head>
<body>
    
    <style>
    
        .rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:0.8em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
    
    </style>

	<header class="header-section">
		<div class="header-warp">
           
         
			
			<div class="header-bar-warp d-flex">
				
				
					<img src="../img/imdb-removebg-preview.png" alt="imdb-logo">
			
				<nav class="top-nav-area w-100">
                    
                  
                    
					<div class="user-panel">
						<a href="../logovanje/logout.php">Odjava</a>
                        
					</div>
                    
					<ul class="main-menu primary-menu">
						<li><a href="../registrovani/index.php">Početna</a></li>
						<li><a href="../movies/filmovi.php">Filmovi</a>
							
						</li>
						<li><a href="javascript:void(0)">Žanrovi</a>
                        
                        <ul class="sub-menu">
								<li><a href="akcija.php">Akcija</a></li>
                            
                                <li><a href="avantura.php">Avantura</a></li>
                            
                                <li><a href="biografija.php">Biografija</a></li>
                            <li><a href="drama.php">Drama</a></li>
                            <li><a href="epika.php">Epika</a></li>
                            <li><a href="istorija.php">Istorija</a></li>
                            <li><a href="komedije.php">Komedije</a></li>
                            <li><a href="krimi.php">Krimi</a></li>
                            <li><a href="misterija.php">Misterija</a></li>
                            <li><a href="naucna-fantastika.php">Naučna fantastika</a></li>
                            <li><a href="romansa.php">Romansa</a></li>
                            <li><a href="triler.php">Triler</a></li>
							</ul>
                        
                        </li>
						
					</ul>
				</nav>
                
                       
                
			</div>
		</div>
	</header>
    
	<section class="page-top-section set-bg" data-setbg="../img/page-top-bg/2.jpg">
		<div class="page-info">
			<h2>Epika</h2>
			<div class="site-breadcrumb">
				<a href="javascript:void(0)">Početna</a>  /
				<span>Žanrovi</span> / <span>Epika</span>
			</div>
		</div>
	</section>
	
	<section class="review-section">
		<div class="container">
			
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/avatar.jpg" alt="avatar">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.8</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="naucna-fantastika.php">Naučna fantastika, </a><a href="epika.php">Epika</a></div>
							<h3>Avatar</h3>
							<p>Avatar (poznat i pod imenom Džejms Kameronov Avatar s ciljem distinkcije, a u 3-D svetu pod imenom Avatar: IMAX 3D iskustvo., engl. James Cameron's Avatar) je epski naučnofantastični film reditelja Džejmsa Kamerona. Avatar spada u jedne od najočekivanijih filmova prve decenije novog milenijuma, a sa budžetom u iznosu od preko 30 milijardi srpskih dinara spada i u praktično najskuplji filmski projekat svih vremena.

Avatar je epska pustolovina, koja se odigrava u nepoznatom svetu na planeti Pandora...</p>
							<a href="../filmovi/avatar.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
		</div>
	</section>
	
	<footer class="footer-section">
		<div class="container">
			
			<a href="#" class="footer-logo">
				<img src="../img/imdb-removebg-preview.png" alt="logo">
			</a>
			
			<div class="footer-social d-flex justify-content-center">
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				
			</div>
			<div class="copyright"><a href="">Miloš Stevanović</a> 2021 </div>
		</div>
	</footer>
	
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.slicknav.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/jquery.sticky-sidebar.min.js"></script>
	<script src="../js/jquery.magnific-popup.min.js"></script>
	<script src="../js/main.js"></script>

	</body>
</html>
