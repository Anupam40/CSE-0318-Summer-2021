<?php

error_reporting(0);

$q1=$_POST["q1"];
$q2=$_POST["q2"];
$q3=$_POST["q3"];

echo "Your Result: "."<br>"."<br>";
if($q1=='all of the mentioned'){
    echo "1. Correct Answer."."<br>";
}else{
    echo "1. Incorrect Answer."." ". "correct answer  all of the mentioned"."<br>";
}
if($q2=='frameset'){
    echo "2. Correct Answer."."<br>";
}else{
    echo "2. Incorrect Answer."." "."correct answer  frameset "."<br>";
}
if($q3=='Four'){
    echo "3. Correct Answer."."<br>";
}else{
    echo "3. Incorrect Answer."." "."correct answer  Four"."<br>";
}




?>
