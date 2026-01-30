<?php
require_once "animal.php";
require_once "Frog.php";
require_once "Ape.php";

// Release 0
$sheep = new Animal("shaun");
echo $sheep->name . "<br>";
echo $sheep->legs . "<br>";
echo $sheep->cold_blooded . "<br><br>";

// Release 1
$sungokong = new Ape("kera sakti");
echo $sungokong->name . "<br>";
$sungokong->yell();
echo "<br><br>";

$kodok = new Frog("buduk");
echo $kodok->name . "<br>";
$kodok->jump();


echo "<br> bang hop hop buduk itu apaann😭<br>";