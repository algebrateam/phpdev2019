<?php
$filename='ucenici.txt';
$dat= file($filename);  //  cijeli file je array svaki red jedan član
print_r($dat);
echo $dat[2];
foreach ($dat as $value) {
  echo $value;
}
// cijeli file u string
echo "<hr>";
echo file_get_contents($filename);
mkdir('temp_dir');
