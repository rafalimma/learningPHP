<?php
// impedem que o mesmo arquivo entre no código 2 vezes
// arquivos que não existem
include_once "teste.php";
require_once "teste.php";

echo "testando código";