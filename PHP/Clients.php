<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clients</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form name="x" action="index.php" method="post">
    <input type="submit" value="Home">
    </form>
    <?php

        include 'cnx.php';
        $sql = $cnx->prepare("select identifiant,nom,prenom,ancienReleve,dernierReleve from client where idcontroleur =".$_GET['id']);
        $sql->execute();

        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<p>".$ligne['nom']." - " .$ligne['prenom']." - ".$ligne['ancienReleve']." - " .$ligne['dernierReleve']. "</p>";
            echo "<td><a href='AjoutReleve.php?identifiant=".$ligne['identifiant']."'>Nouveau releve</a></td>";
        }
    ?>
</body>
</html>