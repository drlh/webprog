<?php 
session_start(); 
?> 

<?php 
$verbindung = mysql_connect("localhost", "root" , "") 
or die("Verbindung zur Datenbank konnte nicht hergestellt werden"); 
mysql_select_db("webprog") or die ("Datenbank konnte nicht ausgewählt werden"); 

$email = $_POST["email"]; 
$password = $_POST["password"]; 

$abfrage = "SELECT email, password FROM user WHERE email LIKE '$email' LIMIT 1"; 
$ergebnis = mysql_query($abfrage); 
$row = mysql_fetch_object($ergebnis); 
if($row->password == $password) { 
    $_SESSION["email"] = $email; 
    header("Location: ../secure.php");
} 
else 
    { 
    echo "Benutzername und/oder Passwort waren falsch. <a href=\"service.html\">Login</a>"; 
    } 

?>