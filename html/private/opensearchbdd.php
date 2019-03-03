<!-- permet de se connecter à la base de donnée pour rechercher des pathologies
auteur:Thibaud Jacquelin
09.02.2019
modification:
Thibaud JACQUELIN, 03-03-2019, rajout du catch pour tuer les messages d'erreur.
-->

<?php
$dbName = "wikipuncture";
$user = "root";
$password = "tp";

try
{
	$bdd = new PDO('mysql:host=localhost;dbname='.$dbName, $user, $password);
}
catch (Exception $e)
{
	die('Erreur : '.$e->getMessage());
}


