<?php

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = null;
    }

    if (isset($_POST['senha'])) {
        $senha = $_POST['senha'];
    } else {
        $senha = null;
    }
////////////////////////////////////////////////////////

use Database\Database;

require_once "../src/model/Database.php";

    $db = new Database();

    $result = $db->select(
        "SELECT * FROM usuarios where email = 'paulo.donini@qi.edu.br'; "
    );

    if( isset($result[0]) ) {
        $senhaDb = $result[0]->senha;
        $emailDb = $result[0]->email;
    } else {
        $senhaDb = null;
        $emailDb = null;
    }

    //var_dump($result[0]);
////////////////////////////////////////////////////////

if ($email != null && $senha != null) {
    if ($email == $emailDb && $senha == $senhaDb) {
        $msg = 'Bem vindo!';
        //$redirect = "<meta http-equiv='refresh' content='3; url = https://qi.edu.br' />";
    } else {
        $msg = 'Acesso negado!';
        //$redirect = "<meta http-equiv='refresh' content='1; url = ../index.php' />";
    }
}

require_once "../src/views/header_nav.php";

?>

<div class="container mt-4">

    <div class="text-center">
        <h1> <?= (!isset($msg) ? "Visitante" : $msg) ?> </h1>
        <?= (isset($redirect) ? $redirect : "<hr>") ?>
    </div>

    <div class="form-group">
        <form method="get" action="pega_checkbox.php">
            <div class="form-check form-switch">
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Pão" />
                Pão<br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Carne" />
                Carne<br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Maionese" />
                Maionese<br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Milho" />
                Milho<br>
                <input type="checkbox" class="form-check-input" name="ingrediente[]" value="Ervilha" />
                Ervilha<br>
            </div>

            <hr>
            Quantidade:
            <input type="number" class="form-control col-lg-1 col-sm-4" name="qtde" required value="1" min="1" />
            <hr>
            Pagamento:
            <div class="form-check">
                <input type="radio" class="form-check-input" value="dinheiro" name="pgto" id="dinheiro"/>
                <label for="dinheiro">Dinheiro</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" value="cartao" name="pgto" id="cartao"/>
                <label for="cartao">Cartão</label>
            </div>
            <div class="form-check">
                <input type="radio" class="form-check-input" value="pix" name="pgto" id="pix"/>
                <label for="pix">Pix</label>
            </div>
            <hr>
            Bandeira cartão:
            <select name="card-flag" class="form-select col-lg-4 col-sm-4">
                <option value="">Selecione</option>
                <option value="Green Card">Green Card</option>
                <option value="Elo">Elo</option>
                <option value="Senff">Senff</option>
            </select>

            <br><br>

            <input type="submit" value="Enviar" onclick="confirmaPedido()" class="btn btn-primary col-4 offset-4" />
        </form>
    </div>

</div>

<?php require_once "../src/views/footer.php"; ?>