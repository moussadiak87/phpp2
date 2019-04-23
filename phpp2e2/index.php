<?php
//On déclare un boolean qu'on innitialise à true.
//On ne met pas de quotes car c'est un boolean.
// Comme on attribut une valeur a une variable on ne met qu'un =
$isEasy = true;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>phpp2e2</title>
  </head>
  <body>
    <!-- ON utilise le == pour faire une comparaison. -->
    <!--  on pourrait utiliser le === pour comparer strictement (comparer le type et la valeur)-->
    <?php if($isEasy == true){ ?>
      <p>C'est facile</p>
    <?php }else{ ?>
      <p>C'est diffile</p>
    <?php } ?>
  </body>
</html>
