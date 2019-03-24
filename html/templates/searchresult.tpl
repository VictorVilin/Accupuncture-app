<!-- template d'affichage des résultat de la recherche. variable= $liste_resultat
auteur:Thibaud Jacquelin
24.02.2019

Modifie par Angel Calvo le 23.03.2019
-->

{foreach from=$list_resultat item=resultat}

	<article>
		<ul>
			<li><strong>N°</strong>{$resultat.idP}</li>
			<li><strong>Description:</strong> {$resultat.description}</li>
			<li><strong>Méridien:</strong> {$resultat.nom}</li>
			<li><strong>Type:</strong> {$resultat.type}</li>
			<li><strong>Symptomes:</strong><br>
			{foreach from=$resultat.desc item=sympt}
				<ul> {$sympt}</ul>
			{/foreach}</li>
			<li><strong>Keywords: </strong>
			{foreach from=$resultat.name item=keyw}
				<i>{$keyw}</i>, 
			{/foreach}</li>
		</ul>
	</article>
{/foreach}
