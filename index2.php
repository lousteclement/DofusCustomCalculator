<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>index2</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="conteneur">
            <?php
            for ($i=0;$i<=8;$i++)
            {
                switch ($i)
                {
                    case 0:
                        $var="chapeau";
                        break;
                    case 1:
                        $var="cape";
                        break;
                    case 2:
                        $var="amulette";
                        break;
                    case 3:
                        $var="anneau1";
                        break;
                    case 4:
                        $var="anneau2";
                        break;
                    case 5:
                        $var="ceinture";
                        break;
                    case 6:
                        $var="bottes";
                        break;
                    case 7:
                        $var="familier";
                        break;
                    case 8:
                        $var="bouclier";
                        break;
                }
        
                echo "  <a href=\"#\" class=\"select\">
                        <div id=\"$var\" class=\"blocs_base\">";
                if (isset($_SESSION["nom$var"]))
                {
                    $modif_sup="Modifier";
                    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
                    echo "<div id=titre>".$_SESSION["nom$var"]."</div>";
                    echo "<div id=content>";
                    $nbstats{$i}=$_SESSION["nbstats$var"];
                    for ($n=0;$n<$nbstats{$i};$n++)
                    {
                        echo "<p>".$_SESSION["typeStats$n{$var}"]." : ".$_SESSION["qteStats$n{$var}"]."</p>";
                    }
                    echo "</div>";
                }
                else
                {
                    echo "<img class='tool' src='files/tool.png'/>";
                    $modif_sup='Ajouter';
                }
                    ?>
                <div class="buttons">
                    <form action="modif.php" method="post">
                        <input type="submit" value="<?=$modif_sup?>" class="lien">
                        <input type="hidden" name="var" value="<?=$var?>">
                    </form>
                    <form action="suppression.php" method="post">
                        <input type="submit" value="Désequipper" class="lien suppr">
                        <input type="hidden" name="var" value="<?=$var?>">
                    </form>
                </div>

                        </div>
                        </a>
        
        <?php
            }
        ?>
            </div>
        </div>
    </body>
</html>



<?php
/*
if (isset($_SESSION["Force$var"])){
echo "<p>Force : ".$_SESSION["Force$var"]."</p>";
}
if (isset($_SESSION["Intelligence$var"])){
echo "<p>Intelligence : ".$_SESSION["Intelligence$var"]."</p>";
}
if (isset($_SESSION["Chance$var"])){
echo "<p>Chance : ".$_SESSION["Chance$var"]."</p>";
}
if (isset($_SESSION["Agilité$var"])){
echo "<p>Agilité : ".$_SESSION["Agilité$var"]."</p>";
}
if (isset($_SESSION["Vitalité$var"])){
echo "<p>Vitalité : ".$_SESSION["Vitalité$var"]."</p>";
}
if (isset($_SESSION["Sagesse$var"])){
echo "<p>Sagesse : ".$_SESSION["Sagesse$var"]."</p>";
}
if (isset($_SESSION["Dommagesfixes$var"])){
echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixes$var"]."</p>";
}
if (isset($_SESSION["Dommages%$var"])){
echo "<p>Dommages % : ".$_SESSION["Dommages%$var"]."</p>";
}
if (isset($_SESSION["Bonuspièges$var"])){
echo "<p>Bonus pièges : ".$_SESSION["Bonuspièges$var"]."</p>";
}
if (isset($_SESSION["Bonussoins$var"])){
echo "<p>Bonus soins : ".$_SESSION["Bonussoins$var"]."</p>";
}
if (isset($_SESSION["CoupsCritiques$var"])){
echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiques$var"]."</p>";
}*/
?>