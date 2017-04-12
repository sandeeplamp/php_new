<?php

class Person
{
const AVG_LIFE_SPAN=80;
public $firstName;
public $lastName;
public $yearBorn;
function __construct($tempFirst="",$tempLast="",$tempBorn="")
{
$this->firstName=$tempFirst;
$this->lastName=$tempLast;
$this->yearBorn=$tempBorn;
}
public function getFirstName()
{
return $this->firstName;
}
public function setFirstName($tempName)
{
$this->firstName=$tempName;
}
}
$myObject=new Person("Sandeep","Chintha",1994);
echo $myObject->getFirstName();
