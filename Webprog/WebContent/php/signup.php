<?php
//Eingaben in Variablen speichern   
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];

//Datenbankverbindung aufbauen
$db = mysqli_connect("localhost",
					 "root",
					 "",
					 "webprog");
					 
if(!$db) {
	exit("Fehler: ".mysqli_connect_error());
}

//Daten in Tabelle schreiben
$query = "INSERT INTO user VALUES ('$email', '$password', '$number')";
$ergebnis = mysqli_query($db, $query);

if($ergebnis != true) {
	echo "Speichern nicht erfolgreich!";
}

else {
	header('Location: ../service.html');
}

//Datenbankverbindung schließen
mysqli_close($db);
$query = "";
?>