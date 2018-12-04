<?php

/**
 * Ne prima parametar, vraća hrvatski naziv današenjeg dana u tjednu
 * npr: Ponedjeljak, Utorak ...
 * @return string Dan u tjednu
 */
function hr_day(): string {
    switch (date('w')) {
        case 0:return'Nedjelja';
            break;
        case 1:return'Ponedjeljak';
            break;
        case 2:return'Utorak';
            break;
        case 3:return'Srijeda';
            break;
        case 4:return'Četvrtak';
            break;
        case 5:return'Petak';
            break;
        case 6:return'Subota';
            break;

        default:
            break;
    }
}

echo hr_day();




