<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
</head>
<body>
<?php

$taux = $_POST["Profession"];
$duree = $_POST["duree"];
$montant = $_POST["montant"];
$mensualite = ($montant*$taux/1200)/(1 - pow(1 + ($taux/1200), - $duree));


$interet = ($montant*$taux)/(1200);

$arr = array(array(1, round($mensualite, 2), round($interet, 2), round($mensualite-$interet, 2), round($montant-$mensualite+$interet, 2)));

for($i = 1; $i < $duree; $i ++){
    $po = array();
    array_push($po, $i+1);
    array_push($po, round($mensualite, 2));
    $int = ($arr[$i-1][4] * $taux)/1200;
    array_push($po, round($int, 2));


    $am = $mensualite- $int;
    array_push($po, round($am, 2));

    $cap = $arr[$i-1][4] - $po[3];
    array_push($po, round($cap, 2));

    array_push($arr, $po);
    if($po[4] <= 0){
      break;
  }
}

echo '<h1 class="display-5 text-center">
    Vos informations sont ici:
</h1>
<table class="table table-hover text-center">
    <thead>
        <tr>
        <th scope="col">Date Ech</th>
        <th scope="col">Mensualité (MAD)</th>
        <th scope="col">Interet (MAD)</th>
        <th scope="col">Amortissement (MAD)</th>
        <th scope="col">Cap restant dû (MAD)</th>
        ';
        

            
        echo '</tr>
    </thead>
<tbody>';

    foreach($arr as $key => $val){
        echo '<tr>';
        echo '<td>'.$val[0].'</td>';
        echo '<td>'.$val[1].'</td>';
        echo '<td>'.$val[2].'</td>';
        echo '<td>'.$val[3].'</td>';
        echo '<td>'.$val[4].'</td>';
        echo '</tr>';
    }




    echo '
    </tbody>
    </table>';

?>
</body>
</html>