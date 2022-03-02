<?php
require 'database.php';

$res=false;
$email=$_GET["email"];
$password=$_GET["password"];
$emailList=[];

$query= $dbh->query("select * from user");

while ($row = $query->fetch()) {
    array_push($emailList,$row["email"]);

    if($email==$row["email"]){
        $res=true;
    }
}

if(true){
    header("Location:profile.html");
    exit();
    // renvoyer sur le site avec la personne connectée;
}else{
    //revoyer sur la page connexion avec l'erreur;
}
 