<?php

class Pessoa{
    function falar() {
        echo "Olá pessoas";
    }
}

$rafael = new Pessoa();
$rafael -> nome = "Rafael";
echo $rafael->nome; // atributo do objeto
echo '<br>';
$rafael->falar();