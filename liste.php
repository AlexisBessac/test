<?php

require 'db-connect.php';

$query = $dbh->prepare("SELECT * FROM livre");
$query->execute();
$livre = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des livres</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <div class="container">
            <h1 class="title">Liste des livres</h1>
            <table class="table table-bordered border-primary table-striped my-4">
                <thead>
                    <tr>
                        <th>
                            <h2>Titre</h2>
                        </th>
                        <th>
                            <h2>Auteur</h2>
                        </th>
                        <th>
                            <h2>Genre</h2>
                        </th>
                        <th>
                            <h2>Année de parution</h2>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($livre as $indice => $livres) : ?>
                        <tr>
                            <td>
                                <h3><?= $livres['titre'] ?></h3>
                            </td>
                            <td><?= $livres['auteur'] ?></td>
                            <td><?= $livres['genre'] ?></td>
                            <td><?= $livres['annee'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
</body>

</html>