<?php

$rndAdj = ["Rekt", "Shrekt", "RIP", "Deleted", "Owned", "Fract", "six", "seven", "eight", "nine"];
$rndNoun = ["Base", "Face", "Mind", "Huh", "Body", "Soul", "asdf", "asdfg", "qwer", "onemore"];
function rndServer($combo) {
//$combo = [];
  $Rand = mt_rand(0,9);
  //$combo = ($rndAdj, $rndNoun);
  return $combo[$Rand];
}
$rndAdj2 = rndServer($rndAdj);
$rndNoun2 = rndServer($rndNoun);
?>

<!DOCTYPE html>
<html>
  <head>
    <?php ?>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Name Gen</h1>
    <h2><<?php echo "{$rndAdj2} {$rndNoun2} "  ?></h2>

  </body>
</html>
