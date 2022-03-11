<?php

    echo password_hash("root", PASSWORD_DEFAULT);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face{
            font-family: "nike";
            src: url("assets/Nike.ttf");
        }
    </style>
</head>
<body>

    <h1>NIKE PRIVE</h1>

    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic unde quasi, soluta facere neque debitis</p>

        <?php
            if(isset($_GET["error"])){
                echo "<p style='color:red'>". $_GET["error"] ." </p>";
            }
            if(isset($_GET["success"])){
                echo "<p style='color:green'>". $_GET["success"] ." </p>";
            }
        ?>

<form action="inscription.php" method="post">
    <input type="text" placeholder="entrez l'email" name="email">
    <input type="text" placeholder="entrez le nom" name="nom">
    <input type="text" placeholder="entrez le prenom" name="prenom">
    <input type="text" placeholder="mot de passe" name="mdp">
    <input type="text" placeholder="confirmer le mot de passe" name="confirmMdp">
    <input type="submit">
</form>

</body>
</html>