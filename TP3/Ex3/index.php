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
<form action="destination.php" method="POST">
    <div class="form-group">
        <label>Nom:</label>
        <input required type="text" class="form-control" name="nom" placeholder="Nom">
    </div>
    <div class="form-group">
        <label>Prenom:</label>
        <input required type="text" class="form-control" name="prenom" placeholder="Prenom">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input required type="email" class="form-control" name="email" placeholder="Email">
    </div>
    <div class="form-group">
        <label>Objet:</label>
        <input required type="text" class="form-control" name="objet" placeholder="Objet">
    </div>
    <div class="form-group">
        <label>Contacter:</label>
        <select required class="form-control" name="contact">
            <option value="sav">Service après-vente</option>
            <option value="st">Service techniques</option>
        </select>
    </div>
    <div class="form-group">
        <label>Corps:</label>
        <textarea required class="form-control" name="corps" placeholder="Corps du message"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>