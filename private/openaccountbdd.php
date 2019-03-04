<!-- permet de se connecter à la base de donnée des compte utilisateur
auteur:Thibaud Jacquelin
09.02.2019
modification:
Thibaud JACQUELIN, 03-03-2019, rajout du catch pour tuer les messages d'erreur.
-->

<?php
$dbName = "wikipuncture-compte";
$user = "root";
$password = "tp";
$charset = "UTF8";

try
{
	$bdd = new PDO('mysql:host=localhost;charset='.$charset.';dbname='.$dbName, $user, $password);
}
catch (Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

