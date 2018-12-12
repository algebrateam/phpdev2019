<?php

interface ITocha
{
    public function postavi(int $x, int $y);

    public function get_koords(): string;

    public function moveaps(int $x, int $y);

    public function move_relative(int $x, int $y);

    public function unisti(): bool;

    public function kloniraj(): bool;

    public function set_x(int $x);

    public function get_x(): int;

    public function set_y(int $y);

    public function get_y(): int;
}
