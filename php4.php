
<?php
//Exercici1:
class Employee {
  // Properties
  public $nom;
  public $sou;

  // Methods
  function __construct($nom,$sou) {
    $this->nom = $nom;
    $this->sou = $sou;  
}
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function print(){
      echo $this->nom . "<br>";
      echo $this->sou>6000?"paga":"no paguis";
}
}

//Exercici2:

class Shape {
    public $ample;
    public $alt;
    public function __construct($ample, $alt) {
      $this->ample = $ample;
      $this->alt = $alt;
    }
}
  

  class Triangle extends Shape {
    public function area() {
      echo $this->ample*$this->alt/2;
    }
  }
  
  class Rectangle extends Shape {
    public function area() {
      echo $this->ample*$this->alt;
    }
  }
  
  $Triangle1 = new Triangle(1,2);
  $Rectangle1 = new Rectangle(3,4);

  $Triangle1->area();
  $Rectangle1->area();

?>
