<?php

// problem 1

function sortUserName($name){
    sort($name);
    usort($name, function($i, $j){
        return strlen($i) - strlen($j);
    });
    return $name;
}

$name = [
    "Eore",
    "Alam",
    "Sazzad",
    "Omi"
];

print_r(sortUserName($name)); // output: Omi, Alam, Eore, Sazzad



// problem 2

function concat($first, $second){
    return $first.$second;
}

concat("go","to"); // output: goto



// problem 3

function removeFirstLast($district) {
    array_shift($district); // remove first element
    array_pop($district); // remove last element

    return $district; // remaining elements
}

$district = [
    "Comilla",
    "Chandpur",
    "Noakhali",
    "Lakshmipur"
];

$newDistrict = removeFirstLast($district); // collect remaining elements
print_r($newDistrict); // output: Chandpur, Noakhali



// problem 4

function onlyLetterWhitespace($string){
    return preg_match('/^[a-zA-Z\s]+$/', $string);
}


$str1 = "Name Mahin";
$str2 = "Roll 99";

var_dump(onlyLetterWhitespace($str1)); // output: true
var_dump(onlyLetterWhitespace($str2)); // output: false



// problem 5

function findSecondLargest($arrayNum){
    $max = $arrayNum[0];
    $secondMax = 0;
  
    foreach ($arrayNum as $num){
      if ($num > $max){
        $secondMax = $max;
        $max = $num;
      } elseif ($num > $secondMax && $num != $max){
        $secondMax = $num;
      }
    }
  
    return $secondMax;
}
  

$arrayNum = [5,2,3,4,8,6];
$secondLargest = findSecondLargest($arrayNum);

echo "The second largest number is: " . $secondLargest; // output: The second largest number is: 6