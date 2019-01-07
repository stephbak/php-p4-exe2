<?php
$littlestring = 'Bonjour.';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie4</title>
</head>
<body>
  <?php function string($string){
    return $string;
  }
  echo string($littlestring);
  ?>
</body>
</html>
