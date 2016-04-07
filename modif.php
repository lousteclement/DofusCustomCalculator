   <html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
<?php
session_start();
$var=$_POST['var'];
if (isset($_SESSION["nom$var"]))
{
    $nom=$_SESSION["nom$var"];
}
else
{
    $nom='';
}
if (isset($_SESSION["nbstats$var"]))
{
    $nbstats=$_SESSION["nbstats$var"];
}
else
{
    $nbstats='';
}
?>
<form id="modif1" action="modif2.php" method="post">
    <input id="textModif1" type="text" name="nom" placeholder="Nom de l'item" required value="<?=$nom?>"/>
    <br/>
    <input id="numberModif1" type="number" name="nombreStats" placeholder="Nombre de stats" required min="0" value="<?=$nbstats?>"/>
    <br/>
    <input type="hidden" value="<?=$var;?>" name="origine"/>
    <input id="submitModif1" type="submit" name="submitModif1" value="Ok"/>
</form>
    </body>
   </html>