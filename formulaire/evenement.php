<?php

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit']))
{
    $errors = [];

    if(empty($_POST['lastname']) || strlen($_POST['lastname']) <=1)
    {
        $errors['lastname'] = "Le champ Nom est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['firstname']) || strlen($_POST['lastname']) <=1)
    {
        $errors['firstname'] = "Le champ Prénom est obligatoire et doit contenir plus d'un caractère";
    }

    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $errors['email'] = "Le champ Email est obligatoire et doit contenir un email valable";
    }

    if(empty($_POST['phone']) && is_numeric($_POST['phone']))
    {
        $errors['phone'] = "Le numéro de téléphone est vide et doit contenir que des chiffres";
    }

    if(empty($_POST['reservation']))
    {
        $errors['reservation'] = "Veuiller séléctionner une option";
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Nom</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter votre nom">
                        <?php if(isset($errors) && !empty($_POST['lastname'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['lastname'] ?>
                            </div> 
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Entrer votre prénom">
                            <?php if(isset($errors) && !empty($_POST['firstname'])) : ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['firstname'] ?>
                                </div>
                            <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Entrer votre Email">
                            <?php if(isset($errors) && !empty($_POST['email'])) : ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['email'] ?>
                                </div>
                            <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numéro de téléphone</label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Entrer votre numéro de téléphone">
                            <?php if(isset($errors) && !empty($_POST['phone'])) : ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['phone'] ?>
                                </div>
                            <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="reserve" class="form-label">Inscription à l'événement</label>
                        <select class="form-select form-select-lg" name="reservation" id="reservation">
                            <option value="participant">Participant</option>
                            <option value="bénévole">Bénévole</option>
                            <option value="organisateur">Organisateur</option>
                        </select>
                            <?php if(isset($errors) && !empty($_POST['reserve'])) : ?>
                                <div class="invalid-feedback d-block">
                                    <?= $errors['reservation'] ?>
                                </div>
                            <?php endif ; ?>    
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Participer à l'événement</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>