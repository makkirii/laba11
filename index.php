<?php
abstract class Figure{
    private $square, $color, $number_of_count;
    abstract public function infoAbout();
}
interface Count{
    public function getArea();
}?>
