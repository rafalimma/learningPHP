<?php

if(is_int(5)) {
    echo "É um inteiro! <br>";
}

if(is_int("não é inteiro")) {
    echo "não é inteiro <br>";
}

$a = 10;
if(is_int($a)) {
    echo "isso também é um inteiro";
}