<?php

use Database\Database;

//cod
if( isset($_GET['cod']) ) {
    $cod = $_GET['cod'];
} else {
    header('location: ../public/lista.php');
}


require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->delete(
    "DELETE FROM pedidos WHERE cod = $cod; "
);

//var_dump($resultDb);

if( $resultDb ) : ?>
    <script>
        alert("Pedido excluído com sucesso!");
        window.location.replace("../public/lista.php");
    </script>
<?php else :
    echo "Erro durante a exclusão :( ";
endif;