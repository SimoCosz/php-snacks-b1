<?php 
  $partite = [
    [
      'casa' => 'Olimpia Milano',
      'ospite' => 'Virtus Bologna',
      'punti_casa' => '106',
      'punti_ospite' => '98',
    ],
    [
      'casa' => 'Reyer Venezai',
      'ospite' => 'Fortitutdo Bologna',
      'punti_casa' => '88',
      'punti_ospite' => '107',
    ],
    [
      'casa' => 'Mens Sana Siena',
      'ospite' => 'Auxilium Torino',
      'punti_casa' => '45',
      'punti_ospite' => '98',
    ],

  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack_1</title>
</head>
<body>
  <?php 
    for ( $i = 0; $i<count($partite); $i++ ){
      ?>
      <div>
        <?php echo $partite[$i]['casa'] ?> - <?php echo $partite[$i]['ospite'] ?> | <?php echo $partite[$i]['punti_casa']?> - <?php echo $partite[$i]['punti_ospite'] ?>
      </div>
      <?php
    }
  ?>
</body>
</html>