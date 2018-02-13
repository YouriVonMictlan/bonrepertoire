<?php

//===============================
// la fonction connecter() permet de choisir une
// base de données et de s'y connecter

function connexion()
	{
	//le fichier connect.php est requis pour établir la connexion
	require_once("connect.php");
	
	$connexion = mysqli_connect(SERVEUR,LOGIN,PASSE,BASE)
	or die("Erreur : " . mysqli_error($connexion));

	return $connexion;
	}
	
//===================================
function afficher_contacts()
	{
	$connexion=connexion();
	//selectionne tous les champs de la table contacts
	//en triant par ordre de date décroissant
	$requete="SELECT * FROM contacts ORDER BY date DESC";
	
	//on exécute la requete
	$resultat=mysqli_query($connexion, $requete);
	
	$tab_resultat="<table class=\"tab_resultat\">\n";
	$tab_resultat.="<tr>\n";
	$tab_resultat.="<th>Nom</th>\n";	
	$tab_resultat.="<th>Prénom</th>\n";
	$tab_resultat.="<th>Email</th>\n";	
	$tab_resultat.="<th>Date</th>\n";
	$tab_resultat.="<th>Action</th>\n";	
	$tab_resultat.="</tr>\n";	
	//on va afficher le contenu du résultat (car SELECT)
	while($ligne=mysqli_fetch_object($resultat))
		{
		$tab_resultat.="<tr>\n";
			$tab_resultat.="<td><a href=\"#\" title=\"".$ligne->message."\">".stripslashes($ligne->nom)."</a></td>\n";
			$tab_resultat.="<td>".stripslashes($ligne->prenom)."</td>\n";
			$tab_resultat.="<td>".$ligne->courriel."</td>\n";
			$tab_resultat.="<td>".$ligne->date."</td>\n";
			$tab_resultat.="<td><a href=\"index.php?action=supprimer_contact&id_contact=".$ligne->id_contact."\">X</a></td>\n";
		$tab_resultat.="</tr>\n";
		}
	$tab_resultat.="</table>\n";
	mysqli_close($connexion);
	return $tab_resultat;	
	}
//===================================
function afficher_comptes()
	{
	$connexion=connexion();
	//selectionne tous les champs de la table contacts
	//en triant par ordre de création croissant
	$requete="SELECT * FROM comptes ORDER BY id_compte ASC";
	
	//on exécute la requete
	$resultat=mysqli_query($connexion, $requete);
	
	$tab_resultat="<table class=\"tab_resultat\">\n";
	$tab_resultat.="<tr>\n";
	$tab_resultat.="<th>Nom</th>\n";	
	$tab_resultat.="<th>Prénom</th>\n";
	$tab_resultat.="<th>Email</th>\n";	
	$tab_resultat.="<th>Password</th>\n";
	$tab_resultat.="<th colspan=\"2\">Actions</th>\n";	
	$tab_resultat.="</tr>\n";	
	//on va afficher le contenu du résultat (car SELECT)
	while($ligne=mysqli_fetch_object($resultat))
		{
		$tab_resultat.="<tr>\n";
			$tab_resultat.="<td>".stripslashes($ligne->nom_compte)."</td>\n";
			$tab_resultat.="<td>".stripslashes($ligne->prenom_compte)."</td>\n";
			$tab_resultat.="<td>".$ligne->email_compte."</td>\n";
			$tab_resultat.="<td>".$ligne->pass_compte."</td>\n";
			$tab_resultat.="<td><a href=\"index.php?action=modifier_compte&id_compte=".$ligne->id_compte."\"><span class=\"dashicons dashicons-edit\"></span></a></td>\n";
			$tab_resultat.="<td><a href=\"index.php?action=supprimer_compte&id_compte=".$ligne->id_compte."\"><span class=\"dashicons dashicons-trash\"></span></a></td>\n";
		$tab_resultat.="</tr>\n";
		}
	$tab_resultat.="</table>\n";
	mysqli_close($connexion);
	return $tab_resultat;	
	}
?>