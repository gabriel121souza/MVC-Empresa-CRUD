<!DOCTYPE HTML>
<html>

<?php include("head.php") ?>
<body>
    <!--coletando dados de forma OO -->
    <?php include("menu.php") ?>
    <?php require_once("../controller/ControllerEditar.php");?>
    <div class="row">
        <form method="post" action="../controller/ControllerEditar.php" id="form" name="form" class="col-10">
            <div class="form-group">
                <input class="form-control" type="text" id="nome" name="nome" value="<?php echo $editar->getNome(); ?>" required autofocus>
                <input class="form-control" type="text" id="cargo" name="cargo" value="<?php echo $editar->getCargo(); ?>" required>
                <input class="form-control" type="number" id="idade" name="idade" value="<?php echo $editar->getIdade(); ?>" required>

                <input class="form-control" type="number" id="salario" name="salario" value="<?php echo $editar->getSalario(); ?>" required>
                <input class="form-control" type="text" id="endereco" name="endereco" value="<?php echo $editar->getEndereco(); ?>" required>

                <input class="form-control" type="date" id="data_admissao" name="data_admissao" value="<?php echo $editar->getDataAdmissao(); ?>" required>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $editar->getNome();?>">
                <button type="submit" class="btn btn-success" id="editar" name="submit" value="editar">Editar</button>
            </div>
        </form>
    </div>

    </script>
</body>

</html>