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
			<h2>Krimi</h2>
			<div class="site-breadcrumb">
				<a href="javascript:void(0)">Početna</a>  /
				<span>Žanrovi</span> / <span>Krimi</span>
			</div>
		</div>
	</section>
	
	<section class="review-section">
		<div class="container">
			
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/lincoln-lawyer.jpg" alt="metju">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.3</span> / 10</h5>
							</div>
							<div class="top-meta"><a href="krimi.php">Krimi, </a><a href="misterija.php">Misterija, </a><a href="drama.php">Drama </a></div>
							<h3>Advokat na točkovima</h3>
							<p>Miki Haler je advokat koji brani kriminalce , a kancelariju je smestio na zadnje sedište Lincoln Continental limuzine kojom kruži ulicama Los Anđelesa . Svoj profesionalni život posvetio je odbrani šarenog društva zločinaca , a sad mu se nudi posao života : odbrana Louisa Rouleta , lepotana sa Beverli Hilsa koji je optužen za ubistvo . Slučaj koji se činio jednostavnim iznenadni sled događaja pretvoriće u smrtonosnu igru i Helerovu borbu za opstanak ...</p>
							<a href="../filmovi/advokat-na-tockovima.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/gangs-of-nyc.jpg" alt="gangs-of-nyc">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.5</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="krimi.php">Krimi, </a><a href="drama.php">Drama</a></div>
							<h3>Bande Njujorka</h3>
							<p>Bande Njujorka (engl. Gangs of New York) je film iz 2002. godine koji je režirao Martin Skorseze. U velikoj i krvavoj uličnoj bitci, ozloglašeni vođa starosedelaca, zvani "Bill the Butcher" (Danijel Dej-Luis) ubija vođu bande irskih doseljenika, sveštenika (Liam Nison) i preuzima prevlast nad ulicama Njujorka. Godine njegove okrutne vladavine obeležila je beskrajna mržnja i prezir prema svim doseljenicima. Ni ne sluti da će mu život uskoro biti ozbiljno ugrožen dolaskom mladog Amsterdama Valona (Leonardo Dikaprio), koji će učiniti sve kako bi osvetio smrt svog oca...</p>
							<a href="../filmovi/bande-njujorka.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/focus.jpg" alt="focus">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>6.6</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="komedije.php">Komedija, </a><a href="drama.php">Drama, </a><a href="krimi.php">Krimi </a></div>
							<h3>Fokus</h3>
							<p>Fokus je američka romantična kriminalistička komedija-drama iz 2015 godine. Glavne uloge u filmu imaju Vil Smit, Margo Robi i Rodrigo Santoro. Film je izašao 27. februara 2015. godine i naišao je na različite kritike, ali je imao dobru zaradu od 158 miliona,[1] a budžet od 50 miliona dolara.

Premazani prevarant Niki Sperdžen (Vil Smit) odlazi u restoran u kojem sreće neiskusnu prevaranticu Džes Baret (Margo Robi) koja ga zavodi, a zatim se pretvara...</p>
							<a href="../filmovi/fokus.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/contratiemp.jpg" alt="contratiempo">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.1</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="krimi.php">Krimi, </a><a href="misterija.php">Misterija</a></div>
							<h3>Nevidljivi svedok</h3>
							<p>Španski biznismen Adrijan Doria je na slobodi nakon što je uhapšen zbog ubistva svoje ljubavnce, Laure Vidal. Njegov advokat, Feliks Leiva, unajmljuje prestižnog branioca, Virdžiniju Gudman, koja mu jednog jutra dolazi u posetu s vestima da je tužilac pronašao svedoka koji će uskoro svedočiti pred sudom, tako da joj on mora brzo ispričati celu priču. Adrijan, kaže Virdžiniji kako su on i Laura okončali svoju aferu pre nekoliko meseci, ali su nakon toga primili poziv od ucenjivača, koji im naređuju da dođu u jedan ruralni hotel i ponesu...</p>
							<a href="../filmovi/nevidljivi-svedok.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/loving-pablo.jpg" alt="loving-pablo">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>6.3</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="biografija.php">Biografija, </a><a href="krimi.php">Krimi </a></div>
							<h3>Voleti Pabla</h3>
							<p>Film govori o emotivnoj vezi između novinarke reporterke i jednog od najvećih narko bosova svih vremena, Pabla Eskobara...</p>
							<a href="../filmovi/voleti-pabla.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/wolf-of-wall-street.jpg" alt="wolf-of-wall-street">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.2</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="komedije.php">Komedija, </a><a href="krimi.php">Krimi </a></div>
							<h3>Vuk sa Vol Strita</h3>
							<p>Vuk sa Vol strita (engl. The Wolf of Wall Street) američka je crna komedija u režiji Martina Skorsezea iz 2013. godine, snimljena po istoimenoj knjizi memoara Džordana Belforta, dok je scenario napisao Terens Vinter. Priča iz Belfortove perspektive prati karijeru ovog berzanskog posrednika u Njujorku i to kako je njegova firma Stratton Oakmont bila umešane u korupciju i mnoge ilegalne akcije na Vol stritu, što je na kraju dovelo do njegovog propasti...</p>
							<a href="../filmovi/vuk-sa-vol-strita.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
