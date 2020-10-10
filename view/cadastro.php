<!DOCTYPE HTML>
<html>
<?php 
include("head.php");
?>
<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/controllerCadastro.php" enctype="multipart/form-data" class="col-10" onsubmit="validar(document.form); return false;">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome Funcionario" required autofocus>
                <br>
                <input class="form-control" type="text" id="cargo" name="cargo" placeholder="Cargo" required>
                <br>
                <input class="form-control" type="number" id="idade" name="idade" placeholder="Idade" required>
                <br>
                <input class="form-control" type="number" id="salario" name="salario" placeholder="Salario" onkeypress="formatarMoeda();" required>
                <br>
                <input class="form-control" type="text" id="endereco" name="endereco" placeholder="endereco" required>
                <br>
                <input class="form-control" type="date" id="dataAdmissao" name="dataAdmissao" placeholder="Data de Admissao" required>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    Imagem <span style="color:red">*</span><input type="file" name="img" required>
                </div>  
           </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success" id="cadastrar">Cadastrar</button>
            </div>
        </form>
    </div>
</body>

</html>