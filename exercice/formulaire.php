<?php

if (!empty($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="GET">
        <input type="text" name="firstname" placeholder="Entrer votre prénom">
        <button type="submit">Envoyer</button>
    </form>

    <?php if (!empty($firstname) || isset($firstname)) : ?>
        <p>Bonjour <?= $firstname ?></p>
    <?php endif; ?>
</body>

</html>