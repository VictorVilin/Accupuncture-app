<!-- barre de connection à un compte. 
Si l'utilisateur est connecté, affiche "bienvenue $prenom" et propose de se déconnecter.
sinon, propose de se connecter ou de s'inscrire.

auteur:Thibaud Jacquelin
09.02.2019
-->

<?php
echo "<div class=userbar>";
if(isset($_SESSION['prenom']))
{
	echo 'vous etes connecté sur le profil de ';	
	echo $_SESSION['prenom'];
	?>
	<input type=button id="accountbutton" onclick=window.location.href='index.php?action=profilpage';  value="Mon compte" />
	<input type=button id="disconnectbutton" onclick=window.location.href='index.php?action=deconnection';  value="Se déconnecter" />
	<?php
}else{
	?>
	<form method=post action="index.php?action=connection" id="connectionform">
	<fieldset>
		<legend>Connexion</legend>
		<ul>
			<li>
				<label for="email">Identifiant :</label>
				<input type="email" name="email" id="email" placeholder="email" autocomplete="email"/>
			</li>
			<li>
				<label for="password">Mot de passe :</label>
				<input type="password" name="password" id="password" placeholder="mot de passe"/>
			</li>
		</ul>

		<input type="submit" name="connexion" id="submitbuttonconnection" value="connexion"/>
		<a href="index.php?action=inscriptionpage" title="inscrivez vous ici !"> Inscription </a>
	</fieldset>
	</form>
<?php
}
echo "</div>";

