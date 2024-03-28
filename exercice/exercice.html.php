<?php

$notes = [5, 6, 10, 15, 2, 20, 18, 16, 17, 11];

$sommeNotes = 0;

$nombreNotes = count($notes);

$moyenne = $sommeNotes / $nombreNotes;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .moinsde10 {
            color: #ff0000;
        }

        .plusde15 {
            color: #00ff00;
        }
    </style>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
    <?php foreach ($notes as $note) : ?>
        <div><?= $sommeNotes += $note ?></div>
    <?php endforeach; ?>
    <div>
        <p>La somme des notes est de : <?= $sommeNotes ?></p>
    </div>
    <div>
        <p>La moyenne des notes est de : <?= $moyenne ?> sur 20</p>
    </div>

    <table border="1">
        <thead>
            <th>Notes</th>
        </thead>
        <tbody>
            <?php foreach ($notes as $note) : ?>
                <tr>
                    <?php if ($note < 10) : ?>
                        <td class="moinsde10"><?= $note ?></td>
                    <?php elseif ($note > 15) : ?>
                        <td class="plusde15"><?= $note ?></td>
                    <?php else : ?>
                        <td><?= $note ?></td>
                    <?php endif; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>