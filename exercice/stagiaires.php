<?php
$trainees = [
    [
        "firstname" => "John",
        "lastname" => "Doe",
        "age" => 20
    ],
    [
        "firstname" => "Alice",
        "lastname" => "Smith",
        "age" => 22
    ],
    [
        "firstname" => "Bob",
        "lastname" => "Johnson",
        "age" => 19
    ],
    [
        "firstname" => "Emma",
        "lastname" => "Brown",
        "age" => 25
    ],
    [
        "firstname" => "James",
        "lastname" => "Williams",
        "age" => 18
    ],
    [
        "firstname" => "Olivia",
        "lastname" => "Jones",
        "age" => 30
    ],
    [
        "firstname" => "Michael",

        "lastname" => "Davis",
        "age" => 24
    ],
    [
        "firstname" => "Sophia",
        "lastname" => "Miller",
        "age" => 27
    ],
    [
        "firstname" => "Matthew",
        "lastname" => "Wilson",
        "age" => 21
    ],
    [
        "firstname" => "Emily",
        "lastname" => "Moore",
        "age" => 28
    ],
    [
        "firstname" => "Daniel",
        "lastname" => "Taylor",
        "age" => 17
    ],
    [
        "firstname" => "Charlotte",
        "lastname" => "Anderson",
        "age" => 23
    ],
    [
        "firstname" => "William",
        "lastname" => "Thomas",
        "age" => 26
    ],
    [
        "firstname" => "Amelia",
        "lastname" => "Jackson",
        "age" => 29
    ],
    [
        "firstname" => "Ethan",
        "lastname" => "White",
        "age" => 16
    ],
    [
        "firstname" => "Mia",
        "lastname" => "Harris",
        "age" => 20
    ],
    [
        "firstname" => "Alexander",
        "lastname" => "Martin",
        "age" => 22
    ],
    [
        "firstname" => "Abigail",
        "lastname" => "Thompson",
        "age" => 30

    ],
    [
        "firstname" => "Ryan",
        "lastname" => "Garcia",
        "age" => 19
    ],
    [
        "firstname" => "Ava",
        "lastname" => "Young",
        "age" => 25
    ],
    [
        "firstname" => "Liam",
        "lastname" => "Scott",
        "age" => 18
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min">
    <style>
        tr:nth-child(even) td {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <table class="table table-bordered border-primary my-4">
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Age</th>
                <th>Mineur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trainees as $indice => $trainee) : ?>
                <tr>
                    <td><?= $trainee['firstname'] ?></td>
                    <td><?= $trainee['lastname'] ?></td>
                    <td><?= $trainee['age'] ?></td>
                    <td>
                        <?php if ($trainee['age'] < 18) : ?>
                            mineur
                        <?php endif; ?>
                    </td>
                <?php endforeach; ?>
                </tr>
        </tbody>
    </table>
</body>

</html>