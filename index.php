<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $errors = [];
    if (empty($_POST['titre'])) {
        $errors['titre'] = "Le titre du livre n'est pas renseigné";
    }
    if (empty($_POST['auteur'])) {
        $errors['auteur'] = "L'auteur' du livre n'est pas renseigné";
    }
    if (empty($_POST['genre'])) {
        $errors['genre'] = "Le genre du livre n'est pas renseigné";
    }
    if (empty($_POST['annee'])) {
        $errors['annee'] = "L'année du livre n'est pas renseignée";
    }
    if(empty($_POST['submit']))
    {
        $errors['submit'] = "Vous n'avez pas appuyer sur le bouton";
    }
}

require 'db-connect.php';

$query = $dbh->prepare("INSERT INTO livre (titre, auteur, genre, annee) VALUES (:titre, :auteur, :genre, :annee)");
$query->execute([
    'titre' => $_POST['titre'],
    'auteur' => $_POST['auteur'],
    'genre' => $_POST['genre'],
    'annee' => $_POST['annee']
])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label for="titre"></label>
            <input type="text" name="titre" placeholder="Entrer le ttire du livre">
            <?php if((isset($errors)) && !empty($errors['titre'])): ?> 
                <div><?= $errors['titre'] ?></div>    
            <?php endif;?>
            <br>
        <label for="auteur"></label>
            <input type="text" name="auteur" placeholder="Entrer l'auteur du livre">
            <?php if(isset($errors) && !empty($errors['auteur'])): ?> 
                <div><?= $errors['auteur'] ?></div>
            <?php endif; ?>
            <br>
        <label for="genre"></label>
            <input type="text" name="genre" placeholder="Entrer le genre du livre">
            <?php if(isset($errors) && !empty($errors['genre'])): ?>
                <div><?= $errors['genre'] ?></div>    
            <?php endif; ?>
            <br>
        <label for="annee"></label>
            <input type="number" name="annee" placeholder="Entrer l'année du livre">
            <?php if(isset($errors) && !empty($errors['annee'])): ?> 
                <div><?= $errors['annee'] ?></div>    
            <?php endif; ?>
            <br>
        <button type="submit" name="submit">Envoyer</button>
    </form>
</body>

</html>