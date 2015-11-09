<?php
//
// function parseContacts($filename) {
//     $filename = 'contacts.txt';
//     $handle = fopen($filename, 'r');
//     $contents = trim(fread($handle, filesize($filename)));
//     $contentsArray = explode("\n", $contents);
//
//   foreach ($contentsArray as $contact) {
//     $newArray = explode ('|', $contact);
//     $contacts[] = [
//       'name' => $newArray[0],
//       'number' => formatNumber($newArray[1])
//     ];
//   }
//   fclose($handle);
//   return $contacts;
// }
//
// function formatNumber($number) {
//     return '(' . substr($number, 0, 3) . ')' . substr($number, 3, 3) . '-' . substr($number, 6, 4);
// }
// var_dump(parseContacts('contacts.txt'));

function parseContacts($filename) {
    // read file
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contactData = explode(PHP_EOL, $contents);
    fclose($handle);
    // parse contact
    foreach ($contactData as $value) {
        $array = explode('|', $value);
        $name = array_shift($array);
        $data = array_shift($array);
        $number = "".substr($data, 0, 3)."-".substr($data, 3, 3)."-".substr($data,6);
        $contact = ["name"=> $name,
                    "number"=> $number];
        $contacts[] = $contact;
    }
    return $contacts;
}
var_dump(parseContacts('contacts.txt'));
