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
<link href="../font-awesome/css/font-awesome/css/font-awesome.min.css"
	rel="stylesheet" type="text/css">
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
				<a class="navbar-brand page-scroll" href="index.html">AR:chitecture
					e.V.</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden"><a href="#page-top"></a></li>
					<li><a class="page-scroll" href="index.html#categories">Kategorien</a>
					</li>
					<li><a class="page-scroll" href="#contact">Service</a></li>
					<li><a class="page-scroll" href="contact.html">Kontakt</a></li>
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
					<h2 class="section-heading">Ihr Angebot</h2>
					<h3 class="section-subheading text-muted" style="color: #fff;">
						Hier sehen sie unser voraussichtliches Angebot für sie.<br>
						Der Endpreis richtet sich nach Aufwand und gegebenheiten vor Ort.
					</h3>
				</div>
			</div>
			<!-- Ergebnis der Preisberechnung -->
			<%!double[] preiseqm = { 1100.98, 1429.00, 1016.30, 1019.45 };
	String[] namenStile = { "Brutalismus", "Minimalismus", "Postmoderne",
			"Jugendstil" };

	int stil = -1;
	double qm = 1.0;
	int stockwerke = 1;
	int pool = 0;
	int keller = 0;

	double preis = 0.0;

	public double berechnePreis() {

		double summe = 0.0;

		if (stil >= 0) {
			summe = preiseqm[stil];
			if (qm > 1.0)
				summe *= qm;
			if (stockwerke > 1)
				summe *= (double) ((stockwerke * stockwerke) + 1);

			if (pool == 1)
				summe += 50000.00;
			if (keller == 1)
				summe += 35000.00;

			return summe;

		} else {
			return summe;
		}
	}%>

			<%
				stil = Integer.parseInt(request.getParameter("preis_stil"));
				qm = Double.parseDouble(request.getParameter("preis_qm"));
				stockwerke = Integer.parseInt(request.getParameter("preis_stockw"));
				pool = Integer.parseInt(request.getParameter("preis_pool"));
				keller = Integer.parseInt(request.getParameter("preis_keller"));

				preis = berechnePreis();
			%>

			<%=preis%>

			<style type="text/css">
.tg {
	border-collapse: collapse;
	border-spacing: 0;
	border-color: #ccc;
}

.tg td {
	font-family: Arial, sans-serif;
	font-size: 14px;
	padding: 10px 5px;
	border-style: solid;
	border-width: 1px;
	overflow: hidden;
	word-break: normal;
	border-color: #ccc;
	color: #333;
	background-color: #fff;
}

.tg th {
	font-family: Arial, sans-serif;
	font-size: 14px;
	font-weight: normal;
	padding: 10px 5px;
	border-style: solid;
	border-width: 1px;
	overflow: hidden;
	word-break: normal;
	border-color: #ccc;
	color: #333;
	background-color: #f0f0f0;
}

.tg .tg-s6z2 {
	text-align: center
}
</style>
			<table class="tg">
				<tr>
					<th class="tg-s6z2">Feld</th>
					<th class="tg-s6z2">Inhalt</th>
				</tr>
				<tr>
					<td>Stil</td>
					<td><%= namenStile[stil] %></td>
				</tr>
				<tr>
					<td>Fläche</td>
					<td><%= qm %></td>
				</tr>
				<tr>
					<td>Stockwerk(e)</td>
					<td><%= stockwerke %></td>
				</tr>
				<tr>
					<td>Keller</td>
					<td><% if(keller == 1 ) out.print("ja"); %></td>
				</tr>
				<tr>
					<td>Pool</td>
					<td><% if(pool == 1 ) out.print("ja"); %></td>
				</tr>
				<tr>
					<td><b>Preis</b></td>
					<td><%= preis %></td>
				</tr>
			</table>

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
