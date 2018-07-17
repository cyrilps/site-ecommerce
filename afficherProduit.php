<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<!doctype html>
<head>
    
</head>
</html>


<body>
    <?php
    require_once("connect.php");
    $req = "select * from produits";
    // la variable recordset représente les enregistrements dans une table de base de données
    $recordset = mysql_query($req) or die(mysql_error);
    ?>
    
<table border="1">
    <tr>
        <th>ref</th> <th>designation</th> <th>stock</th> <th>prix</th> <th>photo</th> <th>disponible</th> <th>promotion</th> <th>selectione</th>
    </tr>
    <?php while($produits = mysql_fetch_assoc($recordset)) { ?>
    <tr>
        <td><?php echo $produits['ref']?></td>
        <td><?php echo $produits['designation']?></td>
        <td><?php echo $produits['stock']?></td>
        <td><?php echo $produits['prix']?></td>
        <td><?php echo $produits['photo']?></td>
        <td><?php echo $produits['disponible']?></td>
        <td><?php echo $produits['promotion']?></td>
        <td><?php echo $produits['selectione']?></td>


        <td><a href="supprimerProduit.php?ref=<?php echo $produits['ref']?>"/>supprimer</a></td> 
    <td><a href="modifierproduits.php?ref=<?php echo $produits['ref'] ?>"/>éditer</a></td>
    </tr>
    <?php } ?>
</table>
</body>