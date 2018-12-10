<?php

$file = fopen($_POST["ime"], 'w');
fwrite($file, $_POST["tekst"]);
fclose($file);
