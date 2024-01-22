<?php
$login=$_POST["login"];
$passwd=$_POST["passwd"];
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date_naiss=$_POST["date_naiss"];
$heure=$_POST["heure"];
$mail=$_POST["mail"];
$sexe=$_POST["sexe"];
$foot=$_POST["foot"];
$hand=$_POST["hand"];
$tennis=$_POST["tennis"];
$remarques=$_POST["remarques"];
$pays1=$_POST["pays1"];
$pays=$_POST["pays"];
require("config.php");
##$conn=mysqli_connect($server,$username,$db) or die ("Probléme de connexion au serveur");
$sql="insert into users values ('$login','$passwd','$nom','$prenom','$date_naiss','$heure','$mail','$sexe',$foot,$hand,$tennis,'$remarques','$pays');";
if (!isset($foot)){
    $foot="N";
}
if (!isset($hand)){
    $hand="N";
}
if (!isset($tennis)){
    $tennis="N";
}
























?>