<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ajout Nouveau Releve</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php

    include 'cnx.php';
    $sql = $cnx->prepare("select nom,prenom,ancienReleve,dernierReleve from client where identifiant =".$_GET['identifiant']);
    $sql->execute();

    foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<p>".$ligne['nom']." - " .$ligne['prenom']." - ".$ligne['ancienReleve']." - " .$ligne['dernierReleve']. "</p>";
            echo '<form action="AjoutReleve.php" method="post">
            <label>Nouveau releve</label>
            <br>
            <input name="Releve" type="text">
            <br>
            <input type="submit" value="Insérer">
            </form>';
        }
    ?>
</body>
</html>