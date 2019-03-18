<!-- barre de recherche.
auteur:Thibaud Jacquelin
09.02.2019
modification:
Thibaud JACQUELIN, 04-03-2019, correction des erreurs d'accessibilité AAA du aux balises label.
Victor VILIN, 18 03 2019, Correction de syntaxe 
-->

<?php echo "<div class=content><h2>Bienvenue ";
if(isset($_SESSION['prenom']))
{
	echo $_SESSION['prenom'].' ';
}
echo "! Que voulez vous rechercher aujourd'hui ?</h2>"; 
?>


  <div class="recherche">

    <form method=post action="index.php?action=searchresult" id="rechercheform">
    <div class=searchmainbar>
      <label for="recherche">Recherche :</label>
      <input type="search" name="recherche" id="recherche" placeholder="pathologie..." autofocus/>
	<input type="submit" name="rechercher" id="submitbutton" value="rechercher"/>      
	</div>
	<fieldset>
	<legend>Pathologies :</legend>
	<details>
	<ul>
	  <li><input type="checkbox" name="meridien" id="meridien"><label for="meridien"> méridien</label></li>
	  <li><input type="checkbox" name="organe-viscere" id=organe-viscere"><label for="organe-viscere">organe-viscere</label></li>
	  <li><input type="checkbox" name="tendino-musculaire" id="tendino-musculaire"><label for="tendino-musculaire">tendino-musculaire</label></li>
	  <li><input type="checkbox" name="branches" id="branches"><label for="branches">branches</label></li>
	  <li><input type="checkbox" name="merveilleux vaisseaux" id="merveilleux vaisseaux"><label for="merveilleux vaisseaux">merveilleux vaisseaux</label></li>
	</ul>
	</details>
      </fieldset>
      <fieldset>
	<legend>Meridiens :</legend>
	<details>
	<ul>
	  <li><input type="checkbox" name="-QM" id="-QM"><label for="-QM">Yin Qiao Mai</label></li>
	  <li><input type="checkbox" name="-WM" id="-WM"><label for="-WM">Yin Wei Mai</label></li>
	  <li><input type="checkbox" name="+QM" id="+QM"><label for="+QM">Yang Qiao Mai</label></li>
	  <li><input type="checkbox" name="+WM" id="+WM"><label for="+WM">Yang Wei Mai</label></li>
	  <li><input type="checkbox" name="C" id="C"><label for="C">Coeur</label></li>
	  <li><input type="checkbox" name="ChM" id="ChM"><label for="ChM">Chong Mai</label></li>
	  <li><input type="checkbox" name="DaiM" id="DaiM"><label for="DaiM">Dai Mai</label></li>
	  <li><input type="checkbox" name="DM" id="DM"><label for="DM">Du Mai</label></li>
	  <li><input type="checkbox" name="E" id="E"><label for="E">Estomac</label></li>
	  <li><input type="checkbox" name="F" id="F"><label for="F">Foie</label></li>
	  <li><input type="checkbox" name="GI" id="GI"><label for="GI">Gros intestin</label></li>
	  <li><input type="checkbox" name="IG" id="IG"><label for="IG">Intestin Grêle</label></li>
	  <li><input type="checkbox" name="MC" id="MC"><label for="MC">Protecteur du coeur</label></li>
	  <li><input type="checkbox" name="P" id="P"><label for="P">Poumon</label></li>
	  <li><input type="checkbox" name="R" id="R"><label for="R">Rein</label></li>
	  <li><input type="checkbox" name="RM" id="RM"><label for="RM">Ren Mai</label></li>
	  <li><input type="checkbox" name="Rte" id="Rte"><label for="Rte">Rate Pancréas</label></li>
	  <li><input type="checkbox" name="TR" id="TR"><label for="TR">Triple réchauffeur</label></li>
	  <li><input type="checkbox" name="V" id="V"><label for="V">Vessie</label></li>
	  <li><input type="checkbox" name="VB" id="VB"><label for="VB">Vésicule Biliaire</label></li>
	</ul>
	</details>
      </fieldset>
      <fieldset>
	<legend>Caracteristiques :</legend>
	<details>
	<ul>
	  <ul>
	    <li><input type="checkbox" name="plein" id="plein"><label for="plein">plein</label></li>
	    <li><input type="checkbox" name="vide" id="vide"><label for="vide">vide</label></li>
	  </ul>
	  <ul>
	    <li><input type="checkbox" name="chaud" id="chaud"><label for="chaud">chaud</label></li>
	    <li><input type="checkbox" name="froid" id="froid"><label for="froid">froid</label></li>
	  </ul>
	  <ul>
	    <li><input type="checkbox" name="interne" id="interne"><label for="interne">interne</label></li>
	    <li><input type="checkbox" name="externe" id="externe"><label for="externe">externe</label></li>
	  </ul>
	</ul>
	</details>
      </fieldset>
    </form>
  </div>
</div>
