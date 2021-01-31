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
			<h2>Biografija</h2>
			<div class="site-breadcrumb">
				<a href="javascript:void(0)">Početna</a>  /
				<span>Žanrovi</span> / <span>Biografija</span>
			</div>
		</div>
	</section>
	
	<section class="review-section">
		<div class="container">
			
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/dallas-buyers-club.jpg" alt="dallas-buyers-club">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.0</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="biografija.php">Biografija </a></div>
							<h3>Poslovni klub Dalas</h3>
							<p>Poslovni klub Dalas (Dallas Buyers Club) je zasnovan na istinitoj priči o tragičnoj sudbini američkog aktiviste Rona Vudrufa.

Godine 1986. Ron saznaje da ima HIV i da mu je ostalo još trideset dana života. Film prati njegovu borbu za život i promenu - od narkomana i homofoba, koji svako veče spava sa drugom ženom, do čoveka koji brani svog prijatelja transeksualca i koji ilegalno nabavlja lekove onima kojima su potrebni...</p>
							<a href="../filmovi/poslovni-klub-dalas.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/u-potrazi-za-srecom.jpg" alt="u-potrazi-za-srecom">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.0</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="biografija.php">Biografija </a></div>
							<h3>U potrazi za srećom</h3>
							<p>U filmu Kris Gardner (Vil Smit) tumači ulogu porodičnog čoveka koji se bori da sastavi kraj sa krajem. Uprkos njegovim odvažnim naporima da održi porodicu na okupu, majka (Tandi Njuton) njegovog petogodišnjeg sina Kristofera (Džejden Kristofer Sajer Smit) popušta pod stalnim pritiskom finansijske nesigurnosti. Kada više nije u stanju da ga podnosi, ona nevoljno rešava da ih napusti...</p>
							<a href="../filmovi/u-potrazi-za-srecom.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
							<img src="../img/filmovi-3/green-book.jpeg" alt="green-book">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.2</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="komedije.php">Komedija, </a><a href="biografija.php">Biografija </a></div>
							<h3>Zelena knjiga</h3>
							<p>Zelena knjiga (engl. Green Book) je američka biografska komedija-drama iz 2018. godine koju je režirao Piter Fareli. Radnja filma je smeštena u 1962. godinu, a film je inspirisan istinitom pričom o jamajkansko-američkom klasičnom i džez pijanisti Donu Šerliju (Maheršala Ali) i italijansko-američkom izbacivaču Toniju Valelongi (Vigo Mortensen) koji je bio Šerlijev vozač i telohranitelj...</p>
							<a href="../filmovi/zelena-knjiga.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
							<img src="../img/filmovi-3/the-gentlemen.jpg" alt="the-gentlemen">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.8</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="komedije.php">Komedija, </a><a href="drama.php">Drama, </a><a href="akcija.php">Akcija </a></div>
							<h3>Gospoda</h3>
							<p>Big Dejv, urednika tabloida Dejli Print, angažuje privatnog istražitelja Flečera da istraži Pirsonove poslove. Flečer nudi da svoja otkrića proda Pirsonovoj desnoj ruci Rejmondu za 20 miliona funti. Pirson, rođen u siromaštvu u SAD-u, kao stipendista dolazi na Univerzitet u Oksfordu, gde je počeo da prodaje marihuanu privilegovanim studentima. Napušta školovanje i gradi svoje kriminalno carstvo.

