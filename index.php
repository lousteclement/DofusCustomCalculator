<?php
session_start();
?>
<head xmlns="http://www.w3.org/1999/html">
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div id="wrapper">
    <div class="row">

<!-- ZONE CHAPEAU -->
    <a href="#" class="select"><div id="chapeau" class="blocs_base">
<?php
$var='chapeau';
    if (isset($_SESSION["nom$var"])){
        $modif_sup1='Modifier';
        echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
        echo "<div id=titre>".$_SESSION["nom$var"]."</div>";

        echo "<div id=content>";
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
        }
        echo "</div>";
    }
else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup1='Ajouter';
}
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup1?>" class="lien">
    <input type="hidden" name="var" value="<?=$var?>">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="<?=$var?>">
</form>
        </div>
    </div></a>

<!-- ZONE CAPE -->
    <a href="#" class="select"><div id="cape" class="blocs_base">
<?php

    if (isset($_SESSION["nomcape"]) && $_SESSION["nomcape"]!=""){
        $modif_sup2="Modifier";
        echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
        echo "<div id=titre>".$_SESSION["nomcape"]."</div>";
        echo "<div id=content>";
        if (isset($_SESSION["Forcecape"])){
            echo "<p>Force : ".$_SESSION["Forcecape"]."</p>";
        }
        if (isset($_SESSION["Intelligencecape"])){
            echo "<p>Intelligence : ".$_SESSION["Intelligencecape"]."</p>";
        }
        if (isset($_SESSION["Chancecape"])){
            echo "<p>Chance : ".$_SESSION["Chancecape"]."</p>";
        }
        if (isset($_SESSION["Agilitécape"])){
            echo "<p>Agilité : ".$_SESSION["Agilitécape"]."</p>";
        }
        if (isset($_SESSION["Vitalitécape"])){
            echo "<p>Vitalité : ".$_SESSION["Vitalitécape"]."</p>";
        }
        if (isset($_SESSION["Sagessecape"])){
            echo "<p>Sagesse : ".$_SESSION["Sagessecape"]."</p>";
        }
        if (isset($_SESSION["Dommagesfixescape"])){
            echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixescape"]."</p>";
        }
        if (isset($_SESSION["Dommages%cape"])){
            echo "<p>Dommages % : ".$_SESSION["Dommages%cape"]."</p>";
        }
        if (isset($_SESSION["Bonuspiègescape"])){
            echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègescape"]."</p>";
        }
        if (isset($_SESSION["Bonussoinscape"])){
            echo "<p>Bonus soins : ".$_SESSION["Bonussoinscape"]."</p>";
        }
        if (isset($_SESSION["CoupsCritiquescape"])){
            echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquescape"]."</p>";
        }
        echo '</div>';
    }
    else{
        echo "<img class='tool' src='files/tool.png'/>";
        $modif_sup2="Ajouter";
    }
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup2?>" class="lien">
    <input type="hidden" name="var" value="cape">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="cape">
</form>
            </div>
    </div></a>

<!-- ZONE AMULETTE -->
    <a href="#" class="select"><div id="amulette" class="blocs_base">
