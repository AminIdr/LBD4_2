<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ex2</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <?php
  $arr = [
      "WEB" => [
        [ "Nom" => "PHP", 
          "Lien" => "https://www.php.net/",
          "Avis" => 5 ],
        [ "Nom" => "HTML", 
          "Lien" => "https://www.w3schools.com/html/default.asp",
          "Avis" => 4],
        [ "Nom" => "JavaScript", 
        "Lien" => "https://www.javascript.com/",
        "Avis" => 2],
        [ "Nom" => "CSS", 
        "Lien" => "https://www.w3schools.com/css/",
        "Avis" => 4]
      ],
      "DB" => [
        [ "Nom" => "MySQL", 
          "Lien" => "https://www.mysql.com/",
          "Avis" => 5 ],
        [ "Nom" => "PostgreSQL", 
          "Lien" => "https://www.postgresql.org/",
          "Avis" => 5],
        [ "Nom" => "Oracle", 
        "Lien" => "https://www.oracle.com/",
        "Avis" => 4],
        [ "Nom" => "DB2", 
        "Lien" => "https://www.ibm.com/products/db2",
        "Avis" => 4]
      ]
      ];
      echo '<table class="table">
      <thead>
          <tr>
              <th scope="col">Domaine</th>
              <th scope="col">Nom</th>
              <th scope="col">Lien</th>
              <th scope="col">Avis</th>
          </tr>
      </thead>
      <tbody>';
      $domaine = $_POST["domaine"];
      $len = count($arr[$domaine])+1;
      echo "<td rowspan=\"$len\">$domaine</td>";
      foreach ($arr[$domaine] as $row){
        echo "<tr>";
        foreach ($row as $key => $value){
          echo "<td>$value</td>";
        }
        echo "</tr>";
      }
  ?>
</body>
</html>