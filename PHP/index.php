<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Controleurs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
        include 'C:\xampp\htdocs\Master2019\DevoirEDF\PHP\cnx.php';
        $sql = $cnx->prepare("select id, nom, prenom from controleur");
        $sql->execute();
        echo "<table border='2'>";
        foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
        {
            echo "<tr>";
                echo "<td>".$ligne['nom']."</td>";
                echo "<td>".$ligne['prenom']."</td>";
                echo "<td><a href='Clients.php?id=".$ligne['id']."'>Tous les clients</a></td>";
            echo "</tr>";
        }
        echo "</table>";

    ?>
</body>
</html>