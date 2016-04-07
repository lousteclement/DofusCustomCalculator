<?php
session_start();
$origine=$_POST["origine"];
$nbstats=$_POST["nbstats"];
unset($_SESSION["Vitalité$origine"]);
unset($_SESSION["Sagesse$origine"]);
unset($_SESSION["Force$origine"]);
unset($_SESSION["Intelligence$origine"]);
unset($_SESSION["Chance$origine"]);
unset($_SESSION["Agilité$origine"]);
unset($_SESSION["Dommagesfixes$origine"]);
unset($_SESSION["Dommages%$origine"]);
unset($_SESSION["Bonuspièges$origine"]);
unset($_SESSION["Bonussoins$origine"]);
unset($_SESSION["CoupsCritiques$origine"]);
$_SESSION["nbstats$origine"]=$nbstats;
for ($i=0;$i<$nbstats;$i++){
    $_SESSION["typeStats$i{$origine}"]=$_POST["typeStats$i"];
    $_SESSION["qteStats$i{$origine}"]=$_POST["qteStat$i"];
}
header('Location: index2.php');





/*switch ($_POST["typeStats$i"]){
        case "Vitalité":
            $_SESSION["Vitalité$origine"]=$_POST["qteStat$i"];
            break;
        case "Sagesse":
            $_SESSION["Sagesse$origine"]=$_POST["qteStat$i"];
            break;
        case "Force":
            $_SESSION["Force$origine"]=$_POST["qteStat$i"];
            break;
        case "Intelligence":
            $_SESSION["Intelligence$origine"]=$_POST["qteStat$i"];
            break;
        case "Chance":
            $_SESSION["Chance$origine"]=$_POST["qteStat$i"];
            break;
        case "Agilité":
            $_SESSION["Agilité$origine"]=$_POST["qteStat$i"];
            break;
        case "Dommages fixes":
            $_SESSION["Dommagesfixes$origine"]=$_POST["qteStat$i"];
            break;
        case "Dommages %":
            $_SESSION["Dommages%$origine"]=$_POST["qteStat$i"];
            break;
        case "Bonus pièges":
            $_SESSION["Bonuspièges$origine"]=$_POST["qteStat$i"];
            break;
        case "Bonus soins":
            $_SESSION["Bonussoins$origine"]=$_POST["qteStat$i"];
            break;
        case "Coups Critiques":
            $_SESSION["CoupsCritiques$origine"]=$_POST["qteStat$i"];
            break;
    }
 */