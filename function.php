<?php
// nombre de ligne de mon tableau de facture
$nb_ligne=rand(1,10);

// numéro de facture aléatoire
$nb_facture=rand(1000,5000);

// date du jour
$date=date("d-m-y"); 

// Tableau en PHP de donnée d articles
for ($i=0;$i<$nb_ligne;$i++) {
    $reference[]="ref".$i;
}

 
