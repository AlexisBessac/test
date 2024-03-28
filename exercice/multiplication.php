<?php

if (!empty($_GET['table'] && is_numeric($_GET['table']))) {
    $table = $_GET['table'];
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
        <input type="text" name="table" placeholder="Entrer un nombre : ">
        <button type="submit">=</button>
    </form>
    <hr>
    <body>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <tr>
                    <td><?php echo "$table x $i"; ?></td>
                    <td><?php echo $table * $i; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</body>

</html>