<?php
if (isset($_SESSION["nomamulette"]) && $_SESSION["nomamulette"]!=""){
    $modif_sup3="Modifier";
    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
    echo "<div id=titre>".$_SESSION["nomamulette"]."</div>";
    echo "<div id=content>";
      if (isset($_SESSION["Forceamulette"])){
          echo "<p>Force : ".$_SESSION["Forceamulette"]."</p>";
      }
      if (isset($_SESSION["Intelligenceamulette"])){
          echo "<p>Intelligence : ".$_SESSION["Intelligenceamulette"]."</p>";
      }
      if (isset($_SESSION["Chanceamulette"])){
          echo "<p>Chance : ".$_SESSION["Chanceamulette"]."</p>";
      }
      if (isset($_SESSION["Agilitéamulette"])){
          echo "<p>Agilité : ".$_SESSION["Agilitéamulette"]."</p>";
      }
      if (isset($_SESSION["Vitalitéamulette"])){
          echo "<p>Vitalité : ".$_SESSION["Vitalitéamulette"]."</p>";
      }
      if (isset($_SESSION["Sagesseamulette"])){
          echo "<p>Sagesse : ".$_SESSION["Sagesseamulette"]."</p>";
      }
      if (isset($_SESSION["Dommagesfixesamulette"])){
          echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesamulette"]."</p>";
      }
      if (isset($_SESSION["Dommages%amulette"])){
          echo "<p>Dommages % : ".$_SESSION["Dommages%amulette"]."</p>";
      }
      if (isset($_SESSION["Bonuspiègesamulette"])){
          echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesamulette"]."</p>";
      }
      if (isset($_SESSION["Bonussoinsamulette"])){
          echo "<p>Bonus soins : ".$_SESSION["Bonussoinsamulette"]."</p>";
      }
      if (isset($_SESSION["CoupsCritiquesamulette"])){
          echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesamulette"]."</p>";
      }
      echo '</div>';
}
else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup3="Ajouter";
}
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup3?>" class="lien">
    <input type="hidden" name="var" value="amulette">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="amulette">
</form>
            </div>
    </div></a>
        
        </div>
    <div class="clear"></div>

    <div class="row">
<!-- ZONE ANNEAU 1 -->
        <a href="#" class="select"><div id="anneau1" class="blocs_base">
<?php
    if (isset($_SESSION["nomanneau1"]) && $_SESSION["nomanneau1"]!=""){
        $modif_sup4="Modifier";
        echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
        echo "<div id=titre>".$_SESSION["nomanneau1"]."</div>";
    echo "<div id=content>";
    if (isset($_SESSION["Forceanneau1"])){
        echo "<p>Force : ".$_SESSION["Forceanneau1"]."</p>";
    }
    if (isset($_SESSION["Intelligenceanneau1"])){
        echo "<p>Intelligence : ".$_SESSION["Intelligenceanneau1"]."</p>";
    }
    if (isset($_SESSION["Chanceanneau1"])){
        echo "<p>Chance : ".$_SESSION["Chanceanneau1"]."</p>";
    }
    if (isset($_SESSION["Agilitéanneau1"])){
        echo "<p>Agilité : ".$_SESSION["Agilitéanneau1"]."</p>";
    }
    if (isset($_SESSION["Vitalitéanneau1"])){
        echo "<p>Vitalité : ".$_SESSION["Vitalitéanneau1"]."</p>";
    }
    if (isset($_SESSION["Sagesseanneau1"])){
        echo "<p>Sagesse : ".$_SESSION["Sagesseanneau1"]."</p>";
    }
    if (isset($_SESSION["Dommagesfixesanneau1"])){
        echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesanneau1"]."</p>";
    }
    if (isset($_SESSION["Dommages%anneau1"])){
        echo "<p>Dommages % : ".$_SESSION["Dommages%anneau1"]."</p>";
    }
    if (isset($_SESSION["Bonuspiègesanneau1"])){
        echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesanneau1"]."</p>";
    }
    if (isset($_SESSION["Bonussoinsanneau1"])){
        echo "<p>Bonus soins : ".$_SESSION["Bonussoinsanneau1"]."</p>";
    }
    if (isset($_SESSION["CoupsCritiquesanneau1"])){
        echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesanneau1"]."</p>";
    }
    echo '</div>';
    }
    else{
        echo "<img class='tool' src='files/tool.png'/>";
        $modif_sup4="Ajouter";
    }
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup4?>" class="lien">
    <input type="hidden" name="var" value="anneau1">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="anneau1">
</form>
            </div>
    </div></a>

<!-- ZONE ANNEAU 2 -->
        <a href="#" class="select"><div id="anneau2" class="blocs_base">
