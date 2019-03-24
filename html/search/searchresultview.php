<!-- affiche les resultats de la recherche. variable= $resultat $pathologieasked $meridiensasked $caracteristiqueasked.
auteur:Thibaud Jacquelin
09.02.2019

Modifie par Angel Calvo le 23.03.2019
-->

<?php

echo '<div class=content>';
	

	echo '<h2>Resultat de recherche pour ';
	echo '"'.$recherche.'"';
	echo '</h2>';

	if($pathologiesasked!=[])
	{
		echo '<strong>pathologies:</strong><ul>';
		foreach ($pathologiesasked as &$pathologie)
		{
			echo '<li>'.$pathologie.'</li>';
		}
		echo '</ul>';
	}


	if($meridiensasked!=[])
	{
		echo '<strong>méridiens:</strong><ul>';
		foreach ($meridiensasked as &$meridien)
		{
			echo '<li>'.$meridien.'</li>';
		}
		echo '</ul>';
	}

	if($caracteristiquesasked!=[])
	{
		echo '<strong>caracteristiques</strong><ul>';
		foreach ($caracteristiquesasked as &$caracteristique)
		{
			echo '<li>'.$caracteristique.'</li>';
		}
		echo '</ul>';
	}



	if ($resultat!=FALSE)
	{
		$list_resultat= array();
		$i=0;
		while($donnees = $resultat->fetch()){
			if(($i==0) || ($donnees['idP'] != $list_resultat[$i-1]['idP'])){ //new patho
				$list_resultat[$i]['description'] = $donnees['description'];
				$list_resultat[$i]['idP'] = $donnees['idP'];
				$list_resultat[$i]['type'] = $donnees['type'];
				$list_resultat[$i]['nom'] = $donnees['nom'];
				$list_resultat[$i]['desc'] = array();//desc c'est les symptomes
				$list_resultat[$i]['name'] = array();//name c'est les keywords
				array_push($list_resultat[$i]['desc'], $donnees['desc']);
				array_push($list_resultat[$i]['name'], $donnees['name']);
				$i++;
			}
			else{	//ajout de plusiers symptomes et/ou keywords
				if(!in_array($donnees['desc'], $list_resultat[$i-1]['desc'])){
					array_push($list_resultat[$i-1]['desc'], $donnees['desc']);
				}
				if(!in_array($donnees['name'] , $list_resultat[$i-1]['name'])){
					array_push($list_resultat[$i-1]['name'], $donnees['name']);
				}				
			}
		}

		echo '<strong>'.$i.'</strong> resultats avec <strong>'.$recherche.'</strong>';

		$tpl = new Smarty();

		$tpl->assign('list_resultat', $list_resultat);

		$tpl->display("templates/searchresult.tpl");
	}else
	{
		?>
		<p>
		<img src="images/noresult.png" alt="smiley triste" title="aucun résultat trouvé">
		</p>
		<strong>Aucun resultat trouvé!</strong>
		<?php
	}
echo '</div>';
