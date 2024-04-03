<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
    $errors = [];

    if(empty($_POST['lastname']) || strlen($_POST['lastname']) <= 1)
    {
        $errors['lastname'] = "Le champ Nom doit être remplis et contenir plus d'un caractère";
    }

    if(empty($_POST['firstname']) || strlen($_POST['lastname']) <= 1)
    {
        $errors['firstname'] = "Le champ Prénom doit être remplis et contenir plus d'un caractère";
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = "Le champ Email est obligatoire et doit contenir une adresse mail valide";
    }

    if(empty($_POST['ticket']) || gmp_sign($_POST['ticket']))
    {
        $errors['ticket'] = "Veuiller entrer un nombre positif pour le choix du nombre de billets"; 
    }

    if(empty($_POST['reservation']))
    {
        $errors['reservation'] = "Veuillez faire un choix";
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
            <div class="col-12 col-md-4">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="lastname" class="form-lacel">Nom</label>
                        <input type="text" name="lastname" id="lastname" class="form-control">
                    <?php if(isset($errors) && !empty($_POST['lastname'])) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['lastname'] ?>
                        </div>
                    <?php endif; ?>    
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    <?php if(isset($errors) && !empty($_POST['firstname'])) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['firstname'] ?>
                        </div>
                    <?php endif; ?> 
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    <?php if(isset($errors) && !empty($_POST['email'])) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['email'] ?>
                        </div>
                    <?php endif; ?> 
                    </div>
                    <div class="mb-3">
                        <label for="ticket" class="form-label">Nombre de tickets choisit</label>
                        <input type="number" name="ticket" id="ticket" class="form-control">
                    <?php if(isset($errors) && !empty($_POST['ticket'])) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['ticket'] ?>
                        </div>
                    <?php endif; ?> 
                    </div>
                    <div class="mb-3">
                    <label for="reservation" class="form-label">Type de billet</label>
                        <select class="form-select form-select-lg" name="reservation" id="reservation">
                            <option value="normal">Normal</option>
                            <option value="VIP">VIP</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    <?php if(isset($errors) && !empty($_POST['reservation'])) : ?>
                        <div class="invalid-feedback d-block">
                            <?= $errors['reservation'] ?>
                        </div>
                    <?php endif; ?> 
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Réserver un billet</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>