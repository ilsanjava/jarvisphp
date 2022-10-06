<?php
$nama = "Ihsan";
echo "hello nama saya $nama";
echo "<br>";

str_replace("Ihsan", "Ihsan", $nama, );
echo "<br><br>";

// Integer
$umur = 19;

var_dump($umur) - 3 . "<br";
var_dump($umur);
echo "<br><br>";

// float
$nilai = - 3.72;

var_dump ($nilai);
echo "<br><br>";

// Boolean
$is_student = true;
var_dump($is_student);
echo "<br><br>";

// Array biasa
$mahasiswa1 = ["Ihsan", 19, 3.72, false];
var_dump($mahasiswa1);

echo "<br><br";

echo "umur saya $mahasiswa1[1]";

echo "<br><br>";

// Array Asosiatif
$mahasiswa2 = [
    "nama" => "Ihsan",
    "umur" => 19,
    "nilai" => 3.72,
    "is_active" => true
];

var_dump($mahasiswa2);

echo "<br>";

echo "Hallo, saya" . $mahasiswa2['nama'];