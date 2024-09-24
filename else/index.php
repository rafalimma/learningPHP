<?php
if (5 < 2) {
    echo "Entrou no if 5 é maior que 2<br>";
} else {
    echo "Entrou no else <br>";
}

$a = 10;
$b = 20;
$varia = true;

if($a > $b) {
    echo "Entrou no if";
} else {
    echo "não entrou no if";
}

if($varia) {
    echo "Entrou no primero if<br>";
    if($b < $a) {
        echo "Entrou no segundo if<br>";
    } else {
        echo "foi no else";
    }
}

