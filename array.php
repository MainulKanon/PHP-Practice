<?php

// $fruits = array("apple", "banana", "cherry");
// $fruits2 = ["apple", "Banana", "Mango"];
// echo "<pre>";

// // print_r($fruits[0]);
// // print_r($fruits2);

// echo "</pre>";

// foreach ($fruits as $item) {
//     print_r($item . "<br>");

//     echo $item . "<br>";
//     echo "<br>";
// }

// $person = [
//     "firstName" => "Mainul",
//     "lastName" => "Hossain",
//     "age" => "30",
//     "phone" => "01689636655",
//     "email" => "Kanon2430@gmail.com",
// ];
// echo "<pre>";
// print_r($person["firstName"]);
// echo "</pre>";

// foreach ($person as $key => $value) {
//     echo $key . ":" . $value . "<br>";
// }

// $fruits1 = ["apple1", "Banana1", "Mango1"];
// $fruits2 = ["apple2", "Banana2", "Mango2"];
// $fruits3 = ["apple3", "Banana3", "Mango3"];
// $fruits4 = ["apple4", "Banana4", "Mango4"];

// $allFruits = [$fruits1, $fruits2, $fruits3, $fruits4];
// echo "<pre>";
// print_r($allFruits[3][2]);
// echo "</pre>";

// foreach ($allFruits as $parentItem) {

//     foreach ($parentItem as $childItem) {
//         echo $childItem . "<br>";
//     }
// }



$person1 = [
    "firstName" => "Mainul1",
    "lastName" => "Hossain3",
    "age" => "30",
    "phone" => "01689636655",
    "email" => "Kanon2430@gmail.com",
];

$person2 = [
    "firstName" => "Mainul2",
    "lastName" => "Hossain3",
    "age" => "30",
    "phone" => "01689636655",
    "email" => "Kanon2430@gmail.com",
];

$person3 = [
    "firstName" => "Mainul3",
    "lastName" => "Hossain3",
    "age" => "30",
    "phone" => "01689636655",
    "email" => "Kanon2430@gmail.com",
];


$allPerson = [$person1, $person2, $person3];
// print_r($allPerson[2]);

$pesronKey = asort($person1);
print_r($pesronKey);

// foreach ($allPerson as $parenKey => $parenValue) {
//     foreach ($parenValue as $childKey => $childValue) {
//         echo "" . $childKey . ":" . $childValue . "<br>";
//     }

//     echo "<br>";
// }E