<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "lecture";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
      
    // Vérifions la connexion
    // if(!$connection){
    //     die('Erreur de la connexion de la base de données : ' .mysql_error());
    // }
    
?>