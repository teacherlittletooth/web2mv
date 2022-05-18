<?php require_once "../src/views/header.php" ?>

    <div class="center-login">
        <h1>::: Login :::</h1>
        <form method="post" action="recebe.php">
            <div class="row">
                <div class="form-group">
                    <div class="col-8 offset-2">
                        <input type="email" id="em" class="form-control" name="email" placeholder="Digite seu email" />
                        <br>
                        <input type="password" id="pass" class="form-control" name="senha" placeholder="Digite sua senha" />
                        <br>
                        <input type="reset" class="btn btn-warning" value="Limpar dados" />
                        <input type="submit" class="btn btn-primary" value="Enviar dados"/>
                        <br><br>
                        <button type="button" onclick="window.location.href='recebe.php'"
                        class="btn btn-outline-info">Entrar como visitante</button>
                        <br>
                        <a href="recebe.php" target="_blank">Entrar como visitante</a>
                    </div>
                </div>
            </div>        
        </form>
    </div>

<?php require_once "../src/views/footer.php" ?>