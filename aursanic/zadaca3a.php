<?php

$file = fopen("zadatak3a.txt", 'w');
fwrite($file, $_POST["ovojetekst"]);
fclose($file);

