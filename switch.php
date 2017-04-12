<?php
$authors=["Sandeep Chintha","Maniker Goranta","ksv","Shiva"];
$authors=[];
$count=count($authors);
switch($count)
{
case 0:
echo "There are no authors.".PHP_EOL;
//break;
case 1:
echo "There is 1 author.".PHP_EOL;
//break;
default:
echo "There are ".$count." authors.".PHP_EOL;
//break;
}
