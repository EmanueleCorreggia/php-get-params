<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$message ='';


if (empty($name) || empty($mail) || empty($age)) {
  $message= 'Accesso negato';
}elseif (strlen($name) <= 3) {
  $message= 'Accesso negato';
}elseif (strpos($mail, '@') ===false || strpos($mail, '.') ===false){
  $message= 'Accesso negato';
}elseif (!is_numeric($age)) {
  $message= 'Accesso negato';
}else  {
  $message ='Accesso riuscito';
}
echo $message;
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1></h1>


  </body>
</html>
