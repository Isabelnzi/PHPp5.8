<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>P5ex8</title>
  </head>
  <body>
    <p>
  <?php
  $array = array ('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');
     for ($mois = 0; $mois < 11; $mois++)
     {
      echo $array[$mois] . '</br>';
     }
  ?>
</p>
</body>
