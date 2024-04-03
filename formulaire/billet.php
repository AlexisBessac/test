<?php



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
                    </div>
                    <div class="mb-3">
                        <label for="firstname" class="form-label">Prénom</label>
                        <input type="text" name="firstname" id="firstname" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Mail</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="ticket" class="form-label">Nombre de tickets choisit</label>
                        <input type="number" name="ticket" id="ticket" class="form-control">
                    </div>
                    <div class="mb-3">
                    <label for="reservation" class="form-label">Type de billet</label>
                        <select class="form-select form-select-lg" name="reservation" id="reservation">
                            <option value="normal">Normal</option>
                            <option value="VIP">VIP</option>
                            <option value="etudiant">Etudiant</option>
                        </select>
                    </div>
                    <input type="submit" name="submit" class="btn btn-primary">Réserver un billet</input>
                </form>
            </div>
        </div>
    </div>
</body>

</html>