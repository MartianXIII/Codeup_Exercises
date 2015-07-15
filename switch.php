<?php
 // Mars Martian was Here.
 // Set the default timezone
 date_default_timezone_set('America/Chicago');
 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
$dayOfWeek = rand(1, 7);
if($dayOfWeek == 1) {
  echo 'Monday ... (╯°□°）╯︵ ┻━┻' . PHP_EOL;
} else if($dayOfWeek == 2) {
  echo '$Taco Tuesday' . PHP_EOL;
} else if($dayOfWeek == 3) {
  echo 'Wed Nes Day' . PHP_EOL;
} else if($dayOfWeek == 4) {
  echo 'Thursday insert witticism here.' . PHP_EOL;
} else if($dayOfWeek == 5) {
  echo 'Friday is for the Girlfriends' . PHP_EOL;
} else if($dayOfWeek == 6) {
  echo 'Saturday is for the Wives' . PHP_EOL;
}else if($dayOfWeek == 7) {
  echo 'Brunchday, church of Brunch' . PHP_EOL;
}
switch($dayOfWeek) {
  case 1:
    echo 'Monday ... (╯°□°）╯︵ ┻━┻' . PHP_EOL;
  case 2:
    echo '$Taco Tuesday' . PHP_EOL;
  case 3:
    echo 'Wed Nes Day' . PHP_EOL;
  case 4:
    echo 'Thursday insert witticism here.' . PHP_EOL;
  case 5:
    echo 'Friday is for the Girlfriends' . PHP_EOL;
  case 6:
    echo 'Saturday is for the Wives' . PHP_EOL;
  case 7:
    echo 'Brunchday, church of Brunch' . PHP_EOL;
 }
