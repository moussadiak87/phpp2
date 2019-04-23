<?php
$age = 31;
if ($age <= :18) {
    echo 'Vous êtes majeur.';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p><?php echo $age ?></p>
  </body>
</html>
