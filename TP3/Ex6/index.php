<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ex 6</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
    <?php
    $name = $prenom = $civilite = $date = $pass = $confPass = "";
    $formations = [];
    $name_err = $prenom_err =$civilite_err= $date_err = $pass_err = $confPass_err = $formations_err = "";
    $valid = true;

    if (!empty($_POST)) {
        $name = htmlspecialchars($_POST["name"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $civilite = htmlspecialchars($_POST["civilite"]);
        $date = htmlspecialchars($_POST["date"]);
        $pass = htmlspecialchars($_POST["pass"]);
        $confPass = htmlspecialchars($_POST["confPass"]);

        if (isset($_POST["formations"])) {
        $formations = $_POST["formations"];
        }

        if (empty(trim($name))) {
        $name_err = "Le nom est obligatoire";
        $valid = false;
        }
        if (empty(trim($prenom))) {
        $prenom_err =  "Le prenom est obligatoire";
        $valid = false;
        }
        if (empty(trim($date))) {
        $date_err = "La date de naissance est obligatoire";
        $valid = false;
        }
        if (empty(trim($pass))) {
        $pass_err = "Le mot de passe est obligatoire";
        $valid = false;
        }
        if(empty(trim($confPass))){
            $confPass_err = "La confirmation du mot de passe est obligatoire";
            $valid = false;
        }
        if ($pass != $confPass) {
        $confPass_err = "Les mots de passe ne correspondent pas";
        $valid = false;
        }
        if (empty($formations)) {
        $formations_err = "Vous devez choisir au moins une formation";
        $valid = false;
        }
    } else {
        $valid = false;
    }
    if ($valid == false) { ?>
        <form action ="index.php" method="POST">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type ="text" id="name" name="name" value="<?php echo $name?>">
                <span><?php echo $name_err; ?></span>

            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text"  id="prenom" name="prenom" value="<?php echo $prenom; ?>">
                <span><?php echo $prenom_err; ?></span>

            </div>
            <div class="form-group">
                 <label for="date">Date de naissance</label>
                <input type ="date" id="date" name="date" value="<?php echo $date?>">
                <span><?php echo $date_err; ?></span>

            </div>
           <div class="form-group">
            <label></label>
           </div>
            <div class="form-group">
                <label for="civilite">Civilité</label>
                <select id="civilite" name="civilite">
                    <option value="Mme"<?php echo $civilite == "Mme" ? "checked" : "";?>>Mme</option>
                    <option value="Mr" <?php echo $civilite == "Mr" ? "checked" : "";?>>M</option>
                </select>


            </div>
            <div class="form-group">
                <label for="pass">Mot de passe</label>
                <input type ="password" id="pass" name="pass" value="<?php echo $pass?>">
                <span><?php echo $pass_err; ?></span>

            </div>
            <div class="form-group">
                <label for="confPass">Confirmation du mot de passe</label>
                <input type ="password" id="confPass" name="confPass" value="<?php echo $confPass?>">
                <span><?php echo $confPass_err; ?></span>
            </div>
            <div class="form-group">
                <label>Formations</label> 
                <input type ="checkbox" name="formations[]" value="Formation 1" <?php echo in_array("Formation 1", $formations) ? "checked" : "";?> > 
                <label>Formation 1</label>
                <input type ="checkbox" name="formations[]" value="Formation 2" <?php echo in_array("Formation 2", $formations) ? "checked" : "";?> >
                <label>Formation 2</label>
                <input type ="checkbox" name="formations[]" value="Formation 3"<?php echo in_array("Formation 3", $formations) ? "checked" : "";?> >
                <label>Formation 3</label>
                <span><?php echo $formations_err; ?></span>

            </div>
            <div>
                <input type ="submit" value ="Submit">
            </div>
        </form>
        <?php  } else {
            echo "Nom: $name<br>";
            echo "Prenom: $prenom<br>";
            echo "Date de naissance: $date<br>";
            echo  implode(", ", $formations); ;    
        }
        ?>
    </body>
</html>