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
  <link rel="stylesheet" href="app.css">
</head>
<body>
  <?php
    foreach ($db as $key => $value ){
      ?>
      <?php
      for ($i = 0; $i < count($db[$key]); $i++){
      ?>
      <div class='<?php echo ($key == 'teachers'? 'red' : 'gray') ?>'>
        <?php echo $db[$key][$i]['name'] ?>
        <?php echo $db[$key][$i]['lastname'] ?>
      </div>
      <?php
      }
      ?>
      <hr>
      <?php
    };
    ?>  
  </body>
</html>