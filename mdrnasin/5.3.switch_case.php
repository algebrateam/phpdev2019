<?php

$naziv = "algebra";

switch (strtolower($naziv)) {
    case "Algebra":
        echo "Naziv je Algebra";

        break;

    case "Algera":
        echo "Naziv je Algebra";

        break;

    default: echo "Naziv je neki generički";
        break;
}
?>