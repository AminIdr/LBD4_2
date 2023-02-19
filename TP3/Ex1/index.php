<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="show_student_infos.php" method="POST">
    <div class="form-group">
        <label> Entrez le code de l'étudiant:</label>
        <input type="text" class="form-control" name="code" placeholder="Ex: Et***">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>