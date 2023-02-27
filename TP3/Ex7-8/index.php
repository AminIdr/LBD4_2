<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 7</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
      
          <form action="infos.php" method="POST">
              <div class="container">
      
                  <div class="col-10 form-group">
                      <label for="exampleFormControlSelect1">Civilité</label>
                      <select name="Profession" class="form-control" id="exampleFormControlSelect1">
                          <option value="1">Salarier</option>
                          <option value="2">Fonctionnaire</option>
                          <option value="3">Profession libérale</option>
                      </select>
                  </div>
                  <div class="col-5 form-group">
                      <label for="formGroupExampleInput2">Nom</label>
                      <input required name="nom" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                  </div>
                  <div class="col-5 form-group">
                      <label for="formGroupExampleInput">Prénom</label>
                      <input required type="text" name="prenom" class="form-control" id="formGroupExampleInputS" placeholder="Another input">
                  </div>
              <div class="col-5">
                  <label for="montant">Montant de Financement</label>
                  <input required name="montant" type="number" step="any" class="form-control" id="montant" placeholder="Montant de Financement">
              </div>
              <div class="col-5">
                  <label for="duree">Durée en Mois</label>
                  <input required name="duree" type="number" max="300" class="form-control" id="duree" placeholder="Montant de Financement">
              </div>
          <div>
              <div class="form-check">
                <input checked class="form-check-input" value="1" name = "check" type="checkbox" id="check">
                <label class="form-check-label" for="check">Assurance</label>
              </div>
  </div>
  <div class="row">
    <div class="col-10">
      <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
  </div>

  </form>

    </body>
</html>