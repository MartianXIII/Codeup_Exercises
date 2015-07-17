<?php
  fwrite(STDOUT, "Enter your Starting Digit" . PHP_EOL);
  $SDigit = trim(fgets(STDIN));
  fwrite(STDOUT, "Enter your Ending Digit" . PHP_EOL);
  $EDigit = trim(fgets(STDIN));
  fwrite(STDOUT, "and Lastly an increment". PHP_EOL);
  $increment = trim(fgets(STDIN));

    if($increment == "\n") {
      $increment = 1;
    }

    if(is_numeric($SDigit) || is_numeric($EDigit) || is_numeric($increment)) {
      for($i = $SDigit; $i <= $EDigit; $i += $increment) {
        echo ("$i" . PHP_EOL);
      }
    }
