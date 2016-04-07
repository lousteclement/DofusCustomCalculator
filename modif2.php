<head>
    <meta charset="UTF-8">
    <script src="scripts/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="scripts/jquery.dd.js" type="text/javascript"></script>
    <link rel="stylesheet" href="scripts/dd.css">
    <link rel="stylesheet" href="style.css">
</head>
<script language="javascript">
    $(document).ready(function(e) {
        try {
            $("body select").msDropDown();
        } catch(e) {
            alert(e.message);
        }
    });
</script>
<?php
session_start();
$nom=$_POST['nom'];
$origine=$_POST['origine'];
$_SESSION["nom$origine"]=$nom;
echo "<br/>";
echo "<form id='modif2' action='verif.php' method='post'>";
echo "<p id='titre2'>".$_POST['nom']."</p>";
$nbstats=$_POST['nombreStats'];
for ($i=0;$i<$nbstats;$i++)
{
    echo "  <select name='typeStats$i' placeholder='Choisir stat' required>
                <option value='' disabled selected hidden>Choisir stat</option>
                <option data-image='files/intelligence.png'>Vitalité</option>
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
    echo "<input id='numberModif2' type='number' name='qteStat$i' placeholder='Quantite' required/>";
    echo "<br/>";
    echo "<input type='hidden' name='nbstats' value='$nbstats'/>";
    echo "<input type='hidden' name='origine' value='$origine'/>";
}
echo "<input id='submitModif2' type='submit' value='OK' name='submitChapeau2'>";

?>


