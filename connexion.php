<?php

require_once "assets/config/bdd.php";
$nom = htmlspecialchars($_POST["nom"]);
$mdp = htmlspecialchars($_POST["mdp"]); 

if(!empty($nom) && !empty($mdp)){
    $select = $bdd->prepare("SELECT * FROM users WHERE nom = ?");
    $select->execute([$nom]);

        $data = $select->fetch();
        var_dump($data);

        if($data != false){

            if ( password_verify($mdp, $data["mdp"]) ){

            }else{
            $erreur="nom ou mot de passe incorrect !";
            header("Location: index.php?error=$erreur");
            }
}else{
    $erreur="nom ou mot de passe incorrect !";
    header("Location: index.php?error=$erreur");
    }

    
    
    // si il existe on verifie le mot de passe
}else{
    $erreur="veuillez remplir les champs !";
    header("Location: index.php?error=$erreur");
}