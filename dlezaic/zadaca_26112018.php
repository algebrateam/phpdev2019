<?php

echo "1.Koji je od navedenih operatora aritmetički operator?";

echo "<br>Modul(%) je aritmetički operator.";

echo"<hr>";
echo "<br>2.Definiraj dvije varijable, ime i prezime, u koje ćete...";

$ime="Dražen";
$prezime="Ležaić";
echo "<br>";
echo $ime." ".$prezime;

echo "<hr>";

echo "3.Postavite vrijednost varijable a na 5. Korištenjem operatora...";
echo "<br>";

$a=5;

$a++;
echo $a;

$a--;
echo $a;

echo "<hr>";

echo "4.Varijablu a iz prethodnog zadatka operatorom pretvorbe pretvorite...";

$a=5;

$a= (float)$a;
echo $a;

echo "<hr>";

echo "5.Varijablu a iz prethodnog zadatka operatorom dodjeljivanja...";

$a=5;
$a+=5;

echo "<br> $a";
echo "<hr>";

echo "6.Napravite PHP stranicu s dvije varijable a=7 i b=3. Zatim...";

$a=7;
$b=3;

echo $a."+".$b."=".($a+$b)."<br>";
echo $a."-".$b."=".($a-$b)."<br>";
echo $a."*".$b."=".($a*$b)."<br>";
echo $a."/".$b."=".($a/$b)."<br>";
echo $a."%".$b."=".($a%$b)."<br>";


echo "<hr>";
echo "7.Postavite sada vrijednosti varijabla a i b na 4 i 2..";

$a=4;
$b=2;

echo $a."+".$b."=".($a+$b)."<br>";
echo $a."-".$b."=".($a-$b)."<br>";
echo $a."*".$b."=".($a*$b)."<br>";
echo $a."/".$b."=".($a/$b)."<br>";
echo $a."%".$b."=".($a%$b)."<br>";





