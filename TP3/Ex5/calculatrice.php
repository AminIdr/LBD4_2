<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="" method="POST">
    <input required type="number" class="form-control" name="first">
    <select required class="form-control" name="operator">
        <option value="a">+</option>
        <option value="s">-</option>
        <option value="m">x</option>
        <option value="d">/</option>
    </select>
    <input required type="number" class="form-control" name="second">
    <button type="submit" class="btn btn-primary">=</button>
</form>
<?php
$first_operand = (int)$_POST["first"];
$second_operand = (int)$_POST["second"];
switch ($_POST["operator"]){
    case "a":
        echo $first_operand + $second_operand;
        break;
    case "s":
        echo $first_operand - $second_operand;
        break;
    case "m":
        echo $first_operand * $second_operand;
        break;
    case "d":
        echo $first_operand / $second_operand;
        break;
}

?>
</body>
</html>