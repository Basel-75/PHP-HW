<form action="array.php" method="GET">
    <input type ="text" name="xname">
    <input type="submit">
</form>

<?php 
$xname = $_GET["xname"];



$family = 
[
    "Designer" => "Sara",
    "Prgorammer" => "Nasser",
    "Gamer" => "Ahmed"
];
    
echo $family[$xname];

?>