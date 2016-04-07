<?php
session_start();
$var=$_POST['var'];
unset($_SESSION["nom$var"]);
unset($_SESSION["nbstats$var"]);
unset($_SESSION["Vitalité$var"]);
unset($_SESSION["Sagesse$var"]);
unset($_SESSION["Force$var"]);
unset($_SESSION["Intelligence$var"]);
unset($_SESSION["Chance$var"]);
unset($_SESSION["Agilité$var"]);
unset($_SESSION["Dommagesfixes$var"]);
unset($_SESSION["Dommages%$var"]);
unset($_SESSION["Bonuspièges$var"]);
unset($_SESSION["Bonussoins$var"]);
unset($_SESSION["CoupsCritiques$var"]);

// CAC
/*$nbjetCAC=$_SESSION["nbjetCAC"];
for ($i=0;$i<$nbjetCAC;$i++)
{
    unset($_SESSION["JetMinCAC$i"]);
    unset($_SESSION["JetMaxCAC$i"]);
}
unset($_SESSION["nbjetCAC"]);*/


header('Location: index2.php');