

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>
  <!--Le lien php-->
  <body>
<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prix</th>
      <th>Quantité</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>        
    <?php foreach($_SESSION['panier'] as $article): ?>
      <tr>
        <td><?php echo $article['nom']; ?></td>
        <td><?php echo $article['prix']; ?> €</td>
        <td><?php echo $article['quantite']; ?></td>
        <td><?php echo $article['prix'] * $article['quantite']; ?> €</td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <td colspan="3">Total :</td>
      <td><?php echo calculerTotalPanier(); ?> €</td>
    </tr>
  </tbody>
</table>

  

<form method="POST" action="traitement_panier.php">
  <table>
    <thead>
      <tr>
        <th>Article</th>
        <th>Prix</th>
        <th>Quantité</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Article 1</td>
        <td>10 €</td>
        <td><input type="number" name="article1" min="0"></td>
      </tr>
      <tr>
        <td>Article 2</td>
        <td>20 €</td>
        <td><input type="number" name="article2" min="0"></td>
      </tr>
    </tbody>
  </table>
  <input type="submit" value="Ajouter au panier">
</form>


<?php
session_start();

// Vérifie si le tableau de panier existe dans la session
if(!isset($_SESSION['panier'])) {
  // Crée un tableau de panier vide s'il n'existe pas
  $_SESSION['panier'] = array();
}

// Ajoute un article au panier
function ajouterAuPanier($nom_article, $prix_article, $quantite) {
  // Vérifie si l'article est déjà dans le panier
  $article_existe = false;
  foreach($_SESSION['panier'] as $cle => $article) {
    if($article['nom'] == $nom_article) {
      // L'article existe déjà, met à jour la quantité
      $_SESSION['panier'][$cle]['quantite'] += $quantite;
      $article_existe = true;
      break;
    }
  }
  // L'article n'existe pas encore, l'ajoute au panier
  if(!$article_existe) {
    $nouvel_article = array('nom' => $nom_article, 'prix' => $prix_article, 'quantite' => $quantite);
    array_push($_SESSION['panier'], $nouvel_article);
  }
}

// Supprime un article du panier
function supprimerDuPanier($nom_article) {
  // Recherche l'article dans le panier
  foreach($_SESSION['panier'] as $cle => $article) {
    if($article['nom'] == $nom_article) {
      // Supprime l'article du panier
      unset($_SESSION['panier'][$cle]);
      break;
    }
  }
}

// Vide le panier
function viderLePanier() {
  // Supprime tous les articles du panier
  unset($_SESSION['panier']);
}
?>
</body> 
</html>