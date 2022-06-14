<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
  public $data_scadenza;

  function __construct($_name, $_description, $_price, $_data_scadenza)
  {
    parent::__construct($_name, $_description, $_price);
    $this->data_scadenza = $_data_scadenza;
  }

  public function getSomeInfo() 
  {
    return "Nome prodotto: $this->name <br>
    Descrizione prodotto: $this->description <br>
    Prezzo prodotto: $this->price € <br>
    Data scadenza: $this->data_scadenza";
  }
}
?>