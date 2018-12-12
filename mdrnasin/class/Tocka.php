<?php
include_once "ITocka.php";

class Tocka implements ITocka{
    private $x=0;
    private $y=0;

    public function __construct(int $x, int $y){
        $this->postavi($x,$y);
    }

    /**Kreira novu točku
     * @param int $x
     * @param int $y
     */
    public function postavi(int $x, int $y)
    {
        $this->x=$x;
        $this->y=$y;
    }

    public function get_koords(): string
    {
        return 'Koordinata (' .$this->x.','.$this->y.')'
    }

    public function moveaps(int $x, int $y)
    {
        // TODO: Implement moveaps() method.
    }

    public function unisti(): bool
    {
        // TODO: Implement unisti() method.
    }

    public function kloniraj(): Tocka
    {
     //return
    }

    public function set_x(int $x)
    {
        // TODO: Implement set_x() method.
    }

    public function get_x(): int
    {
        return $this->x;
    }

    public function set_y(int $y)
    {
        // TODO: Implement set_y() method.
    }

    public function get_y(): int
    {
        return $this->y;
    }

}