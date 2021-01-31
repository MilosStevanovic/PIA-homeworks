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
								<li><a href="../zanrovi/akcija.php">Akcija</a></li>
                            
                                <li><a href="../zanrovi/avantura.php">Avantura</a></li>
                            
                                <li><a href="../zanrovi/biografija.php">Biografija</a></li>
                            <li><a href="../zanrovi/drama.php">Drama</a></li>
                            <li><a href="../zanrovi/epika.php">Epika</a></li>
                            <li><a href="../zanrovi/istorija.php">Istorija</a></li>
                            <li><a href="../zanrovi/komedije.php">Komedije</a></li>
                            <li><a href="../zanrovi/krimi.php">Krimi</a></li>
                            <li><a href="../zanrovi/misterija.php">Misterija</a></li>
                            <li><a href="../zanrovi/naucna-fantastika.php">Naučna fantastika</a></li>
                            <li><a href="../zanrovi/romansa.php">Romansa</a></li>
                            <li><a href="../zanrovi/triler.php">Triler</a></li>
							</ul>
                        
                        </li>
						
					</ul>
				</nav>
                
                       
                
			</div>
		</div>
	</header>
	
	<section class="page-top-section set-bg" data-setbg="../img/movies-backg.jpg">
		<div class="page-info">
			<h2>Lista poslednjih želja</h2>
			<div class="site-breadcrumb">
				<span>Početna</span>  /
				<span>Filmovi</span>
			</div>
		</div>
	</section>
	
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="../img/filmovi-2/bucket-list.jpg" alt="bucket-list">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					
					<h2 class="gs-title">Lista poslednjih želja</h2>
					<h4>O filmu</h4>
					<p>
Mehaničar Karter Čejmbers (Morgan Frimen) i milijarder Edvard Koul(Džek Nikolson) po prvi put se sreću u bolnici nakon što im je oboma dijagnostikovan rak. Dok prolaze kroz različite tretmane, njih dvojica postaju dobri prijatelji.<br><br>

Karter je briljanti istoričar i porodični čovek koji je oduvek želeo da postane profesor istorije ali nije uspeo, jer kako kaže, u mladosti je bio bez para, pogrešne boje kože te sa detetom na putu. Koul je ekscentrični usamljenik, čovek koji se četiri puta razvodio te mu ništa ne predstavlja veće zadovoljstvo nego mučenje svog asistenta Metjua (Šon Hejz), kog on zove Tomas.
<br><br>
Uskoro obojica saznaju da imaju manje od godinu dana života, pa Karter počinje da sastavlja listu stvari koji bi želeo da uradi pre nego što umre. Iako nije ozbiljno razmišljao o tome, nakon nagovaranja od strane Koula koji obeća da će on platiti za sve, Karter dovrši listu. Par kreće na putovanje oko sveta, upuštajući se na sve od trke automobilima do skakanja padobranom i penjanja piramidama. Dodajući i brišući nove stvari na listu, njih dvojica se počnu baviti teškim pitanjima i još težim odgovorima koji muče sve nas.<br><br>
                        
                    Žanr: avantura, komedija, drama. <br><br>
                        
                    Glumci: Džek Nikolson, Morgan Friman, Sin Hejs.
                    
                    </p>
					
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">PODACI</h4>
								<ul>
									<li>Godina izlaska<span>2007.</span></li>
									
									<li>Scenario<span>Džastin Zekam</span></li>
									<li>Režiser<span>Rob Rajner</span></li>
									<li>Trajanje<span>97 min.</span></li>
								</ul>
								<div class="rating">
									<h5><i>Ocena</i><span>7.4</span> / 10</h5>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title">Oceni film</h4>
								
                                    
                                    
<div class="rate">
    
    <input type="radio" id="star10" name="rate" value="10" />
    <label for="star10" title="10">10 </label>
    <input type="radio" id="star9" name="rate" value="9" />
    <label for="star9" title="9">9 </label>
    <input type="radio" id="star8" name="rate" value="8" />
    <label for="star8" title="8">8 </label>
    <input type="radio" id="star7" name="rate" value="7" />
    <label for="star7" title="7">7 </label>
    <input type="radio" id="star6" name="rate" value="6" />
    <label for="star6" title="6">6 </label>
    
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="5">5 </label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="4">4 </label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="3">3 </label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="2">2 </label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="1">1 </label>
</div>
								
							</div>
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
