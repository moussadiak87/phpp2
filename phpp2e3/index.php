<?php
 $age = 20;
 $gender= 'woman';
if($age >= 18 && $gender == 'man') {
  echo 'Vous êtes un homme et vous êtes majeur';
}else if ($age <18 && $gender == 'man'){
  echo 'Vous êtes un homme et vous êtes mineur';
}else if($age >= 18 && $gender == 'woman'){
  echo 'Vous êtes une femme et vous êtes majeur';
}else if ($age < 18 && $gender == 'woman'){
  echo 'Vous êtes une femme et vous êtes mineur';
}

 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>
