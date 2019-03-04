<!-- vérifie que les variables emails sont bien des emails, les prenom soit bien du texte... etc
auteur:Thibaud Jacquelin
03.03.2019
-->

<?php
if(isset($_SESSION['email']))
{
	if(filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL) == false)
	{
		unset($_SESSION['email']);
	}
}

