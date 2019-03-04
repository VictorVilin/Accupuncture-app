<!-- vérifie l'abscence de code SQL dans les variables venant du client.
auteur:Thibaud Jacquelin
10.02.2019
modification:
Thibaud JACQUELIN, 24-02-2019, rajout des echapatoires en SQL et de la protection des injections html
Thibaud JACQUELIN, 03-03-2019, rajout du filtrage des balises
-->

<?php
foreach($_SESSION as $cle => $valeur)

{

	$_SESSION[$cle]=htmlspecialchars($valeur);
	$_SESSION[$cle]=filter_var($valeur, FILTER_SANITIZE_STRING);//filtre les balises

}

foreach($_POST as $cle => $valeur)

{

	$_POST[$cle]=htmlspecialchars($valeur);
	$_POST[$cle]=filter_var($valeur, FILTER_SANITIZE_STRING);

}

foreach($_GET as $cle => $valeur)

{

	$_GET[$cle]=htmlspecialchars($valeur);
	$_POST[$cle]=filter_var($valeur, FILTER_SANITIZE_STRING);
}

