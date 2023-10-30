<?php 
echo "example 1 \n";
$username = "Basel";
$email = "Basel@outlook.com";

if($username === "Basel" && $email === "Basel@outlook.com")
    {
        echo "Welcome Admin ($username)";
    }


?>

<?php
echo "============================================================================";
echo "\n example 2 \n";
$number1 =18;
$number2 =10;

if($number1 > $number2){
    echo "الرقم الاول اكبر";
    if($number1 === 18){
        echo "<br>";
        echo "الرقم الاول ثمانية عشر";
    }
}elseif($number1 < $number2){
    echo "الرقم الاول اصغر";
}
else{
    echo "الرقمين متساويين";
}
?>