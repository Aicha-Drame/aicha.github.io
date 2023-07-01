<?php
// identifiants valides


$identifiant_valide = "admin@example.com";
$mot_de_passe_valide = "password123";
// récupération des données du formulaire
$email = $_POST['email'];
$mot_de_passe = $_POST['password'];
// Vérification des informations d'identification
if ($email == $identifiant_valide && $mot_de_passe == $mot_de_passe_valide) 
{
	echo "Félicitation! Vous êtes bien connectés à l'espace privé Saint";
// redirection vers la page de bienvenue si les informations sont correctes

	
} 

else 
{
// affichage d'un message d'erreur si les informations sont incorrectes
	echo "Erreur: Les informations d'identification sont incorrectes !";
}
?>