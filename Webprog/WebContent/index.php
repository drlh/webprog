<?php
session_start ();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description"
	content="Eingetragener Verein für Architektur-Liebhaber">
<meta name="author" content="AR:chitecture e.V.">

<title>AR:chitcture e.V. | Home</title>
<link rel="icon" href="favicon.ico">

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/agency.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet"
	type="text/css">
<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700"
	rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Kaushan+Script'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic'
	rel='stylesheet' type='text/css'>
<link
	href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700'
	rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans'
	rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">AR:chitecture
					e.V.</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="#categories">Kategorien</a></li>
					<li><a class="page-scroll" href="secure.php">Service</a></li>
					<li><a class="page-scroll" href="contact.php">Kontakt</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Header -->
	<header>
		<div class="container">
			<div class="intro-text">
				<div class="intro-lead-in">Willkommen bei AR:chitecture e.V.!</div>
				<div class="intro-heading">Nach welchem Baustil suchen Sie?</div>
				<a href="#categories" class="page-scroll btn btn-xl">Suchen!</a>
			</div>
		</div>
	</header>

	<!-- Categories Section -->
	<section id="categories" class="bg-light-gray">
		<div class="container">
			<div class="row">
				<!-- Categories -->
				<div class="col-md-3" align="center">
					<p class="lead">Kategorien</p>
					<div class="list-group" id="buttons"></div>
				</div>
				<!-- Each Entry -->
				<div class="col-md-9">
					<div class="row" id="gallery">
						<div class=" col-md-4 thumb portfolio-item"
							data-tags="Postmoderne">
							<a href="#portfolioModal1" class="thumbnail portfolio-link"
								data-toggle="modal"> <img class="img-responsive"
								src="img/architecture/postmoderne.jpg" alt="Postmoderne">
							</a>
						</div>

						<div class="col-md-4 thumb portfolio-item"
							data-tags="Minimalismus">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal2"> <img class="img-responsive"
								src="img/architecture/minimalismus.jpg" alt="Minimalismus">
							</a>
						</div>

						<div class=" col-md-4  thumb portfolio-item"
							data-tags="Postmoderne">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal3"> <img class="img-responsive"
								src="img/architecture/postmoderne2.jpg" alt="Postmoderne">
							</a>
						</div>

						<div class=" col-md-4 thumb" data-tags="Jugendstil">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal4"> <img class="img-responsive"
								src="img/architecture/jugendstil.jpg" alt="Jugendstil">
							</a>
						</div>

						<div class="col-md-4 thumb" data-tags="Brutalismus">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal5"> <img class="img-responsive"
								src="img/architecture/brutalismus.jpg" alt="Brutalismus">
							</a>
						</div>

						<div class=" col-md-4  thumb" data-tags="Minimalismus">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal6"> <img class="img-responsive"
								src="img/architecture/minimalismus2.jpg" alt="Minimalismus">
							</a>
						</div>

						<div class=" col-md-4 thumb" data-tags="Minimalismus">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal7"> <img class="img-responsive"
								src="img/architecture/minimalismus3.jpg" alt="Minimalismus">
							</a>
						</div>

						<div class="col-md-4 thumb" data-tags="Brutalismus">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal8"> <img class="img-responsive"
								src="img/architecture/brutalismus2.jpg" alt="Brutalismus">
							</a>
						</div>

						<div class=" col-md-4  thumb" data-tags="Jugendstil">
							<a class="thumbnail portfolio-link" data-toggle="modal"
								href="#portfolioModal9"> <img class="img-responsive"
								src="img/architecture/jugendstil2.jpg" alt="Jugendstil">
							</a>
						</div>

						<!-- Load More Button
					<div class="container-fluid">
						<div class="row" align="center">
							<a href="#categories" class="page-scroll btn btn-xl">Mehr Einträge laden</a>
						</div>
					</div>-->
					</div>
				</div>
				<div id="success"></div>
			</div>
	
	</section>

	<!-- Partner Aside -->
	<aside class="clients">
		<div class="container">
			<div class="row">
				<h2 align="center">Unsere Partner</h2>
				<div class="col-md-3 col-sm-6">
					<img src="img/logos/envato.jpg" class="img-responsive img-centered"
						alt="">
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="img/logos/designmodo.jpg"
						class="img-responsive img-centered" alt="">
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="img/logos/themeforest.jpg"
						class="img-responsive img-centered" alt="">
				</div>
				<div class="col-md-3 col-sm-6">
					<img src="img/logos/creative-market.jpg"
						class="img-responsive img-centered" alt="">
				</div>
			</div>
		</div>
	</aside>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<span class="copyright">Copyright &copy; AR:chitecture e.V. 2015</span>
				</div>
				<div class="col-md-3">
					<iframe
						src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fweb334.c20.webspace-verkauf.de%2Fwebprog%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35"
						scrolling="no" frameborder="0"
						style="border: none; overflow: hidden; height: 35px; margin-top: 10px;"
						allowTransparency="true"></iframe>
				</div>
				<div class="col-md-3">
					Besucher: <span id="counter">0</span>
				</div>
				<div class="col-md-3">
					<ul class="list-inline quicklinks">
						<li><a href="impressum.php">Impressum</a></li>
						<li><a href="impressum.php#datenschutz">Datenschutz</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Portfolio Modals -->
	<!-- Use the modals below to showcase details about your portfolio projects! -->

	<!-- Portfolio Modal 1 -->
	<div class="portfolio-modal modal fade" id="portfolioModal1"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Postmoderne</h2>
							<p class="item-intro text-muted">Palais d'Abraxas, Paris</p>
							<img class="img-responsive"
								src="img/architecture/postmoderne.jpg" alt="Postmoderne">
							<p>
								<a
									href="http://blog.tagesanzeiger.ch/wp-content/uploads/sites/16/2013/01/0060-640x490.jpg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://fr.wikipedia.org/wiki/Espaces_d%27Abraxas">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 1983</li> |
								<li>Ort: Paris</li> |
								<li>Kategorie: Postmoderne</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 2 -->
	<div class="portfolio-modal modal fade" id="portfolioModal2"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Minimalismus</h2>
							<p class="item-intro text-muted">Haus L&uuml;ffe Baak, Warendorf</p>
							<img class="img-responsive"
								src="img/architecture/minimalismus.jpg" alt="Minimalismus">
							<p>
								<a
									href="http://www.detail360.de/Db/DbFiles/projekte/549/foto1_profil">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://www.detail360.de/projekt/haus-lueffe-baak-pjid_549.htm">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 2005</li> |
								<li>Ort: Warendorf</li> |
								<li>Kategorie: Minimalismus</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 3 -->
	<div class="portfolio-modal modal fade" id="portfolioModal3"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Postmoderne</h2>
							<p class="item-intro text-muted">Hypo-Bank Zentrale, Bregenz</p>
							<img class="img-responsive"
								src="img/architecture/postmoderne2.jpg" alt="Postmoderne">
							<p>
								<a
									href="http://image.architonic.com/imgArc/project-1/4/5202595/Dietrich%20Untertrifaller%20Architekten-Hypo%20Bank%20Zentrale-03.jpg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://www.architonic.com/de/aisht/hypo-bank-zentrale-dietrich-untertrifaller-architekten/5100250">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 1994</li> |
								<li>Ort: Bregenz</li> |
								<li>Kategorie: Postmoderne</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 4 -->
	<div class="portfolio-modal modal fade" id="portfolioModal4"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Jugendstil</h2>
							<p class="item-intro text-muted">Cifra Palast, Kecskemet</p>
							<img class="img-responsive" src="img/architecture/jugendstil.jpg"
								alt="Postmoderne">
							<p>
								<a
									href="http://thomasmayerarchive.de/images/377/033AF20000428A006/jpg/033AF20000428A006,Reise,Ungarn,Kecskemet,Jugendstil-in-Kecskemet,-Ungarn.jpg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://de.wikipedia.org/wiki/Cifra-Palast">hier</a> mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 1902</li> |
								<li>Ort: Kecskemet</li> |
								<li>Kategorie: Jugendstil</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 5 -->
	<div class="portfolio-modal modal fade" id="portfolioModal5"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Brutalismus</h2>
							<p class="item-intro text-muted">Wotrubakirche, Wien</p>
							<img class="img-responsive"
								src="img/architecture/brutalismus.jpg" alt="Postmoderne">
							<p>
								<a href="http://666kb.com/i/cd1w1to1gjxxgvcdk.jpg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://de.wikipedia.org/wiki/Wotrubakirche">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 1976</li> |
								<li>Ort: Wien</li> |
								<li>Kategorie: Brutalismus</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 6 -->
	<div class="portfolio-modal modal fade" id="portfolioModal6"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Minimalismus</h2>
							<p class="item-intro text-muted">Haus B&ouml;rger, Lippe</p>
							<img class="img-responsive"
								src="img/architecture/minimalismus2.jpg" alt="Minimalismus">
							<p>
								<a
									href="http://www.detail360.de/Db/DbFiles/projekte/549/foto1_profil">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://www.detail360.de/projekt/haus-boerger-hautverbindungen-pjid_548.htm">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 2005</li> |
								<li>Ort: Lippe</li> |
								<li>Kategorie: Minimalismus</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 7 -->
	<div class="portfolio-modal modal fade" id="portfolioModal7"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Minimalismus</h2>
							<p class="item-intro text-muted">Drei Wand Haus, Los Angeles</p>
							<img class="img-responsive"
								src="img/architecture/minimalismus3.jpg" alt="Minimalismus">
							<p>
								<a
									href="http://innenarchitekturideen.com/wp-content/uploads/2012/08/Minimalistische-Haus-Drei-Wand-Haus-modernen-Fassade.jpg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://innenarchitekturideen.com/moderne-hauser-architektur/08/minimalistische-haus-drei-wand-haus-in-los-angeles-von-kovac-architekten.html">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: 2005</li> |
								<li>Ort: Lippe</li> |
								<li>Kategorie: Minimalismus</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 8 -->
	<div class="portfolio-modal modal fade" id="portfolioModal8"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Brutalismus</h2>
							<p class="item-intro text-muted">Kitaurawa Valley, Tokio</p>
							<img class="img-responsive"
								src="img/architecture/brutalismus2.jpg" alt="Postmoderne">
							<p>
								<a
									href="http://images.cdn.baunetz.de/img/1/3/1/4/6/0/7/0ad19fc930f2db25.jpeg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									herf="http://www.baunetz.de/meldungen/Meldungen-Wohnensemble_von_Naoya_Kawabe_2478685.html">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: unbekannt</li> |
								<li>Ort: Tokio</li> |
								<li>Kategorie: Brutalismus</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Portfolio Modal 9 -->
	<div class="portfolio-modal modal fade" id="portfolioModal9"
		tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<div class="close-modal" data-dismiss="modal">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg"
					xmlns:xlink="http://www.w3.org/1999/xlink">
					<rect x="0" y="0" width="50" height="50" stroke-width="2"
						stroke="white" fill="white" />
					<path d="M25 25 L0 0 M25 25 L50 50 M25 25 L0 50 M25 25 L50 0"
						style="stroke:grey;stroke-width:2;fill:none;" />
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2>Jugendstil</h2>
							<p class="item-intro text-muted">Wohnblock im Jugendstil, Hamburg</p>
							<img class="img-responsive"
								src="img/architecture/jugendstil2.jpg" alt="Postmoderne">
							<p>
								<a
									href="http://www.bildarchiv-hamburg.de/bezirk_hamburg_mitte/stadtteil_wilhelmsburg/99_9457_jugendstil_architektur_hamburg/99_9457_jugendstil_architektur_hamburg.jpg">Bildquelle</a>
							</p>

							<p>
								<strong>Sie wollen mehr darüber erfahren?</strong> Lesen sie <a
									href="http://www.bildarchiv-hamburg.de/bezirk_hamburg_mitte/stadtteil_wilhelmsburg/99_9457_jugendstil_architektur_hamburg.html">hier</a>
								mehr.
							</p>

							<ul class="list-inline">
								<li>Datum: unbekannt</li> |
								<li>Ort: Hamburg</li> |
								<li>Kategorie: Jugendstil</li>
							</ul>

							<button type="button" class="btn btn-primary"
								data-dismiss="modal">
								<i class="fa fa-times"></i> Schließen
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader_index.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="js/jqBootstrapValidation.js"></script>
	<script src="js/contact_me.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>
	<script src="js/filter.js"></script>

	<script type="text/javascript">
		$.getJSON( "http://localhost/Webprog/counter?page=start", function( data ) {
			$( "#counter" ).html( data["besucher"] );
		});		

	
	</script>
</body>

</html>
