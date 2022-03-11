<?php
 
    require_once "assets/config/bdd.php";
    // var_dump($_POST); 
    // die();
    $email = htmlspecialchars($_POST["email"]);
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    $confirmMdp = htmlspecialchars($_POST["confirmMdp"]);

    if(!empty($email) && !empty($nom) && !empty($prenom) && !empty($mdp) && !empty($confirmMdp) ){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){

            if($mdp === $confirmMdp){

                $urlphoto="user.png";
                $role = "user";
                $mdp = password_hash($mdp, PASSWORD_DEFAULT);

                $insert = $bdd->prepare("INSERT INTO users(nom, prenom, mdp, urlphoto, roles, email) VALUES(?,?,?,?,?,?)");
                $insert->execute([$nom, $prenom, $mdp, $urlphoto, $role, $email]);

                $success = "Bienvenu parmis nous !";
                header("Location: index.php?success=$success");
            }else{
                $erreur = "Les mots de passe ne correspondent pas !";
                header("Location: index.php?error=$erreur");
            }

        }else{
            $erreur = "veuillez entrez un email valide !";
            header("Location: index.php?error=$erreur");
        }
    }else{
        $erreur = "veuillez remplir les champs !";
        header("Location: index.php?error=$erreur");
    }
    ?>