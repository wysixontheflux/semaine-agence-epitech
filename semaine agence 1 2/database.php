<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=tokencam', "root", "");
    echo"connexion db réussie<br>";
    }catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}
?>