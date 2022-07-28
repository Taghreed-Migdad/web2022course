<?php
// Arrye
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
rsort ($cars);
sort($cars);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo $age ;

$car = array(
    array("volve",3,5),
    array("BMW",37,35),
    array("Land Rover",17,19),
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>
?>