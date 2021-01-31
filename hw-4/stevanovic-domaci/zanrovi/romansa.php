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
			<h2>Romansa</h2>
			<div class="site-breadcrumb">
				<a href="javascript:void(0)">Početna</a>  /
				<span>Žanrovi</span> / <span>Romansa</span>
			</div>
		</div>
	</section>
	
	<section class="review-section">
		<div class="container">
			
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/perdona-me.jpg" alt="perdona-me">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>6.5</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="romansa.php">Romansa, </a><a href="avantura.php">Avantura</a></div>
							<h3>Izvini, ali ti si moja ljubav</h3>
							<p>Aleks ima 37 godina. On je kreativni direktor jedne od prestižnih firmi u Španiji i ostavljen je od svoje dugogodišnje partnerke nakon što ju je zaprosio. Nije spreman da se suoči sa promenom koja ga je zadesila. Ostao je sam, a posao mu i ne ide baš najbolje. Čitav splet okolnosti pruža super priliku njegovom kolegi i rivalu da konačno zauzme njegovo mesto u firmi... Ali, ljubav uvek dolazi kad joj se najmanje nadamo. To se upravo desilo Aleksu, Dok je vozio ulicom "Del Korso" naleteo je na 17 godišnju Niki...</p>
							<a href="../filmovi/izvini-ali-ti-si-moja-ljubav.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/palme-u-snegu.jpg" alt="palme-u-snegu">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.4</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="romansa.php">Romansa </a></div>
							<h3>Palme u snegu</h3>
							<p>Godine 1954., mladić Kilijan ostavlja za sobom sneg na planinama španske pokrajine Uesko kako bi zajedno sa bratom Hakobom otputovao u nepoznate, daleke i egzotične predele. U unutrašnjosti večno raskošno zelene i tople španske kolonije, otac ih dočekuje na plantaži Sampaka, na kojoj se uzgaja najbolji kakao na svetu. Tamo mladići otkrivaju lakoću socijalnog života u poređenju sa krutim društvenim odnosima u rodnoj...</p>
							<a href="../filmovi/palme-u-snegu.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/friends-with-benefits.jpg" alt="friends-with-benefits">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>6.5</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="komedije.php">Komedija, </a><a href="romansa.php">Romansa</a></div>
							<h3>Prijatelji sa povlasticama</h3>
							<p>Prijatelji sa povlasticama (engl. Friends with Benefits) američka je romantična komedija iz 2011. godine koju je režirao Vil Glak, a u kojoj glavne ulove tumače Džastin Timberlejk i Mila Kunis. U filmu se pojavljuju i Patriša Klarkson, Džena Elfman, Brajan Grinberg, Nolan Guld, Ričard Dženkins i Vudi Harelson u sporednim ulogama. Zaplet se vrti oko Dilana Harpera (Timberlejk) i Džejmi Relis (Kunis), koji se sastaju u Njujorku, i naivno veruju da dodavanje seksa njihovom prijateljstvu neće dovesti do komplikacija...</p>
							<a href="../filmovi/prijatelji-sa-povlasticama.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/revolucionarni-put.jpg" alt="revolucionarni-put">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.3</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="romansa.php">Romansa</a></div>
							<h3>Revolucionarni put</h3>
							<p>Frenk i Ejpril su oduvek sebe videli kao posebne, drugačije i spremne da žive život zasnovan na većim idealima. Tako su, čim su se doselili u svoju novu kuću na Revolucionarnom putu, ponosno objavili svoju nezavisnost od inertnosti predgrađa koja ih okružuje i odlučili da nikada neće biti zarobljeni u društvene stege svog doba. I pored svog šarma, lepote i nepoštovanja normi, Vilerovi shvataju da su postali upravo ono što nisu očekivali: dobar čovek sa stabilnim poslom i bez petlje, ne baš srećna domaćica gladna ispunjenja i strasti...</p>
							<a href="../filmovi/revolucionarni-put.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/terminal.jpg" alt="terminal">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.4</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="komedije.php">Komedija, </a><a href="drama.php">Drama, </a><a href="romansa.php">Romansa </a></div>
							<h3>Terminal</h3>
							<p>Viktor Navorski (Tom Hanks), stanovnik istočne Evrope, dolazi u New York u najnezgodnijem trenutku. Naime, nekoliko trenutaka pre nego je njegov avion trebao da poleti u njegovoj je državi izbio je rat koji je razbio njeno jedinstvo pa američke vlasti ne mogu prihvatiti Viktorov pasoš kao valjan. On se iznenada nađe u nestvarnoj situaciji: nije mu dozvoljen ulazak u Ameriku, a nemoguće ga je deportirtovati.

Navorski mora da ostane...</p>
							<a href="../filmovi/terminal.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/titanik.jpg" alt="titanik">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.8</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="romansa.php">Romansa </a></div>
							<h3>Titanik</h3>
							<p>Radnja filma započinje 1996. godine kada lovac na blago, Brok Lovet, zajedno sa svojim timom zaranja duboko u Atlantski okean prema olupini Titanika u potrazi za vrednom dijamantskom ogrlicom. Nakon što u sefu pronađu crtež mlade devojke koja nosi ogrlicu i isti objave putem medija, ubrzo im se javlja stara gospođa koja tvrdi da je upravo ona devojka sa crteža. Pomoću naracije, stara Rouz vraća gledaoce u 1912. godinu, u luku Sauthempton odakle Titanik kreće na svoje prvo putovanje...</p>
							<a href="../filmovi/titanik.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
