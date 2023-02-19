<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $objet = $_POST["objet"];
    $contact = $_POST["contact"];
    $corps = $_POST["corps"];

    echo "<strong>Nom:</strong> $nom<br>";
    echo "<strong>Prenom:</strong> $prenom<br>";
    echo "<strong>Email:</strong> $email<br>";
    echo "<strong>Objet:</strong> $objet<br>";
    echo "<strong>Contact:</strong> ";
    if ($contact=="sav") echo "Service après-vente<br>";
    else echo "Service techniques<br>";
    echo "<strong>Corps:</strong> $corps<br>";

    ?>
</body>
</html>