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
			<h2>Revolucionarni put</h2>
			<div class="site-breadcrumb">
				<span>Početna</span>  /
				<span>Filmovi</span>
			</div>
		</div>
	</section>
	
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="../img/filmovi-2/revolucionarni-put.jpg" alt="revolucionarni-put">
			</div>
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7 game-single-content">
					
					<h2 class="gs-title">Revolucionarni put</h2>
					<h4>O filmu</h4>
					<p>
Frenk i Ejpril su oduvek sebe videli kao posebne, drugačije i spremne da žive život zasnovan na većim idealima. Tako su, čim su se doselili u svoju novu kuću na Revolucionarnom putu, ponosno objavili svoju nezavisnost od inertnosti predgrađa koja ih okružuje i odlučili da nikada neće biti zarobljeni u društvene stege svog doba. I pored svog šarma, lepote i nepoštovanja normi, Vilerovi shvataju da su postali upravo ono što nisu očekivali: dobar čovek sa stabilnim poslom i bez petlje, ne baš srećna domaćica gladna ispunjenja i strasti, američka porodica s izgubljenim snovima, poput svih drugih. Vođena željom da promeni sudbinu, Ejpril smišlja pustolovan plan da počnu iz početka, da napuste udobnost Konektikata zarad velike nepoznanice Pariza. Ali kada plan počne da se ostvaruje, svaki od supružnika bude gurnut u ekstreme – jedno želi da pobegne po svaku cenu, a drugo želi da sačuva sve što imaju, bez obzira na to kakve kompromise treba načiniti.<br><br>
                        
                    Žanr: romansa, drama. <br><br>
                        
                    Glumci: Leonardo DiKaprio, Kejt Vinslet, Kristofer Ficdžerald.
                    
                    </p>
					
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">PODACI</h4>
								<ul>
									<li>Godina izlaska<span>2008.</span></li>
									
									<li>Scenario<span>Džastin Hejt</span></li>
									<li>Režiser<span>Sem Mendez</span></li>
									<li>Trajanje<span>119 min.</span></li>
								</ul>
								<div class="rating">
									<h5><i>Ocena</i><span>7.3</span> / 10</h5>
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
