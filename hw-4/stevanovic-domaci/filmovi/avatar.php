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
			<h2>Avatar</h2>
			<div class="site-breadcrumb">
				<span>Početna</span>  /
				<span>Filmovi</span>
			</div>
		</div>
	</section>
	
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="../img/filmovi-2/avatar.jpg" alt="avatar">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					
					<h2 class="gs-title">Avatar</h2>
					<h4>O filmu</h4>
					<p>Avatar (poznat i pod imenom Džejms Kameronov Avatar s ciljem distinkcije, a u 3-D svetu pod imenom Avatar: IMAX 3D iskustvo., engl. James Cameron's Avatar) je epski naučnofantastični film reditelja Džejmsa Kamerona. Avatar spada u jedne od najočekivanijih filmova prve decenije novog milenijuma, a sa budžetom u iznosu od preko 30 milijardi srpskih dinara spada i u praktično najskuplji filmski projekat svih vremena.
                    <br><br>
                        
                        Avatar je epska pustolovina, koja se odigrava u nepoznatom svetu na planeti Pandora. Zemaljska civilizacija se sprema da iskoristi blago te planete redak mineral koji bi rešio energetsku krizu na zemlji, što bi značilo kraj tamošnje kulture i civilizacije. Džejk Suli bivši marinac, koji je invalid se prihvata posla oko toga da se starosedeoci pobede. Pošto je atmosfera Pandore otrovan za ljude Džejk dobija jedno biološko telo kojeg može da upravlja iz daljine, i koje telo je zdravo. Avatari su hibridi ljudskog DNK i naroda sa pandore Navi. Njegov je zadatak da se infiltrira među Navije, ali se upoznaje sa lepom Nejtiri, koja mu spašava život. Džejka prihvata i njen klan. Tako da će upoznati civilizaciju vanzemaljaca, koju će prihvatiti kao vlastitu, i uprkos svoje misije vodiće borbu za njen opstanak.<br><br>
                        
                    Žanr: naučna fantastika, epika. <br><br>
                        
                    Glumci: Sem Vortington, Zoi Saldana, Sigorni Viver, Mišel Rodrigez, Stiven Lang.
                    
                    </p>
					
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">PODACI</h4>
								<ul>
									<li>Godina izlaska<span>2009.</span></li>
									
									<li>Scenario<span>Džejms Kameron</span></li>
									<li>Režiser<span>Džejms Kameron</span></li>
									<li>Trajanje<span>162 min.</span></li>
								</ul>
								<div class="rating">
									<h5><i>Ocena</i><span>7.8</span> / 10</h5>
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
