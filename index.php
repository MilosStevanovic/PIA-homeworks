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


?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>IMDB sajt</title>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="../img/logo-imdb.jpg" rel="shortcut icon">

	
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/slicknav.min.css">
	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">
	<link rel="stylesheet" href="../css/animate.css">

	
	<link rel="stylesheet" href="../css/style.css">



</head>
<body>
    
    
    
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
								<li><a href="">Akcija</a></li>
                            
                                <li><a href="">Avantura</a></li>
                            
                                <li><a href="">Biografija</a></li>
                            <li><a href="">Drama</a></li>
                            <li><a href="">Epika</a></li>
                            <li><a href="">Istorija</a></li>
                            <li><a href="">Komedije</a></li>
                            <li><a href="">Krimi</a></li>
                            <li><a href="">Misterija</a></li>
                            <li><a href="">Naučna fantastika</a></li>
                            <li><a href="">Romansa</a></li>
                            <li><a href="">Triler</a></li>
							</ul>
                        
                        </li>
						
					</ul>
				</nav>
                
                     
			</div>
		</div>
	</header>
	
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="../img/wolf-of-wall-street-bg.jpg">
				<div class="container">
					<h2>VUK SA VOL STRITA</h2>
					<p style="color:white; ">Novi filmski klasik Martina Skorsezea, zasnovan na istinitoj životnoj priči Džordana Belforta. </p>
					<a href="../filmovi/vuk-sa-vol-strita.html" class="site-btn">Saznaj više  <img src="../img/icons/double-arrow.png" alt="dicaprio"></a>
				</div>
			</div>
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="../img/green-book-bg.jpg">
				<div class="container">
					<h2>ZELENA KNJIGA</h2>
					<p style="color:white; ">Zasnovan na istinitoj priči, film prati neobrazovanog, ali dovitljivog izbacivača italo-američkog porekla koji postaje vozač afro-američkog klasičnog pijaniste.</p>
					<a href="../filmovi/zelena-knjiga.html" class="site-btn">Saznaj više  <img src="../img/icons/double-arrow.png" alt="green-book"></a>
				</div>
			</div>
            
            <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="../img/focus-bg.jpg">
				<div class="container">
					<h2>FOKUS</h2>
					<p style="color:darkviolet;">Inteligentna i napeta komedija, ali i ozbiljan film koji pokazuje šta sve može da se desi kada nam neko pomuti razum pa izgubimo fokus.</p>
					<a href="../filmovi/fokus.html" class="site-btn">Saznaj više  <img src="../img/icons/double-arrow.png" alt="focus"></a>
				</div>
			</div>
		</div>
	</section>
	
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">Gledajte napete <a href="../zanrovi/triler.html">trilere</a></div>
						<h3>Najbolji trileri samo na IMDb-u!</h3>
						<p>Ukoliko želite da zajedno sa glavnim junacima jurite ka kraju filma, saznate odgovor na pitanje ko je ubica ili sami donesete teške zaključke, ovaj žanr je ono što vam treba!</p>
						<a href="../zanrovi/triler.html" class="read-more">TRILERI  <img src="../img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">Smejte se uz <a href="../zanrovi/komedije.html">komedije</a></div>
						<h3>Opustite se uz dobru komediju</h3>
						<p>IMDb sajt poseduje sjajne filmove koji garantuju smeh i uživanje, bilo da želite da se opustite uz klasičnu ili pak romantičnu komediju. Izaberite, zavalite se i glasno se smejte!</p>
						<a href="../zanrovi/komedije.html" class="read-more">KOMEDIJE  <img src="../img/icons/double-arrow.png" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">11.11.18  /  in <a href="">Reviews</a></div>
						<h3>Evergreen klasici bez premca</h3>
						<p>Titanik, Vuk sa Vol Strita, Krvavi dijamant su samo neki od filmskih klasika koji će publici zauvek oduzimati dah. Sjajna glumačka postava i specijalni efekti garant su dobrog vremena za ekranom!</p>
						<a href="javascript:void(0)" class="read-more">KLASICI  </a>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>NAŠA PREPORUKA</h2>
					</div>
					
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="../img/preporuke/wolf-of-wall-street.jpg" alt="wolf-of-wall-street">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">GODINA IZLASKA: 2013.</div>
							<h3>VUK SA VOL STRITA</h3>
							<p>Vuk sa Vol strita (engl. The Wolf of Wall Street) je američka crna komedija u režiji Martina Skorsezea iz 2013. godine, snimljena po istoimenoj knjizi memoara Džordana Belforta, dok je scenario napisao Terens Vinter. Priča iz Belfortove perspektive prati karijeru ovog berzanskog posrednika u Njujorku i to kako je njegova firma Stratton Oakmont bila umešane u korupciju i mnoge ilegalne akcije na Vol stritu, što je na kraju dovelo do njegovog propasti.</p>
							<a href="../filmovi/vuk-sa-vol-strita.html" class="read-more">DETALJNIJE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
					
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="../img/preporuke/in-the-pursuit-of-happyness.jpg" alt="in-the-pursuit-of-happyness">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">GODINA IZLASKA: 2006.</div>
							<h3>U POTRAZI ZA SREĆOM</h3>
							<p>U filmu Kris Gardner (Vil Smit) tumači ulogu porodičnog čoveka koji se bori da sastavi kraj sa krajem. Uprkos njegovim odvažnim naporima da održi porodicu na okupu, majka (Tandi Njuton) njegovog petogodišnjeg sina Kristofera (Džejden Kristofer Sajer Smit) popušta pod stalnim pritiskom finansijske nesigurnosti. Kada više nije u stanju da ga podnosi, ona nevoljno rešava da ih napusti.</p>
							<a href="../filmovi/u-potrazi-za-srecom.html" class="read-more">DETALJNIJE  <img src="../img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					
					<div class="blog-item">
						<div class="blog-thumb">
							<img src="../img/preporuke/contratiempo.jpg" alt="contratiempo">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">GODINA IZLASKA: 2016.</div>
							<h3>NEVIDLJIVI SVEDOK</h3>
							<p>Nevidljivi svedok je španski krimi triler iz 2017. godine. To je drugi triler reditelja Oriola Paula posle filma Telo (film iz 2012). Film je prvi put prikazan u Španiji 6. januara 2017. godine.Film ima dosta pozitivnih komentara na brojnim platformama. Dostigao je veliki komercijalni uspeh, koji iznosi 30,5 miliona dolara u odnosu na početni budžet koji je iznosio 4 miliona evra.</p>
							<a href="../filmovi/nevidljivi-svedok.html" class="read-more">DETALJNIJE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">NAJPOPULARNIJI</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
                                        <a href="../filmovi/sluga.html"><img src="../img/najpopularniji/holop.jpg" alt="sluga"></a>
									</div>
									<div class="tw-text">
										<div class="tw-meta"><a href="../zanrovi/komedije.html">Komedija</a></div>
                                        <a href="../filmovi/sluga.html"><h5>Sluga - novi ruski hit film!</h5></a>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
                                        <a href="../filmovi/prijatelji-sa-povlasticama.html"><img src="../img/najpopularniji/friends-with-benefits.jpg" alt="friends-with-benefits"></a>
									</div>
									<div class="tw-text">
										<div class="tw-meta"><a href="../zanrovi/komedije.html">Komedija, </a><a href="../zanrovi/romansa.html">Romansa</a></div>
                                        <a href="../filmovi/prijatelji-sa-povlasticama.html"><h5>Oni su prijatelji - sa povlasticama!</h5></a>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
                                        <a href="../filmovi/gospoda.html"><img src="../img/najpopularniji/the-gentlemen.jpg" alt="the-gentlemen"></a>
									</div>
									<div class="tw-text">
										<div class="tw-meta"><a href="../zanrovi/akcija.html">Akcija,</a> <a href="../zanrovi/komedije.html">Komedija,</a> <a href="../zanrovi/drama.html">Drama</a></div>
                                        <a href="../filmovi/gospoda.html"><h5>Gospoda Gaja Ričija</h5></a>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
                                        <a href="../filmovi/voleti-pabla.html"><img src="../img/najpopularniji/loving-pablo.jpg" alt="loving-pablo"></a>
									</div>
									<div class="tw-text">
										<div class="tw-meta"><a href="../zanrovi/biografija.html">Biografski,</a> <a href="../zanrovi/krimi.html">Krimi,</a> <a href="../zanrovi/drama.html">Drama</a></div>
                                        <a href="../filmovi/voleti-pabla.html"><h5>Voleti Pabla</h5></a>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">Kategorije</h4>
								<ul>
									<li><a href="../zanrovi/akcija.html">Akcija</a></li>
									<li><a href="../zanrovi/avantura.html">Avantura</a></li>
									<li><a href="../zanrovi/biografija.html">Biografija</a></li>
									<li><a href="../zanrovi/krimi.html">Krimi</a></li>
									<li><a href="../zanrovi/drama.html">Drama</a></li>
									<li><a href="../zanrovi/komedija.html">Komedija</a></li>
                                    
                                    <li><a href="../zanrovi/naucna-fantastika.html">Naučna fantastika</a></li>
									<li><a href="../zanrovi/epika.html">Epika</a></li>
									
									<li><a href="../zanrovi/triler.html">Triler</a></li>
									<li><a href="../zanrovi/romansa.html">Romansa</a></li>
									<li><a href="../zanrovi/istorija.html">Istorija</a></li>
                                    <li><a href="../zanrovi/misterija.html">Misterija</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
						<a href="#" class="add">
							<img src="../img/jv-uskoro.jpg" alt="juzni-vetar">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="intro-video-section set-bg d-flex align-items-end" data-setbg="../img/jedini-izlaz-bg.jpg">
		<a href="../jedini-izlaz.mp4" class="video-play-btn video-popup"><img src="../img/icons/solid-right-arrow.png" alt="#"></a>
        
       
        
        
	</section>
    
    
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="../img/movies-1.jpg"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">MESTO NAJBOLJIH FILMOVA</div>
				<h3>IMDB - uvek uz vas</h3>
				<p>IMDb (Internet Movie Database, srp. Filmska internet baza podataka) američki je veb-sajt koji poseduje bazu podataka o svim poznatijim filmskim i televizijskim ličnostima, filmovima, televizijskim emisijama, serijama, reklamama i video-igrama. Internet gigant Amazon je aprila 1998. godine kupio IMDb, a 2002. godine mu je proširena funkcionalnost tako što je dodat IMDbPro, čije se korišćenje naplaćuje.<br><br>

Na lokaciji se nalaze spiskovi 250 najboljih filmova i 100 najlošijih filmova svih vremena, a zasnivaju se isključivo na ocenama redovnih korisnika ove lokacije.</p>
				<a href="../movies/filmovi.php" class="read-more">SVI FILMOVI  <img src="../img/icons/double-arrow.png"></a>
			</div>
		</div>
	</section>
	
	
	<footer class="footer-section">
		<div class="container">
			
			
				<img src="../img/imdb-removebg-preview.png" alt="logo">
			
			
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