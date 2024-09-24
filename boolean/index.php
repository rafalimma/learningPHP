<?php
echo true;
echo "<br>";
echo false;

if (true) {
    echo "isso é verdadeiro <br>";
}
if (6 > 3) {
    echo "<h3>6 é maior que 3</h3><br>";
}
// checando se o valor é booleano

$a = true;

if (is_bool($a)) {
    echo "<strong>a é boolean</strong>";
}

if (is_bool(0)) {
    echo 'zero';
}