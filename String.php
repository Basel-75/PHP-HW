<?php
$string = "Basel";
echo $string;
echo "<br>";

echo strtolower($string);
echo strtoupper($string);
echo strlen($string);
echo $string[3];
echo $string[3] = "B";

echo str_replace("Salem", "Salman", $string);
echo substr($string, 6)
?>