<?php
if (isset($_SESSION["nomanneau2"]) && $_SESSION["nomanneau2"]!=""){
    $modif_sup5="Modifier";
    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
    echo "<div id=titre>".$_SESSION["nomanneau2"]."</div>";
    echo "<div id=content>";
      if (isset($_SESSION["Forceanneau2"])){
          echo "<p>Force : ".$_SESSION["Forceanneau2"]."</p>";
      }
      if (isset($_SESSION["Intelligenceanneau2"])){
          echo "<p>Intelligence : ".$_SESSION["Intelligenceanneau2"]."</p>";
      }
      if (isset($_SESSION["Chanceanneau2"])){
          echo "<p>Chance : ".$_SESSION["Chanceanneau2"]."</p>";
      }
      if (isset($_SESSION["Agilitéanneau2"])){
          echo "<p>Agilité : ".$_SESSION["Agilitéanneau2"]."</p>";
      }
      if (isset($_SESSION["Vitalitéanneau2"])){
          echo "<p>Vitalité : ".$_SESSION["Vitalitéanneau2"]."</p>";
      }
      if (isset($_SESSION["Sagesseanneau2"])){
          echo "<p>Sagesse : ".$_SESSION["Sagesseanneau2"]."</p>";
      }
      if (isset($_SESSION["Dommagesfixesanneau2"])){
          echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesanneau2"]."</p>";
      }
      if (isset($_SESSION["Dommages%anneau2"])){
          echo "<p>Dommages % : ".$_SESSION["Dommages%anneau2"]."</p>";
      }
      if (isset($_SESSION["Bonuspiègesanneau2"])){
          echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesanneau2"]."</p>";
      }
      if (isset($_SESSION["Bonussoinsanneau2"])){
          echo "<p>Bonus soins : ".$_SESSION["Bonussoinsanneau2"]."</p>";
      }
      if (isset($_SESSION["CoupsCritiquesanneau2"])){
          echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesanneau2"]."</p>";
      }
      echo '</div>';
}else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup5="Ajouter";
}

?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup5?>" class="lien">
    <input type="hidden" name="var" value="anneau2">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="anneau2">
</form>
            </div>
    </div></a>

<!-- ZONE CEINTURE -->
        <a href="#" class="select"><div id="ceinture" class="blocs_base">
<?php
if (isset($_SESSION["nomceinture"]) && $_SESSION["nomceinture"]!=""){
    $modif_sup6="Modifier";
    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
    echo "<div id=titre>".$_SESSION["nomceinture"]."</div>";
    echo "<div id=content>";
      if (isset($_SESSION["Forceceinture"])){
          echo "<p>Force : ".$_SESSION["Forceceinture"]."</p>";
      }
      if (isset($_SESSION["Intelligenceceinture"])){
          echo "<p>Intelligence : ".$_SESSION["Intelligenceceinture"]."</p>";
      }
      if (isset($_SESSION["Chanceceinture"])){
          echo "<p>Chance : ".$_SESSION["Chanceceinture"]."</p>";
      }
      if (isset($_SESSION["Agilitéceinture"])){
          echo "<p>Agilité : ".$_SESSION["Agilitéceinture"]."</p>";
      }
      if (isset($_SESSION["Vitalitéceinture"])){
          echo "<p>Vitalité : ".$_SESSION["Vitalitéceinture"]."</p>";
      }
      if (isset($_SESSION["Sagesseceinture"])){
          echo "<p>Sagesse : ".$_SESSION["Sagesseceinture"]."</p>";
      }
      if (isset($_SESSION["Dommagesfixesceinture"])){
          echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesceinture"]."</p>";
      }
      if (isset($_SESSION["Dommages%ceinture"])){
          echo "<p>Dommages % : ".$_SESSION["Dommages%ceinture"]."</p>";
      }
      if (isset($_SESSION["Bonuspiègesceinture"])){
          echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesceinture"]."</p>";
      }
      if (isset($_SESSION["Bonussoinsceinture"])){
          echo "<p>Bonus soins : ".$_SESSION["Bonussoinsceinture"]."</p>";
      }
      if (isset($_SESSION["CoupsCritiquesceinture"])){
          echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesceinture"]."</p>";
      }
      echo '</div>';
}
else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup6="Ajouter";
}
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup6?>" class="lien">
    <input type="hidden" name="var" value="ceinture">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="ceinture">
