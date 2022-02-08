<?php include "header.php"; ?>


<br />
<br />
<br />
<br />
<br />

<table width="100%">
    <tr>
        <TH> Référence    </TH>  
        <TH> Désignation  </TH>
        <TH> Prix unitaire </TH>
        <TH> Quantité </TH>
        <TH> PT (PU * Q) </TH>
        <TH> PRIX TTC </TH>
    </tr>

    <?php 
    for ($i=0;$i<$nb_ligne;$i++) { ?>
        <tr>
            <TH> <?=$reference[$i] ?>   </TH>  
            <TH> <?=$designation[$i] ?>  </TH>
            <TH> <?=$prix[$i] ?> </TH>
            <TH> <?=$quantite[$i] ?> </TH>
            <TH> <?=$prix_total[$i] ?> €</TH>
            <TH> <?=$prix_total_ttc[$i] ?> €</TH>
        </tr>
    <?php } ?>
</table>

<?php include "footer.php"; ?>