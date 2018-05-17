<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $Frost=True;
    $Frostfire=True;
    $Fire=True;
    $Arcane=True;
    $Frostarcane=True;
    $Firearcane=True;
     ?>

     <?php
  if (($Frost) && ($Fire)) {
    echo "Frost je lepší";
  }
  elseif (($Frostfire) && ($Arcane)) {
    echo "Frostfire je lepší";
  }
  elseif (($Frostarcane) && ($Firearcane)) {
    echo "$Firearcane je lepší";
  }
  else {
    echo "Mage se nehraje";
  }
      ?>
  </body>
</html>
