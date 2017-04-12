<?php
$authors=["Sandeep Chintha"];
//$authors=[];
$count=count($authors);
if($count==1)
{
echo "There is 1 author";
}
else if($count>1)
{
echo "There is a total number of ".$count." authors";
}
else
{
echo "There are no authors";
}