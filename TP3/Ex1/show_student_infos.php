<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
$etudiants = ["Et123" => ["Nom" => "AB", "Prenom" => "AC", "Notes" => ["module1" => 13, "module2" => 12, "module3" => 14]],
            "Et676" => ["Nom" => "BC", "Prenom" => "BD", "Notes" => ["module1" => 15, "module2" => 11, "module3" => 11]],
            "Et998" => ["Nom" => "CD", "Prenom" => "CE", "Notes" => ["module1" => 16, "module2" => 14, "module3" => 10]],
            "Et764" => ["Nom" => "DE", "Prenom" => "DF", "Notes" => ["module1" => 9, "module2" => 15, "module3" => 8]]];
$student_code = $_POST["code"];
if (!array_key_exists($student_code, $etudiants)){
    header("Location: index.php");
}
else{
    $nom = $etudiants[$student_code]["Nom"];
    $prenom = $etudiants[$student_code]["Prenom"];
    $module1 = $etudiants[$student_code]["Notes"]["module1"];
    $module2 = $etudiants[$student_code]["Notes"]["module2"];
    $module3 = $etudiants[$student_code]["Notes"]["module3"];
    echo '<table class="table">
    <thead>
        <tr>
            <th scope="col">Code etudiant</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Module 1</th>
            <th scope="col">Module 2</th>
            <th scope="col">Module 3</th>
        </tr>
    </thead>
    <tbody>
    <tr>';
    echo "
    <th>$student_code</td>
    <td>$nom</td>
    <td>$prenom</td>
    <td>$module1</td>
    <td>$module2</td>
    <td>$module3</td>"
    ;
}
?>
</body>
</html>