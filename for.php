<?php
  fwrite(STDOUT, "Enter your Starting Digit" . PHP_EOL);
  $SDigit = fgets(STDIN);
  fwrite(STDOUT, "Enter your Ending Digit" . PHP_EOL);
  $EDigit = fgets(STDIN);
  fwrite(STDOUT, "and Lastly an increment");
  $increment = trim(fgets(STDIN));

    if($increment == " ") {
      $increment = 1;
    }

    if(is_numeric($SDigit) && is_numeric($EDigit) && is_numeric($increment)) {
      for($i = $SDigit; $i <= $EDigit; $i += $increment) {
        echo " ";
      }
    } else {
        echo " ";
    }
 ?>
