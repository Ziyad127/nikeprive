<?php
    try{
        $bdd= new PDO("mysql:host=localhost;dbname=nikeprive", "root", "");
    }
    catch(PDOException $e){
        echo "erreur : ". $e->getMessage();
    }