Sada planira da proda svoj posao američkom milijarderu Matjuu Bergeru za 400 miliona dolara kako bi se mogao mirno povući sa suprugom Rozalind...</p>
							<a href="../filmovi/fokus.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/flyboys.jpg" alt="flyboys">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>6.5</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="istorija.php">Istorija, </a><a href="drama.php">Drama, </a><a href="akcija.php">Akcija </a></div>
							<h3>Heroji neba</h3>
							<p>Film oskarovca Tonija Bila bavi se američkim pilotima koji su se borili kao dobrovoljci u francuskoj eskadrili Lafajet. Likovi nisu temeljeni na stvarnim osobama, ali veoma uspešno dočaravaju entuzijazam i iskušenja stvarnih dobrovoljaca. Izvanredna rekonstrukcija tog perioda, dobro režirane scene borbi aviona, i afirmacija 'staromodnih', a zapravo večnih vrednosti, prijateljstva, junaštva i ljubavi - veliki su aduti ovog prvorazrednog ostvarenja...</p>
							<a href="../filmovi/heroji-neba.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
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
							<img src="../img/filmovi-3/blood-diamond.jpg" alt="blood-diamond">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.0</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="avantura.php">Avantura, </a><a href="triler.php">Triler</a></div>
							<h3>Krvavi dijamant</h3>
							<p>Tokom vrhunca građanskog rata u Sijera Leoneu, sudbine dva potpuno različita čoveka će postati neraskidivo spojene. Jedan je Solomon , Mende ribar, čijeg je sina oteo Revolucionarni ujedinjeni front (RUF) i vrbovao ga u decu vojnike. Drugi je Arčer, bivši vojnik-plaćenik iz Zimbabvea, sada krijumčar dijamanata. Obojica traže isto – veliki ružičasti dijamant koji će spasiti Život Solomonovog sina ali i omogućiti Arčeru da zauvek ode iz Afrike. Kako budu sve bliži cilju, njihova nužna povezanost iz interesa će biti sve jača ali i međusobno poverenje.
..</p>
							<a href="../filmovi/krvavi-dijamant.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/bucket-list.jpg" alt="bucket-list">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.4</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="avantura.php">Avantura, </a><a href="komedije.php">Komedija</a></div>
							<h3>Lista poslednjih želja</h3>
							<p>Mehaničar Karter Čejmbers (Morgan Frimen) i milijarder Edvard Koul(Džek Nikolson) po prvi put se sreću u bolnici nakon što im je oboma dijagnostikovan rak. Dok prolaze kroz različite tretmane, njih dvojica postaju dobri prijatelji.

Karter je briljanti istoričar i porodični čovek koji je oduvek želeo da postane profesor istorije ali nije uspeo, jer kako kaže, u mladosti je bio bez para, pogrešne boje kože te sa detetom na putu. Koul je ekscentrični usamljenik, čovek koji se četiri puta razvodio...</p>
							<a href="../filmovi/lista-poslednjih-zelja.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
							<img src="../img/filmovi-3/dallas-buyers-club.jpg" alt="dallas-buyers-club">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.0</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="biografija.php">Biografija </a></div>
							<h3>Poslovni klub Dalas</h3>
							<p>Poslovni klub Dalas (Dallas Buyers Club) je zasnovan na istinitoj priči o tragičnoj sudbini američkog aktiviste Rona Vudrufa.

Godine 1986. Ron saznaje da ima HIV i da mu je ostalo još trideset dana života. Film prati njegovu borbu za život i promenu - od narkomana i homofoba, koji svako veče spava sa drugom ženom, do čoveka koji brani svog prijatelja transeksualca i koji ilegalno nabavlja lekove onima kojima su potrebni...</p>
							<a href="../filmovi/poslovni-klub-dalas.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/the-revenant.jpg" alt="the-revenant">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.0</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="akcija.php">Akcija, </a><a href="avantura.php">Avantura</a></div>
							<h3>Povratnik</h3>
							<p>Hju Glas (Leonardo Dikaprio) je vojni izviđač. On i njegov polu-indijanski sin Jastreb (Forest Gudlak), pripadaju istoj grupi zajedno sa Džon Ficdžeraldom (Tom Hardi), Džim Bridžerom (Vil Polter) pod komandom Endru Henrija (Donal Glison), uglavnom zbog lova na životinjsko krzno. Oni su stalno suočeni sa Indijancima i Francuzima. Dok je bio u lovu sa Jastrebom, Hju se vraća u logor, ali tamo dolazi do napada Indijanaca. Dok su bežali do reke, u napadu su ubijena 33 pripadnika njihove grupe.

