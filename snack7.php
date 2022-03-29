<?php
$classe = [
  [
    'nome' => 'Emanuele',
    'cognome' => 'Di Felice',
    'voti' => [8, 7, 4, 9, 10, 8]
  ],
  [
    'nome' => 'Simone',
    'cognome' => 'Coszach',
    'voti' => [7, 6, 8, 9, 4, 10, 6]
  ],
  [
    'nome' => 'Giuseppe',
    'cognome' => 'Dicosmo',
    'voti' => [8, 9, 7, 9, 8, 5]
  ],
  [
    'nome' => 'Nicholas',
    'cognome' => 'Marcaccini',
    'voti' => [7, 7, 6, 8, 10, 5]
  ],
];

function calcola_media($array){
  return array_sum($array) / count($array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack7</title>
</head>
<body>
  <?php
  for ( $i=0; $i<count($classe); $i++){
    ?>
    <div>
      <?php echo $classe[$i]['nome'] ?> 
      <?php echo $classe[$i]['cognome'] ?> 
      Media: <?php echo round(calcola_media($classe[$i]['voti']), 1) ?>
    </div>
    <hr>
    <?php
  }
  ?>
</body>
</html>