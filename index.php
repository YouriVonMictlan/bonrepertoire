<!DOCTYPE HTML>
<html>
<head>
<title>Snowboard Corporation</title>
<!--charset=utf-8 permet de gérer les caractères accuentués-->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />   
<link href="css/stylev2.css" rel="stylesheet" type="text/css" />
<link href="css/dashicons.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<!--on rend le logo cliquable pour revenir en page d'accueil-->
		<a href="index.php">
			<img id="logo" src="images/logo.png" alt="Snowboard Corporation : snowbike, snowboard, ski" />
		</a>
		
		<nav id="menu_haut" onclick="document.getElementById('message').style.display='none';">
			<ul>
				<li>
					<a href="index.php#carrousel">SHOP</a>
				</li>
				<li>
					<a href="index.php#team">TEAM</a>
				</li>
				<li>
					<a href="index.php#events">EVENTS</a>
				</li>
				<li>
					<a href="index.php#company">COMPANY</a>
				</li>
				<li>
					<a href="index.php#contact">CONTACT</a>
				</li>
			</ul>
		</nav>
		<div id="panier">
			<a href="#">
				<img src="images/loupe.png" alt="Recherche ton snowboard" />
			</a>
			<a href="#">
				<img src="images/boutique.png" alt="Boutique Snowboard Corporation" />
			</a>
			<a href="#">
				<img src="images/espace_prive.png" alt="Espace privé de Snowboard Corp." />
			</a>
		</div>
	</header>
	<!--section slider-->
	<section id="slider">
	
		<div id="text_slider">
			<h1>RUN OVER<br />EVERYTHING</h1>
			<div class="call_to_action">
				<a href="#produits">SEE DETAILS</a>
			</div>
			<div class="triangle"></div>
		</div>
		
		<div class="ouvrir">
			<a href="#carrousel">+</a>
		</div>	
		
	</section>
		
	<section id="carrousel" class="placement">	
		<h1>SNOWBOARDS</h1>
		<p>Tortor pellentesque fuga facilisis eveniet lorem id do.</p>
		<div class="fermer">
			<a href="index.php">x</a>
		</div>
		<img src="images/snowboards.jpg" alt="gamme de snowboard rennes" />
		<h2>SNOWBOARDS EXTREM SERIES</h2>
	</section>

	<section id="produits" class="placement">	
		<h1>Snowboard + Fix Nitro Lectra</h1>
		<p>Cette planche Illusion 2 de Nitro est une planche polyvalente freeride pour débutants à débrouillés. Son cambre classique et son twin directionnel en facilitent la manoeuvrabilité et la tolérance.</p>
		<div class="fermer">
			<a href="index.php">x</a>
		</div>
		<article>
			<img src="images/produit1.jpg" alt="Snowboard + Fix Nitro Lectra" />
			<ul>
				<li>
					<strong>SEXE</strong> : Homme
				</li>
				<li>
					<strong>LARGEUR DE SPATULE (MM)</strong> : 293
				</li>
				<li>
					<strong>LARGEUR AU PATIN (MM)</strong> : 250
				</li>
				<li>
					<strong>LARGEUR DE TALON (MM)</strong> : 293
				</li>
				<li>
					<strong>TAILLE RÉFÉRENCE (CM)</strong> : 157
				</li>
				<li>
					<strong>WIDE</strong> : oui
				</li>
				<li>
					<strong>ANNÉE</strong> : 2017/2018
				</li>
				<li>
					<strong>SETBACK (MM)</strong> : 15
				</li>
				<li>
					<strong>SHAPE</strong> : Directionnel, Twin
				</li>
				<li>
					<span class="prix">799.00€</span>
				</li>
			</ul>
		</article>
		<div class="call_to_action">
			<a>AJOUTER AU PANIER</a>
		</div>
		
	</section>	
	
	<section id="events" class="placement">
		<h1>ÉVÈNEMENTS</h1>
		<p>Que du blacdh sdjgh sfdh</p>
		<div class="fermer">
			<a href="index.php">x</a>
		</div>
	</section>	
	
	<section id="team" class="placement">	
		<h1>NOTRE EQUIPE DE MONITEURS</h1>
		<p>Tortor pellentesque fuga eveniet lorem id do.</p>
		<div class="fermer">
			<a href="index.php">x</a>
		</div>
		<figure class="album">
			<div class="image">
				<a href="images/snow1.jpg">
					<img src="images/snow1.jpg" alt="Texte alternatif 1" />
				</a>
			</div>
			<div class="image">
				<a href="images/snow2.jpg">
					<img src="images/snow2.jpg" alt="Texte alternatif 2" />
				</a>
			</div>
			<div class="image">
				<a href="images/snow3.jpg">
					<img src="images/snow3.jpg" alt="Texte alternatif 3" />
				</a>
			</div>			
			<div class="image">	
				<a href="images/snow4.jpg">
					<img src="images/snow4.jpg" alt="Texte alternatif 4" />
				</a>
			</div>
			<div class="image">
				<a href="images/snow5.jpg">
					<img src="images/snow5.jpg" alt="Texte alternatif 5" />
				</a>
			</div>
			<div class="image">
				<a href="images/snow6.jpg">
					<img src="images/snow6.jpg" alt="Texte alternatif 6" />
				</a>
			</div>
			<div class="image">
				<a href="images/snow7.jpg">
					<img src="images/snow7.jpg" alt="Texte alternatif 7" />
				</a>
			</div>
			<div class="image">
				<a href="images/snow8.jpg">
					<img src="images/snow8.jpg" alt="Texte alternatif 8" />
				</a>
			</div>
			<figcaption>les monos en stress</figcaption>
		</figure>
	</section>	

	<section id="company" class="placement">
		<h1>COMPANY</h1>
		<p>Que du black pour plus de plaisir</p>
		<div class="fermer">
			<a href="index.php">x</a>
		</div>
		<article>
			<img src="images/company.jpg" alt="Company" />
			<p>Nobis cum sagittis consequuntur primis excepteur? Iusto molestiae soluta placeat eos eligendi atque occaecat sapien magnis? Nam non dictum delectus ipsum hymenaeos deleniti alias voluptatem tempora, quidem non, aliqua orci.</p>
			<p>Facilisi integer! Turpis varius ipsum dignissim at, ab interdum hic tempora rutrum officiis rhoncus non minim vel ultricies ante, sem blandit rem exercitationem urna, doloremque ultricies. Duis primis? Elit dui.</p>
		</article>
		<div class="reso">
			<span class="dashicons dashicons-facebook"></span>
			<span class="dashicons dashicons-twitter"></span>
		</div>
	</section>
	
	<section id="contact" class="placement">
	
	<?php
	//SI le bouton "envoyer" a été cliqué
	if(isset($_POST['envoyer']))
		{
		//on branche la librairie de fonctions
		require_once("outils/fonctions.php");
		
		//on établit la connexion à la base de données
		$connexion=connexion();	
		
		//on créer la requete d'insertion dans la table
		$requete="INSERT INTO contacts 
				  SET nom='".addslashes($_POST['nom'])."',
					  prenom='".addslashes($_POST['prenom'])."',
					  courriel='".$_POST['courriel']."',
					  message='".addslashes($_POST['message'])."',
					  date='".date("Y-m-d H:i:s")."'";
		  
		//on exécute la requête	
		$resultat=mysqli_query($connexion,$requete);	
		
		//on referme la connexion
		mysqli_close($connexion);
			
		//on créé une variable pour rendre "transportable" son contenu 
		//le \n permet de générer un retour à la ligne dans le code source
		$merci="<p id=\"message\">Merci " . $_POST['prenom'] . " " . $_POST['nom'] . "</p>\n";
		}		
	?>
	
		<h1>CONTACTEZ NOUS</h1>
		<p>Tortor pellentesque fuga facilisis</p>
		<div class="fermer">
			<a href="index.php">x</a>
		</div>
		<!--si une variable $merci a été calculée-->		
		<?php if(isset($merci)){echo $merci;} ?>

		<!--on fabrique un formulaire-->
		<form action="#contact" method="POST">
			<input required placeholder="Nom..." type="text" name="nom" value=""  />
			<input required placeholder="Prénom..." type="text" name="prenom" value=""  />
			<input required placeholder="Email..." type="email" name="courriel" value="" />
			<textarea required placeholder="Message" name="message"></textarea>
			<input type="submit" name="envoyer" value="ENVOYER" />
		</form>
	</section>
	
</body>
</html>
