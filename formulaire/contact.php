<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $errors = [];

    if (empty($_POST['firstname'])) {
        $errors['firstname'] = "Le champ Prénom n'est pas rempli";
    }
    if (empty($_POST['lastname'])) {
        $errors['lastname'] = "Le champ Nom n'est pas rempli";
    }
    if (empty($_POST['email'])) {
        $errors['email'] = "Le champ Email n'est pas rempli";
    }
    if (empty($_POST['password'])) {
        $errors['password'] = "Le mot de passe est obligatoire";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" name="firstname" class="form-control" placeholder="Entrer votre prénom">
                        <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                            <div class="invalid-feedback d-block"><?= $errors['firstname'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Entrer votre nom">
                        <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                            <div class="invalid-feedback d-block"><?= $errors['lastname'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Entrer votre mail">
                        <?php if (isset($errors) && !empty($errors['email'])) : ?>
                            <div class="invalid-feedback d-block"><?= $errors['email'] ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Mot de passe</label>
                        <input type="password" name="password" class="form-control">
                        <?php if (isset($errors) && !empty($errors['password'])) : ?>
                            <div class="invalid-feedback d-block"><?= $errors['password'] ?></div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>