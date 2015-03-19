<?php 
session_start(); 
?> 

<?php   

//Cookie setzen
$name =  $_SESSION["email"];
setcookie("login", $name, time()+3600);

if(!isset($_SESSION["email"])) { 
   header('Location: http://localhost/Webprog/service.php'); 
   exit; 
} 

else {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
	curl_setopt($ch, CURLOPT_URL, 'http://localhost/Webprog/jsp/start.jsp'); 
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_AUTOREFERER, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 10);
	echo curl_exec($ch);
}
?>


