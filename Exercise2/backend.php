<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$q1 = $_POST["lake"];
$q2 = $_POST["number"];
$q3 = $_POST["city"];
$q4 = $_POST["color"];
$q5 = $_POST["valves"];

$a1 = "lake superior";
$a2 = "8000mi";
$a3 = "Madrid";
$a4 = "yellow";
$a5 = "three";

$grade = 0;

//Question 1
echo "Question 1: what is the largest freshwater lake in the world?<br>
You answered: $q1<br>
Correct Answer: $a1<br><br>";
if ($q1 == $a1)
{
    $grade++;
}
//Question 2
echo "Question 2: What is the diameter of the Earth? <br>
You answered: $q2<br>
Correct Answer: $a2<br><br>";

if ($q2 == $a2)
{
    $grade++;
}

//Question 3
echo "Question 3:     What is the capital city of Spain? <br>
You answered: $q3<br>
Correct Answer: $a3<br><br>";

if ($q3 == $a3)
{
    $grade++;
}

//Question 4
echo "Question 4: What color of jersey is worn by the winners of each stage of the Tour De France?<br>
You answered: $q4<br>
Correct Answer: $a4<br><br>";

if ($q4 == $a4)
{
    $grade++;
}

//Question 5
echo "Question 5:How many valves does a trumpet have?<br>
You answered: $q5<br>
Correct Answer: $a5<br><br>";

if ($q5 == $a5)
{
    $grade++;
}

echo "Your score is :<b> " . $grade * 20 . "</b>%";

 ?>
