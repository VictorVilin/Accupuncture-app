<!-- charge les résultat de la barre de recherche
auteur:Thibaud Jacquelin
09.02.2019
EDIT : Victor VILIN : ajout de la derniere condition pour le cas où resultat est vide 
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
                            SELECT *
                            FROM `patho` 
                                INNER JOIN meridien ON meridien.code = patho.mer
                                    WHERE description LIKE :recherche
                                    HAVING  mer IN (''" . $meridiensstring . ")
                        ");
$resultat->execute(array('recherche'=>$requete));

if(empty($resultat))
{
	$resultat=FALSE;
}

