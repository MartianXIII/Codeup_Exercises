<?php
//This is Broken, FRUSTRATION ENSUES
function logMessage($logLevel, $message)
{
  //$CurrentDate ;
  //$filemtime ;
  $filename = 'log-' . date('Y-m-d') . '.log';
  $dateTime = date('Y-m-d H:i:s:');
  $string = "$dateTime [{$logLevel}] $message";
  //  echo $date->format('YYYY-MM-DD HH:MM:SS');
  $handle = fopen($filename, 'a');
  fwrite($handle, PHP_EOL . $string);
  fclose($handle);
  /*if (file_exists($filename)) {
    file_put_contents($filename, $string, FILE_APPEND);
    echo "$filename was last modified: " . date ("F d Y H:i:s.", filemtime($filename));
} else {
  file_put_contents($filename, $string);
}*/

}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");

function logInfo($message) {
   logMessage('INFO', $message);
}

function logError($message) {
   logMessage('ERROR', $message);
}

logInfo("What What What");
logError("YEsyesNo");
