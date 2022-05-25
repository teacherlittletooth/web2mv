<?php

use Database\Database;

require_once "../src/views/header_nav.php";

if( isset($_GET['cod']) ) {
    $cod = $_GET['cod'];
} else {
    header('location: ../public/lista.php');
}

require_once "../src/model/Database.php";
$db = new Database();

$resultDb = $db->select(
    "SELECT * FROM pedidos WHERE cod = $cod; "
);

//var_dump($resultDb);
?>

<form method="post" action="../src/data/save.php">
    <h3>Atualização de dados</h3>

    <h5>Código</h5>
    <input type="text" name="cod" value="<?= $resultDb[0]->cod ?>" readonly />

    <h5>Data e hora</h5>
    <input type="text" name="data_hora" value="<?= $resultDb[0]->data_hora ?>" readonly />

    <h5>Ingredientes</h5>
    <input type="text" name="ingredientes" value="<?= $resultDb[0]->ingredientes ?>" />

    <h5>Quantidade</h5>
    <input type="number" name="qtde" value="<?= $resultDb[0]->qtde ?>" min="1" />

    <h5>Pagamento</h5>
        <div class="form-check">
            <input type="radio" class="form-check-input" value="dinheiro" name="pgto" id="dinheiro" <?= ($resultDb[0]->pgto == 'dinheiro') ? 'checked' : '' ?> />
            <label for="dinheiro">Dinheiro</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" value="cartao" name="pgto" id="cartao" <?= ($resultDb[0]->pgto == 'cartao') ? 'checked' : '' ?> />
            <label for="cartao">Cartão</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" value="pix" name="pgto" id="pix" <?= ($resultDb[0]->pgto == 'pix') ? 'checked' : '' ?> />
            <label for="pix">Pix</label>
        </div>
            
    <h5>Bandeira cartão</h5>
        <select name="card-flag" class="form-select col-lg-4 col-sm-4">
            <option value="<?= $resultDb[0]->card_flag ?>"> <?= $resultDb[0]->card_flag ?> </option>
            <option value="Green Card">Green Card</option>
            <option value="Elo">Elo</option>
            <option value="Senff">Senff</option>
        </select>

    <br>
    
    <input type="submit" value="Atualizar pedido" class="btn btn-primary"/>
    <input type="reset" value="Reiniciar" class="btn btn-secondary"/>

</form>

<?php require_once "../src/views/footer.php"; ?>