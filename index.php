<?php
$region = array(
  '59' => 'Nord',
  '62' => 'Pas de Calais',
  '02'=> 'Aisne',
  '60' => 'Oise',
  '80' => 'Somme');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title> exercice 1</title>
  </head>
  <body>
    <p>
      <?php
      foreach ($region as $key => $value) {
          echo $key. $value. ' ';
      }
        ?>
    </p>
  </body>
</html>
