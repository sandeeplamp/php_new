<?php

function BookByAuthor($tempAuthorName,$tempyear=1910)
{
echo $tempAuthorName;
echo $tempyear;
}
function getAuthor()
{
return "Charles Dickens";
}
$year=1920;
$authorName=getAuthor();
BookByAuthor($authorName);