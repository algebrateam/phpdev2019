<?php

/**
 * Ne prima parametar, vraća hrvatski naziv današnjeg dana u tjednu
 * npr. Ponedjeljak, utorak...
 * @return string Dan u tjednu
 */
function hr_day(): string {
    switch (date('w')) {
        case 0: return 'Nedjelja';
            break;
        case 1: return 'Ponedjeljak';
            break;
        case 2: return 'Utorak';
            break;
        case 3: return 'Srijeda';
            break;
        case 4: return 'Četvrtak';
            break;
        case 5: return 'Petak';
            break;
        default: return 'Subota';
            break;
    }
    //return date('w'); //w day of the week (0 on sunday)
}
echo hr_day();
//nakon dvotočke je ono što vraća
function sumiraj(int $a,$b):int{
    return $a+$b;
}
echo sumiraj(4, 7);
echo sumiraj('a', 7);