<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier produit</title>
</head>
<body>
<?php
	$ref = $_POST['ref'];
	$designation = $_POST['designation'];
    $stock = $_POST['stock'];
    $prix = $_POST['prix'];
    $photo = $_POST['photo'];
    $disponible = $_POST['disponible'];
    $promotion = $_POST['promotion'];
    $selectione = $_POST['selectione'];

	
	require_once("connect.php");
	$req= "UPDATE produits SET designation='$designation',stock='$stock',prix='$prix',photo='$photo',disponible='$disponible',promotion='promotion',selectione='selectione'
	WHERE ref=$ref";
	//éxecuter la requête
		mysql_query($req) or die(mysql_error());
	require_once("afficherProduit.php");
?>
	

</body>
</html>