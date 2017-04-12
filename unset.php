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
unset($authors[1],$authors[0]);
unset($authorsAssociative['poetic']);
unset($authors);
print_r($authors);
print_r($authorsAssociative);
