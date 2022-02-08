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

 
