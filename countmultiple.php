<?php

$authors=[
"Male"=>array(
"Charles Dickens"=>array("A christmas Carol","Oliver Twist"),
"William Shakespeare"=>array("Romeo & Juliet","Richard 3"),
"Mark Twain"=>array("Tom Sawyer","Huck Finn")
),
"Female"=>array(
"L.M. Montgomery"=>array("Anne of Green Gables","Anne of Avonlea"),
"Lousia May Alcott"=>array("Little Women")
)
];
echo count($authors,COUNT_RECURSIVE);

