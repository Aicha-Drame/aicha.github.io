<?php
// Démarrer la session
session_start();

// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupérer l'identifiant du produit depuis le formulaire
  $product_id = $_POST["product_id"];

  // Vérifier si le panier existe déjà dans la session
  if(!isset($_SESSION["cart"])) {
    // Si le panier n'existe pas, créer un tableau vide
    $_SESSION["cart"] = array();
  }

  // Ajouter le produit au panier
  array_push($_SESSION["cart"], $product_id);

  // Rediriger l'utilisateur vers la page du panier
  header("Location: Panier.html");
  exit;
}
?>
