<?php

class Person
{
const AVG_LIFE_SPAN=80;
public $firstName="sandeep";
public $lastName="Chintha";
public $yearBorn=1994;
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
$myObject->setFirstName("San");
echo $myObject->firstName;
