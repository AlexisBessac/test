<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) 
{
    $errors = [];

    if (empty($_POST['fisrtsname']) || strlen($_POST['firstname']) <= 1) 
    {
        $errors['firstname'] = "Le champ Prénom n'est pas rempli";
    }

    if (empty($_POST['lastname']) || strlen($_POST['lastname']) <= 1) 
    {
        $errors['lastname'] = "Le champ Nom n'est pas rempli";
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
        $errors['email'] = "Le champ Email n'est pas rempli";
    }

    if(empty($_POST['datedebut']))
    {
        $errors['datedebut'] = "Veuiller choisir une date au format JJ/MM/AAAA";
    }

    if(empty($_POST['datefin']))
    {
        $errors['datefin'] = "Veuiller choisir une date au format JJ/MM/AAAA";
    }


    if (empty($_POST['reservation'])) {
        $errors['reservation'] = "Veuillez sélectionner une option";
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
                        <label for="firstname">Votre prénom</label>
                        <input type="text" name="firstname" placeholder="Entrer votre prénom">
                        <?php if (isset($errors) && !empty($errors['firstname'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['firstname'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="lastname">Votre nom</label>
                        <input type="text" name="lastname" placeholder="Entrer votre nom">
                        <?php if (isset($errors) && !empty($errors['lastname'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['lastname'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="email">Votre mail</label>
                        <input type="email" name="email" placeholder="Entrer votre mail">
                        <?php if (isset($errors) && !empty($errors['email'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['email'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="datedebut">Choississez votre date de début de séjour</label>
                        <input type="date" name="datedebut" id=date_debut>
                        <?php if (isset($errors) && !empty($errors['datedebut'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['datedebut'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="datefin">Choississez la date de fin de votre séjour</label>
                        <input type="date" name="datefin" id="date_fin">
                        <?php if (isset($errors) && !empty($errors['datefin'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['datefin'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label for="reserve" class="form-label">Réserver une chambre</label>
                        <select multiple class="form-select form-select-lg" name="reservation" id="reservation">
                            <option value="simple">Chambre simple</option>
                            <option value="double">Chambre doule</option>
                            <option value="suite">Suite</option>
                        </select>
                        <?php if (isset($errors) && !empty($errors['reservation'])) : ?>
                            <div class="invalid-feedback d-block">
                                <?= $errors['reservation'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Réserver</button>
                </form>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>