</form>
            </div>
    </div></a>

        </div>
    <div class="clear"></div>

    <div class="row">
<!-- ZONE BOTTES -->
        <a href="#" class="select"><div id="bottes" class="blocs_base">
<?php
if (isset($_SESSION["nombottes"]) && $_SESSION["nombottes"]!=""){
    $modif_sup7="Modifier";
    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
    echo "<div id=titre>".$_SESSION["nombottes"]."</div>";
    echo "<div id=content>";
      if (isset($_SESSION["Forcebottes"])){
          echo "<p>Force : ".$_SESSION["Forcebottes"]."</p>";
      }
      if (isset($_SESSION["Intelligencebottes"])){
          echo "<p>Intelligence : ".$_SESSION["Intelligencebottes"]."</p>";
      }
      if (isset($_SESSION["Chancebottes"])){
          echo "<p>Chance : ".$_SESSION["Chancebottes"]."</p>";
      }
      if (isset($_SESSION["Agilitébottes"])){
          echo "<p>Agilité : ".$_SESSION["Agilitébottes"]."</p>";
      }
      if (isset($_SESSION["Vitalitébottes"])){
          echo "<p>Vitalité : ".$_SESSION["Vitalitébottes"]."</p>";
      }
      if (isset($_SESSION["Sagessebottes"])){
          echo "<p>Sagesse : ".$_SESSION["Sagessebottes"]."</p>";
      }
      if (isset($_SESSION["Dommagesfixesbottes"])){
          echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesbottes"]."</p>";
      }
      if (isset($_SESSION["Dommages%bottes"])){
          echo "<p>Dommages % : ".$_SESSION["Dommages%bottes"]."</p>";
      }
      if (isset($_SESSION["Bonuspiègesbottes"])){
          echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesbottes"]."</p>";
      }
      if (isset($_SESSION["Bonussoinsbottes"])){
          echo "<p>Bonus soins : ".$_SESSION["Bonussoinsbottes"]."</p>";
      }
      if (isset($_SESSION["CoupsCritiquesbottes"])){
          echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesbottes"]."</p>";
      }
      echo '</div>';
}
else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup7="Ajouter";
}
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup7?>" class="lien">
    <input type="hidden" name="var" value="bottes">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="bottes">
</form>
            </div>
    </div></a>

<!-- ZONE FAMILIER -->
        <a href="#" class="select"><div id="familier" class="blocs_base">
<?php
if (isset($_SESSION["nomfamilier"]) && $_SESSION["nomfamilier"]!=""){
    $modif_sup8="Modifier";
    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
    echo "<div id=titre>".$_SESSION["nomfamilier"]."</div>";
    echo "<div id=content>";
      if (isset($_SESSION["Forcefamilier"])){
          echo "<p>Force : ".$_SESSION["Forcefamilier"]."</p>";
      }
      if (isset($_SESSION["Intelligencefamilier"])){
          echo "<p>Intelligence : ".$_SESSION["Intelligencefamilier"]."</p>";
      }
      if (isset($_SESSION["Chancefamilier"])){
          echo "<p>Chance : ".$_SESSION["Chancefamilier"]."</p>";
      }
      if (isset($_SESSION["Agilitéfamilier"])){
          echo "<p>Agilité : ".$_SESSION["Agilitéfamilier"]."</p>";
      }
      if (isset($_SESSION["Vitalitéfamilier"])){
          echo "<p>Vitalité : ".$_SESSION["Vitalitéfamilier"]."</p>";
      }
      if (isset($_SESSION["Sagessefamilier"])){
          echo "<p>Sagesse : ".$_SESSION["Sagessefamilier"]."</p>";
      }
      if (isset($_SESSION["Dommagesfixesfamilier"])){
          echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesfamilier"]."</p>";
      }
      if (isset($_SESSION["Dommages%familier"])){
          echo "<p>Dommages % : ".$_SESSION["Dommages%familier"]."</p>";
      }
      if (isset($_SESSION["Bonuspiègesfamilier"])){
          echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesfamilier"]."</p>";
      }
      if (isset($_SESSION["Bonussoinsfamilier"])){
          echo "<p>Bonus soins : ".$_SESSION["Bonussoinsfamilier"]."</p>";
      }
      if (isset($_SESSION["CoupsCritiquesfamilier"])){
          echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesfamilier"]."</p>";
      }
      echo '</div>';
}
else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup8="Ajouter";
}
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup8?>" class="lien">
    <input type="hidden" name="var" value="familier">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="familier">
