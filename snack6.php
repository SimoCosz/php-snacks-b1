<?php
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack6</title>
</head>
<body>
  <?php
  for ($i = 0; $i<count($db['teachers']); $i++){
    ?>
    <div style='background-color: red;'><?php echo $db['teachers'][$i]['name'];?> -
    <?php echo $db['teachers'][$i]['lastname'];?></div>
    <?php
  }
  ?>  
  <hr>
  <?php
  for ($i = 0; $i<count($db['pm']); $i++){
    ?>
    <div style='background-color: lightgray;'><?php echo $db['pm'][$i]['name'];?> -
    <?php echo $db['pm'][$i]['lastname'];?></div>
    <?php
  }
  ?>  
</body>
</html>