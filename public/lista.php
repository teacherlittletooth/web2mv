<?php

use Database\Database;

 require_once "../src/views/header_nav.php"; ?>

<?php
    require_once "../src/model/Database.php";
    $db = new Database();
    
    $resultDb = $db->select(
        "SELECT * FROM pedidos; "
    );

    ?>
    <!-- Início da tabela -->
    
    <table class="table container mt-3">
        <thead class="text-white bg-dark">
            <tr>
                <th>Código</th>
                <th>Data e hora</th>
                <th>Ingredientes</th>
                <th>Quantidade</th>
                <th>Pagamento</th>
                <th>Bandeira</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($resultDb as $linha) : ?>
        <tr>
            <td><?= $linha->cod ?></td>
            <td><?= $linha->data_hora ?></td>
            <td><?= $linha->ingredientes ?></td>
            <td><?= $linha->qtde ?></td>
            <td><?= $linha->pgto ?></td>
            <td><?= $linha->card_flag ?></td>
            <td>
                <a title="Editar" href="../public/atualiza.php?cod=<?= $linha->cod ?>">
                    <img src="../public/assets/img/pencil.svg" alt="Editar">
                </a>
            </td>
            <td>
                <a title="Apagar" onclick="confirmaDelete(<?= $linha->cod ?>);">
                    <i class="bi bi-trash"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
        
        </tbody>
    </table>

<script>
    function confirmaDelete(id) {
        if( confirm("Deseja excluir o pedido "+id+"?") ) {
            window.location.href="../data/delete.php?cod="+id;
        } else {
            alert("Exclusão cancelada!");
        }
    }
</script>

<?php require_once "../src/views/footer.php"; ?>