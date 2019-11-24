<?php
// Fonction
// Affichage de la phrase avec une forme html et en plus un bouton retour.
function templet($rep){
    echo '
    <html>
    <head>
        <title>le formulaire</title>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    </head>
    <body style="background-color: black">
        <form action="medor.php" method="post">
            <table width="100%" border="5" cellspacing="5" cellpadding="5">
              <tr>
                    <td bgcolor="#85D1FA">
                        <div align="center">
                            <font color="#ffffff" size="24" face="Arial, helvetica, sans-serif">'.$rep.'</font>
                        </div>
                    </td>
              </tr>

                    <td>
                        <div align="center">
                            <a href="medor.html">Retour</a>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>
    ';
}

// Variables.
$phrases = 'Médor est ';

// Récupération des données du formulaire.
$var = ($_POST['valeur']);

// Comparaison des valeurs.
switch (true){
    case $var == 'souris';
        templet("$phrases"."une petite "."$var");
        break;
    case $var == 'girafe';
        templet("$phrases"."une petite "."$var");
        break;
    case $var == 'elephant';
        templet("$phrases"."un petit "."$var");
        break;
    case $var == 'chien';
        templet("$phrases"."un petit "."$var");
        break;
    default;
        templet("Non, non, non Médor n'est pas ça, mais c'est bien un chien!");
        break;    
};
?>