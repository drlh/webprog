<?php 
session_start(); 
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Eingetragener Verein für Architektur-Liebhaber">
    <meta name="author" content="AR:chitecture e.V.">

    <title>AR:chitecture e.V. | Kontakt </title>
	<link rel="icon" href="favicon.ico">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>

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
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">AR:chitecture e.V.</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php#categories">Kategorien</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="secure.php">Service</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontakt</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

	<!-- Fill to execute page-scroll -->
	<div class="fill"></div>
	<!-- Contact -->
	<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Kontaktieren Sie uns!</h2>
                    <h3 class="section-subheading text-muted" style="color: #fff;">Bei Fragen stehen wir Ihnen gerne zur Verfügung.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" action="php/contact_me.php" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Ihr Name *" id="name" required data-validation-required-message="Bitte tragen Sie Ihren Namen ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Ihre E-Mail *" id="email" required data-validation-required-message="Bitte geben Sie eine g&uuml;ltige E-Mail ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Ihre Festnetznummer *" id="phone" required data-validation-required-message="Bitte geben Sie Ihre Festnetznummer ein.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Ihre Nachricht an uns *" id="message" required data-validation-required-message="Bitte geben Sie eine Nachricht ein."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Nachricht absenden</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</section>
	
	<!-- Anfahrt -->
	<section id="anfahrt" class="bg-light-gray">
	<div class="container-fluid">
			<div class="row">
			    <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Sie wollen uns besuchen?</h2>
                    <h3 class="section-subheading text-muted">Folgen Sie unserer Adresse auf folgender Karte!</h3>
                </div>
			</div>
			<div class="row">
				<iframe scrollwheel="false" style="height: 400px; width: 100%; border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2592.603823631457!2d8.534390000000009!3d49.47310000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4797cf248128eba5%3A0x6a1d031e241f8493!2sHans-Thoma-Stra%C3%9Fe+52%2C+68163+Mannheim!5e0!3m2!1sde!2sde!4v1424445133004"></iframe>
			</div>
		</div>
	</section>
   
	<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; AR:chitecture e.V. 2015</span>
                </div>
                <div class="col-md-4">
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fweb334.c20.webspace-verkauf.de%2Fwebprog%2F&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px; margin-top: 10px;" allowTransparency="true"></iframe>
				</div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="impressum.php">Impressum</a>
                        </li>
                        <li><a href="impressum.php#datenschutz">Datenschutz</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

</body>

</html>
