<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$naziv = "AlGebra";
switch ($naziv) {
    case "algebra":


    case "Algebra":
        echo "naziv je Algebra";

        break;


    case "algera":
        echo "naziv je algere";



        break;


    default:echo "naziv je neki genericki";
        break;
}
echo "<hr>";

switch (strtolower($naziv)) {
    case "algebra":
//propadanje,nema breaka

    case "Algebra":
        echo "naziv je Algebra";

        break;


    case "algera":
        echo "naziv je algere";



        break;


    default:echo "naziv je neki genericki";
        break;
}

