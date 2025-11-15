<?php
namespace App\Models;

class User {
  private string $name;

  public function __construct(string $name = 'Guest')
  {
    $this->name = $name;
  }


  public function getName(): string
  {
    return $this->name;
  }

  public function greet(): string
  {
    return "Hello, my name is {$this->name}.";
  }
}