Ficdžerald predlaže da beže u jednom pravcu...</p>
							<a href="../filmovi/povratnik.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
							<img src="../img/filmovi-3/sluga.jpg" alt="sluga">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>6.7</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="komedije.php">Komedija</a></div>
							<h3>Sluga</h3>
							<p>Mladi Grigorij, Griša (tumači ga Miloš Biković) rođen je u bogataškoj porodici. Toliko je ušuškan u svom lagodnom životu da misli kako je „iznad zakona“. Kada ode predaleko u svojim ispadima i biva suočen sa zatvorskim kaznom, njegov otac preduzima radikalne mere. Kako od razmaženog bogataša napraviti čoveka? Zbog svih ispada i problema koje stvara svojim bahatim ponašanjem, Grišin otac unajmljuje glumce i sina vraća u prošlost. Uz pomoć starog prijatelja, psihologa, otac smišlja plan da rehabilituje svog neposlušnog sina...</p>
							<a href="../filmovi/sluga.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/crazy-stupid-love.jpg" alt="crazy-stupid-love">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.4</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="komedije.php">Komedija</a></div>
							<h3>Ta luda ljubav</h3>
							<p>Kal Viver saznaje da ga žena Emili vara sa kolegom i odlučuje da se razvede. Seli se u svoj stan i očajan, večeri provodi napijajući se u raznim barovima. Jedne večeri upoznaje Džejkoba, mladog ženskaroša koji mu obećava da će ga naučiti kako da osvoji žene i spava sa kojom god poželi. Ubrzo upoznaje Kejt, koja radi kao učiteljica i nakon njenog neuverljivog prenemaganja njih dvoje spavaju zajedno. Kalova situacija se popravlja i on shvata da zaista može da bude sa kojom hoće, sve dok jednog dana u školi ne sretne Emili....</p>
							<a href="../filmovi/ta-luda-ljubav.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
						</div>
					</div>
				</div>
			</div>
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/telo.jpg" alt="telo">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>7.6</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="misterija.php">Misterija, </a><a href="triler.php">Triler </a></div>
							<h3>Telo</h3>
							<p>Detektiv Hajme traži leš žene koji je nestao iz mrtvačnice. U međuvremenu počinje da ga proganja prošlost, nakon što shvata da je nestalo telo jedne žene po imenu Maika Vilaverde. Radeći na ovom slučaju on ispituje kako je telo moglo da nestane iz mrtvačnice i nestane bez traga, s tim da je jedini svedok čuvar koga je te noći sigurnosna kamera usnimila kako beži sa posla, te ga kasnije udara automobil i on ostaje mrtav na licu mesta...</p>
							<a href="../filmovi/telo.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/u-potrazi-za-srecom.jpg" alt="u-potrazi-za-srecom">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.0</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="biografija.php">Biografija </a></div>
							<h3>U potrazi za srećom</h3>
							<p>U filmu Kris Gardner (Vil Smit) tumači ulogu porodičnog čoveka koji se bori da sastavi kraj sa krajem. Uprkos njegovim odvažnim naporima da održi porodicu na okupu, majka (Tandi Njuton) njegovog petogodišnjeg sina Kristofera (Džejden Kristofer Sajer Smit) popušta pod stalnim pritiskom finansijske nesigurnosti. Kada više nije u stanju da ga podnosi, ona nevoljno rešava da ih napusti...</p>
							<a href="../filmovi/u-potrazi-za-srecom.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
            
            <div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							<img src="../img/filmovi-3/green-book.jpeg" alt="green-book">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Ocena</i><span>8.2</span> / 10</h5>
							</div>
                            <div class="top-meta"><a href="drama.php">Drama, </a><a href="komedije.php">Komedija, </a><a href="biografija.php">Biografija </a></div>
							<h3>Zelena knjiga</h3>
							<p>Zelena knjiga (engl. Green Book) je američka biografska komedija-drama iz 2018. godine koju je režirao Piter Fareli. Radnja filma je smeštena u 1962. godinu, a film je inspirisan istinitom pričom o jamajkansko-američkom klasičnom i džez pijanisti Donu Šerliju (Maheršala Ali) i italijansko-američkom izbacivaču Toniju Valelongi (Vigo Mortensen) koji je bio Šerlijev vozač i telohranitelj...</p>
							<a href="../filmovi/zelena-knjiga.php" class="read-more">SAZNAJ VIŠE  <img src="../img/icons/double-arrow.png"></a>
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
