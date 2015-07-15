<?php
  $test = 5;
  while ($test <= 15) {
    if ($test % 4 == 0 && $test % 2 == 0)
    echo "$test is divisible by 4 and 2" . PHP_EOL;
    $test++;
  }
 ?>
