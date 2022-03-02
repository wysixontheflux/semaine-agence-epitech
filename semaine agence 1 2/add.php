<?php
require 'database.php';

if(true){ 
    $lastname=$_POST["lastname"];
    $firstname=$_POST["firstname"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql = "INSERT INTO user (lastname,firstname,email,password) values(?,?,?,?)";
    $q = $dbh->prepare($sql);
    print_r($_POST);
    $q->execute([$lastname,$firstname,$email,$password]);
    header("Location:profile.html");
    exit();
    }
?>