</form>
            </div>
    </div></a>

<!-- ZONE BOUCLIER -->
        <a href="#" class="select"><div id="bouclier" class="blocs_base">
        <?php
if (isset($_SESSION["nombouclier"]) && $_SESSION["nombouclier"]!=""){
    $modif_sup9="Modifier";
    echo "<img class='tool' src='files/tool.png' style='visibility: visible'/>";
    echo "<div id=titre>".$_SESSION["nombouclier"]."</div>";
    echo "<div id=content>";
      if (isset($_SESSION["Forcebouclier"])){
          echo "<p>Force : ".$_SESSION["Forcebouclier"]."</p>";
      }
      if (isset($_SESSION["Intelligencebouclier"])){
          echo "<p>Intelligence : ".$_SESSION["Intelligencebouclier"]."</p>";
      }
      if (isset($_SESSION["Chancebouclier"])){
          echo "<p>Chance : ".$_SESSION["Chancebouclier"]."</p>";
      }
      if (isset($_SESSION["Agilitébouclier"])){
          echo "<p>Agilité : ".$_SESSION["Agilitébouclier"]."</p>";
      }
      if (isset($_SESSION["Vitalitébouclier"])){
          echo "<p>Vitalité : ".$_SESSION["Vitalitébouclier"]."</p>";
      }
      if (isset($_SESSION["Sagessebouclier"])){
          echo "<p>Sagesse : ".$_SESSION["Sagessebouclier"]."</p>";
      }
      if (isset($_SESSION["Dommagesfixesbouclier"])){
          echo "<p>Dommages fixes : ".$_SESSION["Dommagesfixesbouclier"]."</p>";
      }
      if (isset($_SESSION["Dommages%bouclier"])){
          echo "<p>Dommages % : ".$_SESSION["Dommages%bouclier"]."</p>";
      }
      if (isset($_SESSION["Bonuspiègesbouclier"])){
          echo "<p>Bonus pièges : ".$_SESSION["Bonuspiègesbouclier"]."</p>";
      }
      if (isset($_SESSION["Bonussoinsbouclier"])){
          echo "<p>Bonus soins : ".$_SESSION["Bonussoinsbouclier"]."</p>";
      }
      if (isset($_SESSION["CoupsCritiquesbouclier"])){
          echo "<p>Coups Critiques : ".$_SESSION["CoupsCritiquesbouclier"]."</p>";
      }
      echo '</div>';
}
else{
    echo "<img class='tool' src='files/tool.png'/>";
    $modif_sup9="Ajouter";
}
?>
        <div class="buttons">
<form action="modif.php" method="post">
    <input type="submit" value="<?=$modif_sup9?>" class="lien">
    <input type="hidden" name="var" value="bouclier">
</form>
<form action="suppression.php" method="post">
    <input type="submit" value="Désequipper" class="lien suppr">
    <input type="hidden" name="var" value="bouclier">
</form>
            </div>
    </div></a>
        </div>
<div class="clear"></div>
<!-- ZONE CAC -->






<!-- ZONE STATS -->

</div>


