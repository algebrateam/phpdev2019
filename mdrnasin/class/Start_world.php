<?php
include_once 'Covjek.php'; //dok ne naucimo autoloading

$c1=new World\Covjek();
$c2=new World\Covjek();
$c1->broj=5;
$c2->ime="Martina";

echo $c1 ->ime;
echo $c2 ->ime;
