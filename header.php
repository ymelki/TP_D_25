<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>TP_D_25 : ...</title>
</head>

<body>
<?php require "function.php"; ?>
    <section>
        <table width="100%">
    <tr>
        <td>MON ENTREPRISE <br >
        3 Avenue de la république<br />
        75012 PARIS
        </td>
        <td>
            Facture : <?= $nb_facture; ?>
                      <br/>
            Date :  <?= $date; ?>
        </td>
        <td>
            MON ENTREPRISE <br >
            3 Avenue de la république<br />
            75012 PARIS
        </td>
        <td>
           <input type="button" value="IMPRIMER CETTE PAGE" onclick="imprimer()"> 
        </td>
    </tr>
</table>
    </section>



</table>