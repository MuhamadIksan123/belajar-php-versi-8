<?php

$value = "A";
$result = "";

switch($value) {
    case "A":
    case "B":
    case "C":
        $result = "Anda lulus";
        break;
    case "D":
        $result = "Anda tidak lulus";
        break;
    case "E":
        $result = "Mungkin anda salah jurusan";
        break;
    default:
        $result = "Nilai apa itu!";
}

echo $result . PHP_EOL;

$result = match ($value) {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Mungkin Anda salah jurusan",
    default => "Nilai apa itu!"
};

echo $result . PHP_EOL;

$value = 65;

$result = match(true) {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
};

echo $result . PHP_EOL;

$name = "Mr. Nani";

$result = match (true){
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam"
};

echo $result . PHP_EOL;