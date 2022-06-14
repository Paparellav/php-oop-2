<?php
require_once __DIR__ . "/Product.php";

class Accessory extends Product {
  public $marca;

  function __construct($_name, $_description, $_price, $_marca)
  {
    parent::__construct($_name, $_description, $_price);
    $this->marca = $_marca;
  }

  public function getSomeInfo() 
  {
    return "Nome prodotto: $this->name <br>
    Descrizione prodotto: $this->description <br>
    Prezzo prodotto: $this->price € <br>
    Marca prodotto: $this->marca";
  }
}
?>