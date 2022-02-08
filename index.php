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
<br />
<br />
<div id="tab_total">
    <table>
        <tr>
            <th>TOTAL HT</th>
            <th><?= $prix_total_HT_F ?> €</th>
        </tr>
        <tr>
            <th>TVA 20%</th>
            <th><?= $taxe ?> €</th>
        </tr>
            <th>TOTAL</th>
            <th><?= $total ?> €</th>
        <tr>
            
        </tr>
    </table>
</div>
<?php include "footer.php"; ?>