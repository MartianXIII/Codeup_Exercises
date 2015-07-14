<?php
  $value = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);
  foreach ($value as $values) {
    if (is_integer($values)) {
      echo "{$values} is an Int\n" . PHP_EOL;
    }else if (is_float($values)) {
      echo "{$values} is a float\n" . PHP_EOL;
    }else if(is_bool($values)) {
      echo "{$values} is a bool\n" . PHP_EOL;
    }else if (is_array($values)) {
      echo "{$values} is an array\n" . PHP_EOL;
    }else if (is_null($values)) {
      echo "{$values} is null\n" , PHP_EOL;
    }else if (is_string($values)) {
      echo "{$values} is a string\n" . PHP_EOL ;
    }
  }
