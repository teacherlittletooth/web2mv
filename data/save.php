<?php

use Database\Database;

//cod
if( isset($_POST['cod']) ) {
    $cod = $_POST['cod'];
} else {
    $cod = null;
}

//ingredientes
if( isset($_POST['ingredientes']) ) {
    $ingredientes = $_POST['ingredientes'];
} else {
    $ingredientes = null;
}

//qtde
if( isset($_POST['qtde']) ) {
    $qtde = $_POST['qtde'];
} else {
    $qtde = null;
}

//pgto
if( isset($_POST['pgto']) ) {
    $pgto = $_POST['pgto'];
} else {
    $pgto = null;
}

//card_flag
if( isset($_POST['card-flag']) ) {
    $cardFlag = $_POST['card-flag'];
} else {
    $cardFlag = null;
}

/*
var_dump($cod);
var_dump($ingredientes);
var_dump($qtde);
var_dump($pgto);
var_dump($cardFlag);
*/

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->update(
    "UPDATE pedidos SET ingredientes = '$ingredientes',
    qtde = $qtde, pgto = '$pgto', card_flag =  '$cardFlag'
    WHERE cod = $cod; "
);

//var_dump($resultDb);

if( $resultDb ) : ?>
    <script>
        alert("Dados atualizados com sucesso!");
        window.location.replace("../public/lista.php");
    </script>
<?php else :
    echo "Erro durante atualização :/";
endif;