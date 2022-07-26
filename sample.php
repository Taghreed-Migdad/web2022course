<?php
// echo 'hello word' . "<br>";
// $color ="red";
// echo "my car is " . $color ." <br>";
// echo " my car is " . $color . "<br>";

// $y = 5;
// $x = 6;

// function myfun() {
// $GLOBALS ['y'] = $GLOBALS['x']+ $GLOBALS['y'];
// }

// myfun();
// echo $y ."<br>";

// function myTast() {
//     $y = 5;
//     $x = 6;
//   $y = $x+$y;
//     }
//     myTast();
//     echo $y;

// $float_var = 1.5;
// $int_var=intval($float_var);
// echo $int_var;
// $str_var=strval($float_var);

// var_dump($int_var);
// var_dump($str_var);
// $str="hello";
// $float=floatval($str);
// var_dump($float)."<br>";

echo strlen("hello word!")."<br>";
echo str_word_count("hello word ya pepole")."<br>";//عدد الكلمات 
str_replace("world","Dolly","hello world!")."<br>";
echo substr("hello world!", 4,7)."<br>";//عدد الحروف المقطوعة 
$str="hello worde!,hh"."<br>";
echo substr($str,0,strpos("$str",'!')+1)."<br>";
?>