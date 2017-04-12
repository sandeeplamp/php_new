<?php

$authors=array(
         "Charles Dickens",
         "Jane Austin",
         "William Shakesphere",
         "Mark Twain"
         );
$authorsAssociative=array(
"quarky"=>"Charles Dickens",
"brilliant"=>"Jane Austin",
"poetic"=>"William Shakespeare"
);
sort($authors);
print_r($authors);
sort($authorsAssociative);
print_r($authorsAssociative);
asort($authors);
print_r($authors);
asort($authorsAssociative);
print_r($authorsAssociative);
ksort($authorsAssociative);
print_r($authorsAssociative);

