<?php
$serveur = "localhost";
$utilisateur = "root";
$mdp = "";
$nomBaseDeDonnees = "ma_base_de_donnees";

// Connexion à la base de données
$connexion = mysqli_connect($serveur, $utilisateur, $mdp, $nomBaseDeDonnees);

// Vérification de la connexion
if (!$connexion) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Traitement du formulaire
if (isset($_POST["Ajouter"])) {
  // Récupérer les données soumises par le formulaire
  $nom = $_POST['nom'];
  $description = $_POST['description'];
  $prix = $_POST['prix'];

  // Vérifier si les données sont valides
  if ($nom && $description && $prix) {
    // Connexion à la base de données
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "boutique";
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion à la base de données
    if ($conn->connect_error) {
      die("Connexion échouée: " . $conn->connect_error);
    }

    // Préparer la requête SQL et l'exécuter
    $sql = "INSERT INTO produits (nom, description, prix) VALUES ('$nom', '$description', $prix)";
    if ($conn->query($sql) === TRUE) {
      echo "Produit ajouté avec succès!";
    } else {
      echo "Erreur: " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion à la base de données
    $conn->close();
  } else {
    echo "Veuillez remplir tous les champs!";
  }
}
?>

<form method="post">
  <label for="nom">Nom:</label>
  <input type="text" name="nom" id="nom" required>
  
  <label for="description">Description:</label