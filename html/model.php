<!-- affichage commun de toutes les pages du site (header, barre de connection, chat...
auteur:Thibaud Jacquelin
09.02.2019
modification:
Paul Martinez, 18/03/2019, rajout de la feuille de style pour l'impression
-->

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Wikipuncture</title>
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="CSS/impression.css" media="print">
</head>
    <?php include("header.php"); ?>
    <body>
	<div class=side>
	<?php include("compte/connectionbar.php"); ?>
	<?php include("menu.php"); ?>
	<?php include("chat/chatbar.php"); ?>
	</div>
    </body>
</html>
