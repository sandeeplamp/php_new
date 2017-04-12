<?php

class Person
{
const AVG_LIFE_SPAN=80;
public $firstName;
public $lastName;
public $yearBorn;
function __construct()
{
$this->firstName="Sandeep";
$this->lastName="Chintha";
$this->yearBorn=1994;
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
$myObject=new Person();
echo $myObject->getFirstName();
