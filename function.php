<?php


// nombre de ligne de mon tableau de facture
$nb_ligne=rand(1,10);

// numéro de facture aléatoire
$nb_facture=rand(1000,5000);

// date du jour
$date=date("d-m-y"); 

// Tableau en PHP de donnée d articles REF
for ($i=0;$i<$nb_ligne;$i++) {
    $reference[]="ref_".rand(2340,8345);
    $prix[]=rand(1,1000);
    $quantite[]=rand(1,10);
    $designation[]="prod_".rand(2340,8345);
}

// Tableau en PHP de donnée d articles PT
for ($i=0;$i<$nb_ligne;$i++) {
    $prix_total[$i]= $prix[$i]*$quantite[$i];
    $prix_total_ttc[$i]= $prix[$i]*1.2;
}

 $prix_total_HT=0;
// somme d'un tableau de valeur
for ($i=0;$i<$nb_ligne;$i++){ 
    $prix_total_HT=$prix_total_HT+$prix_total[$i];  //  $prix_total[0]+$prix_total[1]+$prix_total[2]  
}

// Fonction qui permet de faire la somme du tableau de valeur
$prix_total_HT_F=array_sum($prix_total);

// Taxe = Prix * 0.2
$taxe= $prix_total_HT * 0.2;

// Total = taxe + Prix_total_HT
$total= $taxe + $prix_total_HT; 

// Tableau associatif / indicé PHP utilisateur affichant le nom le prenom son mail et son âge...
$utilisateur["nom"]="Melki";
$utilisateur["prenom"]="Yoel";
$utilisateur["age"]=34;

//echo $utilisateur["nom"];  afficher une case du tableau
// var_dump($utilisateur);   afficher tout mon tableau juste technique
// print_r($utilisateur);  afficher tout mon tableau juste technique
// afficher tout mon tableau avec une boucle plus representative
/*foreach (  $utilisateur  as $key => $value    ){
   echo "ma clé est : ". $key. "  . ma valeur est : ".$value;
}*/

/*
Créez une fonction
 affichant l’âge de l’utilisateur
  avec une couleur ... : HTML style=color:red;
  différente sur le texte suivant l’âge de l’utilisateur.
*/
function affiche_age ( $age) {
    $color="red"; 
    $colors=[
        "red",
        "green",
        "grey",
        "black",
        "purple",
        "yellow",
        "pink",
        "blue",
        "orange",
        "brown",
        "black",
        "black",
        "pink"];
    // En code on aime pas répété on fait des boucles...
    $agemin=0;
    $agemax=10;
    for ($i=0;$i<12;$i++) {
        if (  $age >= $agemin  && $age <=$agemax  ) {  $color=$colors[$i]; }
        $agemin=$i*10;
        $agemax=($i*10)+10;
    }
    global $utilisateur;
    echo "<div style=color:".$color.";>".$age."</div><br />";
}
affiche_age($age=8);
affiche_age($age=24);
affiche_age($age=14);
affiche_age($age=57);
affiche_age($age=97);
affiche_age($age=37);
