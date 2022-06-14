<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
  public $durata_in_morsi;

  function __construct($_name, $_description, $_price, $_durata_in_morsi)
  {
    parent::__construct($_name, $_description, $_price);
    $this->durata_in_morsi = $_durata_in_morsi;
  }

  public function getSomeInfo() 
  {
    return "Nome prodotto: $this->name <br>
    Descrizione prodotto: $this->description <br>
    Prezzo prodotto: $this->price € <br>
    Durata in morsi: $this->durata_in_morsi";
  }
}
?>