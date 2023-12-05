<?php

class Person {
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;
  // private $grandfather;
  // private $grandmother;

  function __construct($name, $lastname, $age, $mother, $father)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    // $this->grandfather = $grandfather;
    // $this->grandmother = $grandmother;
    $this->hp = 100;
  
  }
  function sayHi($name) 
  {
    return "Hi, $name, I`m " . $this->name;
  }
  function setHp($hp)
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp() {
    return $this->hp;
  }
  function getName() {
    return $this->name;
  }
  function getLastname() {
    return $this->lastname;
  }
  function getMother() {
    return $this->mother;
  }
  function getFather() {
    return $this->father;

  }
  function getInfo() {
    return "<h2>Пару слов о моих родственниках</h2><br>" . "Меня зовут: " . $this->getName() . $this->getLastname()  . "Мою маму зовут: " . $this->getMother()->getName() . $this->getLastname() . "Мамину маму зовут:". $this->getMother()->getMother()->getName() . $this->getMother()->getMother()->getLastname() . "Маминого папу зовут:" . $this->getMother()->getFather()->getName() . $this->getMother()->getFather()->getLastname(). "Father name:" . $this->getFather()->getName() . $this->getLastname() . "GrandeFather-2" . $this->getFather()->getFather()->getName() . $this->getFather()->getFather()->getLastname() . "GranMother-2" . $this->getFather()->getMother()->getName() . $this->getFather()->getMother()->getLastname();
  }
}

$igor = new Person("Igor", "Petrov", 78, null, null);
$fekla = new Person("Fekla", "Petrova", 78, null, null);
$petr = new Person("Petr", "Ivanov", 80, null, null);
$marfa = new Person("Marfa", "Ivanova", 81, null, null);
$alex = new Person("Alex", "Ivanov", 40, $marfa, $petr);
$olga = new Person("Olga", "Ivanova", 40, $fekla, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();
//$valera->getMother()->getFather()->getName();


// $medKit = 50;
// $alex->setHp(-30); //Упал  70
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit); //Нашел аптечку 100
// echo $alex->getHp();