
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>
  <title>Formulaire de contact</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Carousel Template · Bootstrap v5.3</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">ss
<div class="collapse navbar-collapse" id="navbarCollapse">
  <ul class="navbar-nav">
    <!--logo-->
    <img src="../limage/logo.png" alt="" width="100" height="70">
    <li class="nav-item">
      <a class="nav-link" href="Accueil.html">Accueil</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Liste Produit.html">Liste Produit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Page Produit.html">Page Produit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Panier.html">Panier</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Paiement.html">Contact</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="Paiement.html">Paiement</a>
      </li>

  </ul>
</div>
      
    </div>
  </nav>
</header>
<br> <br><br><br><br>
    <!-- Page d'accueil-->
  
    
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1"> S'ABONNER À LA NEWSLETTER<span class="text-body-secondary">See for yourself.</span></h2>
     Vous trouverez pour cela nos informations de contact dans les conditions d'utilisation du site.
     Vous trouverez pour cela nos informations de contact dans les conditions d'utilisation du site.
     <p class="lead"> </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../limage/new.jpg" alt="Logo" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">

      </div>
    </div>
   
    Vous pouvez vous désinscrire à tout moment.

          <h1  align= "center"><strong>   CONTACTER NOUS</strong></h1>
<br><br><br>
<center> 
<p>Vous pourriez nous envoyez des messages et nous laissez vos cordonées et 
nous reviendrons vers vous déques possible  Merci de votre visite susr notre site internet.</p>
	<h1>Contactez-nous</h1>
	<!-- Le formulaire -->
	<form method="post" action="traitement_formulaire.php">
		<label for="nom">Nom:</label>
		<input type="text" id="nom" name="nom"><br><br>

		<label for="email">Email:</label>
		<input type="text" id="email" name="email"><br><br>

        <label for="Prenom">Prenom:</label>
		<input type="text" id="Prenom" name="Prenom"><br><br>

		<input type="submit" value="Envoyer">
	</form>   </center>

	<?php
	// Traitement du formulaire
	if(isset($_POST['nom']) && isset($_POST['email'])) {
		$nom = $_POST['nom'];
		$email = $_POST['email'];
		echo "<p>Nom: " . $nom . "</p>";
		echo "<p>Email: " . $email . "</p>";
	}
	?>
</body>
</html>


<br><br><br>

  <section>
   <!--  <h4>SHOW ROOM </h4> 
<p> Un espace showroom est à votre disposition dans nos locaux d'entreprise,
 vous pouvez y voir et essayer notre collection
Lundi, Mardi, Mercredi et Vendredi :
De 13h30 à 16h30

11 avenue des près 78180
Montigny le bretonneux
</p></section>
<br>   -->
<footer class="bg-dark text-body-secondary py-5">
  <div class="conteneur">
  <p class="float-end mb-1">
    
  </p>


    
    <a href="https://www.economie.gouv.fr/entreprises/site-internet-mentions-obligatoires">Mention legale </a> <br> <br>
    <a href="  https://www.economie.gouv.fr/entreprises/site-internet-mentions-obligatoires ">Mention legale </a>

    <a href="https://www.instagram.com/pimkie/"> </a>

    </section>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

      
  </body>
</html>
