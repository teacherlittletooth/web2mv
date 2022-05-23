<?php

use Database\Database;
use Model\Pedido;

    require_once('../vendor/autoload.php');

    $obj1 = new Pedido();

    if(isset($_GET['ingrediente'])) {
        $obj1->ingredientes = $_GET['ingrediente'];
    } else {
        $obj1->ingredientes = null;
    }

    if(isset($_GET['qtde'])) {
        $obj1->qtde = $_GET['qtde'];
    } else {
        $obj1->qtde = null;
    }

    if(isset($_GET['pgto'])) {
        $obj1->pgto = $_GET['pgto'];
    } else {
        $obj1->pgto = null;
    }

    if(isset($_GET['card-flag'])) {
        $obj1->cardFlag = $_GET['card-flag'];
    } else {
        $obj1->cardFlag = null;
    }

    $listaItens = null;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingredientes</title>
</head>
<body>

    <?php if($obj1->ingredientes != null) : ?>
        <?php foreach($obj1->ingredientes as $i) : ?>
            <h3 style="font-family: courier; color: grey;">
                <?php
                    echo $i;
                    $listaItens .= $i . ', ';
                ?> <hr>
            </h3>
        <?php endforeach ?>
    <?php endif ?>

    <h3 style="font-family: courier; color: purple;">
        <?= $obj1->qtde ?> <hr>
    </h3>

    <h3 style="font-family: courier; color: green;">
        <?= $obj1->pgto ?> <hr>
    </h3>

    <h3 style="font-family: courier; color: blue;">
        <?= $obj1->cardFlag ?> <hr>
    </h3>

    <?= $obj1->darDesconto() ?>


<?php
//////////////////////////////////////////////////////////////////////////////////////////////////
require_once "../src/model/Database.php";
$db = new Database();
$db->insert(
    "INSERT INTO pedidos(data_hora, ingredientes, qtde, pgto, card_flag)
    VALUES('$obj1->dataHora' , '$listaItens' , $obj1->qtde , '$obj1->pgto' , '$obj1->cardFlag'); "
);
//////////////////////////////////////////////////////////////////////////////////////////////////
?>

</body>
</html>