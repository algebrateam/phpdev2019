<?php
class KonjException extends Exception {}

interface Comparable {
    public function compareTo(Konj $a);
} 

class Konj implements Comparable {
    public function __construct($brzina) {
        $this->brzina = (float) $brzina;
    }
    public function compareTo($konjusporedbe) {
        if (!$konjusporedbe instanceof Konj) {
            throw new KonjException('Moguće je samo uspoređivati konje');
        }
        return $this->brzina <=> $konjusporedbe->brzina;
    }
}
 
$a = new Konj(5.23);
$b = new Konj(2.34);
$c = new Konj(3.340000001);

// $krdo=[$a,$b,$c,new DateTime()];
 $krdo=[$a,$b,$c];

function objSort($a, $b) {
    return $a->compareTo($b);
}

echo "<pre>";
print_r($krdo);
usort($krdo,'objSort');
print_r($krdo);
echo "</pre>";