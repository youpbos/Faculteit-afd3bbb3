<?php
echo("Van welk getal wil je de faculteit weten?").PHP_EOL;
$a = readline("");
$ant = 1;
for($i = 1; $i <= $a; $i++){
    $ant = $i * $ant;
}
echo $ant;
?>