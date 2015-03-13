<?php
// Prüfe, ob Felder leer sind
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['number']) 		||
   empty($_POST['street'])		||
   empty($_POST['plz']) 		||
   empty($_POST['city'])		||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Fehlende Werte!";
	return false;
   }

//Eingaben in Variablen speichern   
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$street = $_POST['street'];
$plz = $_POST['plz'];
$city = $_POST['city'];

//Datenbankverbindung aufbauen
$db = mysqli_connect("localhost:3306",
					 "",
					 "Ew1x4kWj",
					 "web334_kunden");
					 
if(!$db) {
	exit("Fehler: ".mysqli_connect_error());
}

//Daten in Tabelle schreiben
$query = "INSERT INTO kunden VALUES ('$name', '$email', '$number', '$street', '$plz', '$city')";
$db = mysqli_query($query);

if($db != true) {
	echo "Speichern nicht erfolgreich!"
}

//Datenbankverbindung schließen
$db = mysqli_close();
$query = "";
?>