<?php

$AuthorName="william Shakesphere";
function getAuthor()
{
global $AuthorName;
$AuthorName="charles Dickens";
}
getAuthor();
echo $AuthorName;
?>
