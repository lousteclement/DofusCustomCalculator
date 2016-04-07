    <head>
        <meta charset="UTF-8">
    </head>
<?php
session_start();
echo 'Modification de : ';
echo $_POST['nom'];
$nom=$_POST['nom'];
$origine="cac";
echo "<br/>";
echo "<form id='modifcac2' action='verif.php' method='post'>";
$nbstats=$_POST['nombreStats'];
for ($i=0;$i<$nbstats;$i++)
{
    echo "  <select name='typeStats$i' placeholder='Choisir stat' required>
                <option value='' disabled selected hidden>Choisir stat</option>
                <option>Vitalité</option>
                <option>Sagesse</option>
                <option>Force</option>
                <option>Intelligence</option>
                <option>Chance</option>
                <option>Agilité</option>
                <option>Dommages fixes</option>
                <option>Dommages %</option>
                <option>Bonus pièges</option>
                <option>Bonus soins</option>                
                <option>Coups Critiques</option>
                
            </select>";
    echo "<input type='number' name='qteStat$i' placeholder='Quantite' required/>";
    echo "<br/>";    
    echo "<input type='hidden' name='nom' value='$nom'/>";
    echo "<input type='hidden' name='nbstats' value='$nbstats'/>";
    echo "<input type='hidden' name='origine' value='$origine'/>";
}
echo "<input type='submit' value='OK' name='submitChapeau2'>";

?>


