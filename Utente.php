<?php
class User
{
  public $name;
  public $email;
  public $cdc;
  public $validCdc;
  public $userRegist;
  public $cart = [];

  function __construct($_name, $_email, $_cdc, $_validCdc, $_userRegist)
  {
    $this->name = $_name;
    $this->email = $_email;
    $this->cdc = $_cdc;
    $this->validCdc = $_validCdc;
    $this->userRegist = $_userRegist;
  }

  public function addToCart($_product)
  {
    if ($this->validCdc === true) {
      $this->cart[] = $_product;
      return true;
    } else {
      return false;
    }
  }

  public function setDiscount()
  {
    if ($this->userRegist === true) {
      return 20;
    } else {
      return 0;
    }
  }

  public function getTotalPrice()
  {
    $total_price = 0;
    if ($this->validCdc === true) {

      foreach ($this->cart as $item) {
        $total_price += $item->price;
      }
      return $total_price - $this->setDiscount();
    } else {
      return $total_price;
    }
  }
}
