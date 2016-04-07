    <head>
        <meta charset="UTF-8">
    </head>
<?php
session_start();
?>
<form id="modifcac1" action="modifcac2.php" method="post">
    <input type="text" name="nom" placeholder="Nom de l'item" required/>
    <br/>
    <input type="number" name="nombreStats" placeholder="Nombre de stats" required min="0"/>   
    <br/>
    <input type="number" name="nbjetCAC" placeholder="Nombre de jets" required min="1"/>
    <input type="submit" name="submitModifcac1" value="Ok"/>
</form>