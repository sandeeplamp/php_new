<?php

class Person
{
public $firstName="sandeep";
public $lastName="Chintha";
public $yearBorn=1994;
}
$myObject=new Person();
echo $myObject->firstName."\n";
$myObject->firstName="Something";
echo $myObject->firstName;