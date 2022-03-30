<?php 
  $name = isset($_GET['name']) ? $_GET['name'] : '';
  $mail = isset($_GET['mail']) ? $_GET['mail'] : '';
  $age = isset($_GET['age']) ? $_GET['age'] : '';

  if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.', -4)){
    echo 'Accesso riuscito';
  } else {
    echo 'Accesso negato, potrebbero mancare dei dati.';
  };
  
?>