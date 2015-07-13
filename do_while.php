<?php
  $a = 2;
  do {
      echo "$a is equal to {$a}" . PHP_EOL;
      $a = $a * $a;
  } while ($a <= 10000000000000000000000000000000000000000000000000);
 ?>
