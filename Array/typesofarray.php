<?php
// Index Array
$fruits = array("Apple", "Banana", "Mango");

echo $fruits[0]; // Apple
echo $fruits[1]; // Banana
$students = array(
    "name" => "Kerby",
    "age" => "22",
    "course" => "IT"
);

// Associative Array

echo "Name: " . $students["name"] . "<br>";
echo "Age: " . $students["age"] . "<br>";
echo "Course: " . $students["course"] . "<br>";
$students = array(
    array("name" => "Kerby", "age" => 22, "Course" => "IT"),
    array("name" => "Riza", "age" => 22, "Course" => "Criminology"),
    array("name" => "Palconete", "age" => 22, "Course" => "IT"),
);

// Multi Dimensional Array

echo $students[0]["name"] . "<br>";
echo $students[1]["course"] . "<br>";
echo $students[2]["age"] . "<br>";

$text = "apple,banana,orange";

$fruits1 = explode(",", $text);

print_r($fruits1);
echo "<br><br>";

$fruits2 = ["apple", "banana", "orange"];

$text = implode(" - ", $fruits2);

echo $text;

?>