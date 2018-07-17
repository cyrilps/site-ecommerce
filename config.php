<?php

$tab = array("user"=>"cyril", "mdp"=>"lulu");


if (($_POST["username"] == $tab["user"]) && ($_POST["password"] == $tab["mdp"])) {
	echo "Bonjour $tab[user]";
} else {
	  header('Location: index.html');
  exit();

}