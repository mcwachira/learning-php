<?php
abstract class Shape {
    protected $name;


    abstract public function calculateArea();

    public function __construct($name)
    {
        $this -> name = $name;
    }

    //concrete method
    public function getName()
    {
        return $this->name;
    }
}

class Circle extends Shape {
    private $radius;
    public function __construct($name, $radius){

        //inherit parent donstructor
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea(){
        return pi()* pow($this->radius,2);
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;
    public function __construct($name, $height, $width){

        //inherit parent constructor
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function calculateArea(){
        return $this->width*$this->height;
    }
}




$circle =  new Circle('Circle', 5);
var_dump($circle);
$rectangle =  new Rectangle('Rectangle', 5, 4);
echo $rectangle->getName() . " Area: " . $rectangle->calculateArea() . ' <br> ';
echo $circle->getName() . " Area: " . $circle->calculateArea() . ' <br> ';