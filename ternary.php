<?php
$authors=["Sandeep Chintha","Maniker Goranta","ksv","Shiva"];
$count=count($authors);
$outcome= ($count>0) ? "Total Authors:".$count : "No Authors";
echo $outcome;