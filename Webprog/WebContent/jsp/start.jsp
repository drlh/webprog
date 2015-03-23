<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
</html>

<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Bewertungsportal">
<meta name="author" content="AR:chitecture e.V.">

<title>AR:chitecture e.V. | Service</title>
<link rel="icon" href="favicon.ico">

<!-- Bootstrap Core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="../css/agency.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet"
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
				<a class="navbar-brand page-scroll" href="http://localhost/Webprog/index.php">AR:chitecture
					e.V.</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="http://localhost/Webprog/index.php#kategorien">Kategorien</a>
					</li>
					<li><a class="page-scroll" href="http://localhost/Webprog/service.php">Service</a></li>
					<li><a class="page-scroll" href="http://localhost/Webprog/contact.php">Kontakt</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<!-- Fill to execute page-scroll -->
	<div class="fill"></div>
	<!-- Content -->
	<section id="content" class="bg-darkest-gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading white">
						Preis
						<wbr>
						rechner
					</h2>
					<h3 class="section-subheading text-muted" style="color: #fff;">
						Sie wollen ein Fertighaus aus unserem Protfolio?<br>
						Berechnen sie hier den voraussichtlichen Preis.
					</h3>
				</div>
			</div>
			<!-- Form für Preisberechnung -->
			<form id="form" class="form-horizontal" action="preis.jsp"
				method="POST">
				<div class="row">
					<div class="form-group">
						<label for="preis_stil" class="col-md-4 control-label white">Architekturstil</label>
						<div class="col-md-8">
							<select id="preis_stil" name="preis_stil" class="form-control"
								value="0">
								<option value="0">Brutalismus</option>
								<option value="1">Minimalismus</option>
								<option value="2">Postmoderne</option>
								<option value="3">Jugendstil</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="preis_qm" class="col-md-4 control-label white">Fläche
							in qm²</label>
						<div class="col-md-8">
							<input id="preis_qm" type="number" name="preis_qm"
								class="form-control" value="1" validate required />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="preis_stockw" class="col-md-4 control-label white">Stockwerke</label>
						<div class="col-md-8">
							<input id="preis_stockw" type="number" name="preis_stockw"
								class="form-control" value="1" validate required />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="preis_pool" class="col-md-4 control-label white">Pool</label>
						<div class="col-md-8">
							<select id="preis_pool" name="preis_pool" class="form-control"
								value="0">
								<option value="0">Nein</option>
								<option value="1">Ja</option>
							</select>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="form-group">
						<label for="preis_keller" class="col-md-4 control-label white">Keller</label>
						<div class="col-md-8">
							<select id="preis_keller" name="preis_keller"
								class="form-control" value="0">
								<option value="0">Nein</option>
								<option value="1">Ja</option>
							</select>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="preis_email" class="col-md-4 control-label white">Email</label>
						<div class="col-md-8">
							<input id="preis_email" type="email" name="preis_email"
								class="form-control" placeholder="1@1.de" validate required />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<div class="col-md-4"></div>
						<div class="col-md-8">
							<input class="btn btn-primary" type="submit" value="Senden" />
						</div>
					</div>
				</div>
			</form>
		</div>



		<div class="row">
			<div class="col-lg-12 text-center">
				<h3 class="section-subheading text-muted" style="color: #fff;">
					Sie sind noch kein Mitglied? <br> <a href="signup.html">Melden
						Sie sich an!</a>
				</h3>
			</div>
		</div>
		</div>
	</section>

	<!-- Footer -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<span class="copyright">Copyright &copy; AR:chitecture e.V.
						2015</span>
				</div>
				<div class="col-md-4">
					<iframe
						src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fweb334.c20.webspace-verkauf.de%2Fwebprog%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35"
						scrolling="no" frameborder="0"
						style="border: none; overflow: hidden; height: 35px; margin-top: 10px;"
						allowTransparency="true"></iframe>
				</div>
				<div class="col-md-4">
					<ul class="list-inline quicklinks">
						<li><a href="impressum.html">Impressum</a></li>
						<li><a href="impressum.html#datenschutz">Datenschutz</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="../js/jquery.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="../js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script
		src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="../js/classie.js"></script>
	<script src="../js/cbpAnimatedHeader.js"></script>

	<!-- Contact Form JavaScript -->
	<script src="../js/jqBootstrapValidation.js"></script>
	<!--  <script src="../js/contact_me.js"></script> -->

	<!-- Custom Theme JavaScript -->
	<script src="../js/agency.js"></script>
	<script src="../js/ajax.js"></script>

</body>

</html>
