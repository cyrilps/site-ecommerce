<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Suppr produits</title>
</head>
<body>
    <?php
    require_once("connect.php");
    $ref=$_GET['ref'];
    $req = "DELETE FROM produits WHERE (ref = $ref)";
    // Executer la requête qui permet de supprimer un étudiant qui a un id donné
    mysql_query ($req) or die(mysql_error);
    // redirection automatique vers la page afficheretudiant.php
    //header("location:afficheretudiant.php");
    require_once("afficherProduit.php");
    ?>
</body>
</html>