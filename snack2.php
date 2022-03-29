<?php 
  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];
  if (strlen($name) > 3 && is_numeric($age) && strpos($mail, '@') && strpos($mail, '.', -4)){
    echo 'Accesso riuscito';
  } else {
    echo 'Accesso negato';
  }
?>