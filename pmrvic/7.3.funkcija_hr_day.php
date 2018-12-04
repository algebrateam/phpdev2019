<?php

/**
 * Ne prima parametar vraća hrvatski naziv današnje dana u tjednu
 * npr: Ponedjeljak, Utorak...
 * @return string Dan u tjednu
 */
function hr_day(): string {
  switch (date('w')) {
    case 0: return 'Nedjelja';

    case 1: return 'Ponedjeljak';

    case 2: return 'Utorak';

    case 3: return 'Srijeda';

    case 4: return 'Četvrtak';

    case 5: return 'Petak';

    default: return 'Subota';
  }
  //return ; // w Day of the week (0 on Sunday)
}

echo hr_day();

function sumiraj(float $a,int $b):int{
  echo $b;
  return (int)($a+$b);
}

echo sumiraj(4, 7);
echo sumiraj(5.5, 7.2);


