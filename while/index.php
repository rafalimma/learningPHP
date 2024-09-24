<?php

$x = 0;

while($x < 10) {
    echo $x . "<br>";
    $x += 1;
}

echo "Continuando...";
$x = 1;
while($x < 10) {
    echo "O x é $x <br>";

    if($x == 5) {
        echo "Terminando o loop <br>";
        break;
    }
    $x++;
}


