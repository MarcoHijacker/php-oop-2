<?php

  class Square {

    protected $dim;

    public function __construct($dim) {
        $this -> dim = $dim;
    }

    public function getPer() {
      return 4 * ($this -> dim);
    }

    public function getArea() {
      return pow(($this -> dim), 2);
    }

    public function getStrOutput() {
        return "Dimensione: " . $this -> dim . "<br>"
        . "Perimetro: " . $this -> getPer() . "<br>"
        . "Area: " . $this -> getArea() . "<br>";
    }

    public function __toString() {
        return "<u>Quadrato</u>:<br>" . $this -> getStrOutput();
    }

}

  class Cube extends Square {

      public function __construct($dim) {
        parent::__construct($dim);
      }

      public function getSup() {
        return 6 * pow(($this -> dim), 2);
      }

      public function getVol() {
        return pow(($this -> dim), 3);
      }

      public function getStrOutput() {
        return "Dimensione: " . $this -> dim . "<br>"
        . "Superficie: " . $this -> getSup() . "<br>"
        . "Volume: " . $this -> getVol() . "<br>";
      }

      public function __toString() {
          return "<u>Cubo</u>:<br>" . $this -> getStrOutput();
      }
  }

  $square1 = new Square(7);
  $square2 = new Square(4);

  $cube1 = new Cube(2);
  $cube2 = new Cube(5);

  echo
        $square1 . "<br>"
      . $square2 . "<br>"
      . $cube1   . "<br>"
      . $cube2   . "<br>";

 ?>
