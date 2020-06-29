<?php
require_once 'animal.php';


echo "<h1>Release 0</h1>";

$sheep = new Animal("shaun");
echo "Nama Hewan: " . $sheep->name . "<br>"; // "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // 2
echo "cold blooded: " . $sheep->cold_blooded; // false


echo "<h1>Release 1</h1>";

// Ape
require('ape.php');
$sungokong = new Ape("kera sakti");
echo "Nama Hewan: " . $sungokong->name . "<br>";
echo "Legs: " . $sungokong->legs . "<br>"; // 2
echo "cold blooded: " . $sungokong->cold_blooded . "<br>";
$sungokong->yell();

echo "<br><br>";

// Frog
require('frog.php');
$kodok = new Frog("buduk");
echo "Nama Hewan: " . $kodok->name . "<br>";
echo "Legs: " . $kodok->legs . "<br>";
echo "cold bloded: " . $kodok->cold_blooded . "<br>";
$kodok->jump();
