<?php
abstract class Figure{
    private $square, $color, $number_of_count;
    abstract public function infoAbout();
}
interface Count{
    public function getArea();
class Rectangle extends Figure implements Count{ 
    private $a, $b;
    private $number_of_count = 4;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }    
    public function getArea(){
        return $this->a * $this->b;
    }
    public function infoAbout()
    {
        return "Это класс прямоугольника. У него " . $this->number_of_count . " стороны";
    } 
}
class Triangle extends Figure implements Count{
    private $a, $b, $c;
    private $number_of_count = 3;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }    
    public function getArea(){
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    } 
    public function infoAbout()
    {
        return "Это класс треугольника. У него " . $this->number_of_count . " стороны";
    } 
}
class Square extends Figure implements Count{
    private $a;
    private $number_of_count = 4;
    function __construct($a)
    {
        $this->a = $a;
    }    
    public function getArea(){
        return $this->a * $this->a;
    } 
    public function infoAbout()
    {
        return "Это класс квадрата. У него " . $this->number_of_count . " стороны";
    } 
}
}?>
