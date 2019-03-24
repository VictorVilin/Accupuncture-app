<!-- charge les résultat de la barre de recherche
auteur:Thibaud Jacquelin
09.02.2019
EDIT : Victor VILIN : ajout de la derniere condition pour le cas où resultat est vide 
Modifie par Angel Calvo le 23.03.2019
-->

<?php
require('private/opensearchbdd.php');
$recherche=$_POST['recherche'];
$requete='%'.$recherche.'%';

$meridiens=['-QM','-WM','+QM','+WM','C','ChM','DaiM','DM','E','F','GI','IG','MC','P','R','RM','Rte','TR','V','VB'];
$meridiensasked=[];
$meridiensstring="";
foreach ($meridiens as &$meridien)
{
	$meridiensstring = $meridiensstring . ",'" . $meridien . "'";
	$meridiensasked = (isset($_POST[$meridien])) ? $meridiensasked=array_merge($meridiensasked, [$meridien]) : $meridiensasked;
}

$pathologies=['meridien', 'organe-viscere', 'tendino-musculaire', 'branches', 'merveilleux vaisseau'];
$pathologiesasked=[];
foreach ($pathologies as &$pathologie)
{
	$pathologiesasked = (isset($_POST[$pathologie])) ? $pathologiesasked=array_merge($pathologiesasked, [$pathologie]) : $pathologiesasked;
}

$caracteristiques=['plein', 'vide', 'chaud', 'froid', 'interne', 'externe'];
$caracteristiquesasked=[];
foreach ($caracteristiques as &$caracteristique)
{
	$caracteristiquesasked = (isset($_POST[$caracteristique])) ? $caracteristiquesasked=array_merge($caracteristiquesasked, [$caracteristique]) : $caracteristiquesasked;
}

$resultat = $bdd->prepare("
				SELECT description,type,mer,patho.idP,meridien.nom,symptome.desc, keywords.name
				FROM `patho` 
				
				INNER JOIN meridien ON patho.mer = meridien.code
				INNER JOIN symptPatho ON patho.idP = symptPatho.idP
				INNER JOIN symptome ON symptPatho.idS = symptome.idS
				INNER JOIN keySympt ON symptome.idS = keySympt.idS
				INNER JOIN keywords ON keySympt.idK = keywords.idK

				WHERE description LIKE :recherche
			/*Il manque le filtrage*/
				ORDER BY patho.idP ASC
                        ");
$resultat->execute(array('recherche'=>$requete));

if(empty($resultat))
{
	$resultat=FALSE;
}


