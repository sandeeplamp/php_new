<?php

class Person
{
const AVG_LIFE_SPAN=80;
public $firstName="sandeep";
public $lastName="Chintha";
public $yearBorn=1994;
}
$myObject=new Person();
echo $myObject::AVG_LIFE_SPAN;
echo Person::AVG_LIFE_SPAN;