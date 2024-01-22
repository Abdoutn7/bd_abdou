<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="control.js"></script>
</head>
<body>
    <center><h1>CARNET D'ADRESSES</h1></center> <br>
    <form action="carnet.php" method=post" name="f">
    Nom et Prenom: <input type="text" name="nom" id="nom"> <br>
    Adresse E-mail: <input type="text" name="mail" id="mail"><br>
    <input type="button" value="Ajouter" onclick="ajouter()">
    <input type="button" value="Supprimer" onclick="supr()">
    <input type="button" value="Retrouver Adresse E-mail" onclick="retrouver()"><br>
    <tr><table></table></tr>
    <select name="sename" id="sename">
        <?php
        for{}

        ?>
    </select><br><br><br>
    </form>
</body>
</html>