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
                <a href="../public/atualiza.php?cod=<?= $linha->cod ?>"> Editar </a>
            </td>
        </tr>
        <?php endforeach; ?>
        
        </tbody>
    </table>

<?php require_once "../src/views/footer.php"; ?>