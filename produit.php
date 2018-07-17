<?php error_reporting(E_ALL ^ E_DEPRECATED); ?>
<!DOCTYPE html>

<!-- <html xmlns="http://www.w3.org/1999/xhtml"><head><meta -->
<!-- commentaire -->


<body> 
    <?php
    require_once("connect.php");
    if(isset($_POST['ref']) && isset($_POST['designation']) && isset($_POST['stock']) && isset($_POST['prix']) && isset($_FILE['photo']) && isset($_POST['disponible']) && isset($_POST['promotion']) && isset($_POST['selectione'])){
        $dossierDest = 'img/';
        $ref = $_POST['ref'];
        $designation = $_POST['designation'];
        $stock = $_POST['stock'];
        $prix = $_POST['prix'];
        $photo = $_POST['photo'] ['name'];
        $disponible = $_POST['disponible'];
        $promotion = $_POST['promotion'];
        $selectione = $_POST['selectione'];

        // require_once ("connexion.php");
        // Ouverture de la connexion
        $conn = mysql_connect("localhost","root","") or die (mysql_error());
        //selection de la base de données
        mysql_select_db("db_boutique",$conn);
        
        move_uploaded_file($_FILES['photo'] ['tmp_name'], $dossierDest.$photo);
        $req = "INSERT INTO produits(ref,designation,stock,prix,photo,disponible,promotion,selectione) VALUES ('$ref', '$designation', '$stock', '$prix', '$photo', '$disponible', '$promotion', '$selectione')";
        // éxecuter la requête
        mysql_query($req) or die(mysql_error());
        ?>
        
        <table border="1">
            <tr>
                <td>ref</td>
                <td><?php echo $ref ?></td>
            </tr>
            <tr>
                <td>designation</td>
                <td><?php echo $designation ?></td>
            </tr>
            <tr>
                <td>stock</td>
                <td><?php echo $stock ?></td>
            </tr>
            <tr>
                <td>prix</td>
                <td><?php echo $prix ?></td>
            </tr>
            <tr>
                <td>photo</td>
                <td><?php echo $photo ?></td>
            </tr>
            <tr>
                <td>disponible</td>
                <td><?php echo $disponible ?></td>
            </tr>
            <tr>
                <td>promotion</td>
                <td><?php echo $promotion ?></td>
            </tr>
            <tr>
                <td>selectione</td>
                <td><?php echo $selectione ?></td>
            </tr>
        </table>
        <?php
    }else{
        echo "erreur";
    }
    ?>
    <a href="index.html">Afficher les produits</a>
</body>
</html>