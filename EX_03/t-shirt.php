<?php
$nom_produit = 'T-shirt simple';
$couleur = 'Blanc';
$prix = '10.50';
$disponible = 'true';
$quantité = '10';
$resultat1 = $prix;
$resultat2 = $quantité;
$resultat3 = $prix * $quantité;

?>
<?php
echo "<h3> phrase 1     Le nom du produit est $nom_produit </h3> <br/>" ;
echo "<h3> phrase 2     Il reste $quantité produit en stock </h3> <br/>";
echo "<h3> phrase 3     Le produit $nom_produit est de couleur  $couleur </h3> <br/>";

echo "<h4> phrase 1     Acheter 3 produits couterait $resultat1 </h4> <br/>" ;
echo "<h4> Phrase 2     Acheter la totalité des produits disponibles coûterait $resultat3 </h4> <br/>";
echo "<h4> Phrase 3     Si 3 produits sont vendus, il reste  $resultat2 produits en stock </h4> <br/>";
?>
<p>
<?php
if ($disponible == true)  { echo "Le produit $nom_produit est disponible en magasin. <br/>";}

else if ($disponible == false)  { echo "Le produit $nom_produit n'est malheureusemeent plus disponible.";} 

else if ($disponible == true)
?>
</p>
<p>
<?php 
if($resultat2 > 5)
{
    echo "Il reste $resultat2 produits en magasin";
}
else if($resultat2 < 5)
{
    echo "Il ne reste plus que $resultat2 produits en magasin";
}
else if($resultat2 ==1)
{
    echo "il ne reste qu'un produit";
}
else if($resultat2 ==0)
{
    echo "Il ne reste plus de produit en magasin";
}
?>
</p>
</html>