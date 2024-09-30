<?php
$nome = "Rafael";


?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>

<?php
// inserindo php no html

include_once "backend.php";

?>

<h1>Seja bem-vindo!</h1>
<p><?= $nome; ?>veja as ofertas:</p>
<ul>
    <?php foreach($produtos as $produto):  ?>
        <li><?= $produto ?></li>
    <?php endforeach; ?>
</ul>