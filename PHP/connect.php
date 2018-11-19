<?php

$host="localhost";
$user="root";
$password="";
$database="ipams";

$title=$class=$psced=$author=$role=$conlevel=$contitle=$date=$venue=$publevel=$pubname=$fundsource=$classname=$collabname=$institution=$collabtype="";
$year=$year2=$budalloc=0;

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


try{
    $connect=mysqli_connect($host,$user,$password,$database);
}catch(Exception $ex){
    echo 'Error';
}

?>