<?php

  class Square {

    private $dim;

    public function __construct($dim) {
        $this -> setDim($dim);
    }

    public function getDim() {
      return $this -> dim;
    }

    public function setDim($dim) {
      $this -> dim = $dim;
    }

    public function getPer() {
      return 4 * ($this -> dim);
    }

    public function getArea() {
      return pow(($this -> dim), 2);
    }

    private function getStrOutput() {
        return  "Dimensione: " . $this -> getDim() . "<br>"
              . "Perimetro: "  . $this -> getPer() . "<br>"
              . "Area:      "  . $this -> getArea() . "<br>";
    }

    public function __toString() {
        return "<u>Quadrato</u>:<br>" . $this -> getStrOutput();
    }

}

  class Cube extends Square {
    // Non ha senso perché già ereditato identico da sopra.
    // public function __construct($dim) {
    //   parent::__construct($dim);
    // }

    public function getSup() {
      return 6 * pow(($this -> getDim()), 2); // oppure return 6 * $this -> getArea();
    }

    public function getVol() {
      return pow(($this -> getDim()), 3); // oppure return $this -> getArea() * this -> dim;
    }

    public function getStrOutput() {
      return "Dimensione: "   . $this -> getDim() . "<br>"
            . "Superficie: "  . $this -> getSup() . "<br>"
            . "Volume: "      . $this -> getVol() . "<br>";
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
