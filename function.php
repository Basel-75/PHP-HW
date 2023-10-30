<?php
function add($x, $y){
    return $x + $y;
}

echo add(15, 10);

echo "\n";
?>
<?php
function hello($x){
    $user= $x;
    if($user === "Sara")
    {
        echo "Hello " . $user;
        echo "\n";
    }
    else
    {
        echo "Bye " . $user;
        echo "\n";
    }
    echo "Hello " . $user;
    echo "\n";
}
hello("Ahmed");
echo "\n";
echo "<br>";
echo "\n";
hello("Sara");



?>