<?php
$nom_produit = 'T-shirt simple';
$couleur = 'Blanc';
$prix = '10.50';
$disponible = 'true';
$quantité = '10';
$a = '31.50';
$b = '105';

echo "<h3> Phrase 1     Le nom du produit est $nom_produit <br/>";
echo "<h3> Phrase 2     Il reste $quantité produit en stock <br/>";
echo "<h3> Phrase 3     Le produit $nom_produit est de couleur $couleur <br/>";

echo "<h4> Phrase 1     Acheter 3 produits couterait $prix + $prix + $prix <br/>";
echo "<h4> Phrase 2     Acheter la totalité des produits disponibles coûterait $prix * $quantité <br/>";
echo "<h4> Phrase 3     Si 3 produits sont vendus <br/>";


if ($disponible = true)   echo "Le produit $nom_produit est disponible en magasin.";

if ($disponible = false)  echo "Le produit $nom_produit n'est malheureusemeent plus disponible.";


