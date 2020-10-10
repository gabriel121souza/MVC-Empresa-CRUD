<?php
    session_start();
    include_once("../conexao/conexao.php");

    //coletando o id funcionario para usar de foreign key
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $result_funcionario = "SELECT * FROM funcionario WHERE id = '$id'";
     $resultado_funcionario = mysqli_query($conn, $result_funcionario);
     $row_funcionario = mysqli_fetch_assoc($resultado_funcionario);

?>
<!DOCTYPE HTML>
<html>
<?php include("head.php") ?>
<body>
    <?php include("menu.php") ?>
    <div class="row">
        <form method="post" action="../controller/controllerNumero.php" id="form" name="form" class="col-10">
            <div class="form-group">

                <input  class="form-control" type="text" id="numero1" name="numero1" placeholder="Insira o Numero Celular(1)">
                <input  class="form-control" type="text" id="numero2" name="numero2"  placeholder="Insira o Numero Celular(2)">
                <input  class="form-control" type="text" id="numero3" name="numero3" placeholder="Insira o Numero Telefone">



            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php echo $row_funcionario['id']?>">
                    <p>Cadastre o numero do funcionario</p>
                <button type="submit" class="btn btn-success" id="adcnumero"  name="btn-cad" value="Cadastrar Numero">Cadastrar numero</button>
            </div>
        </form>
    </div>

    </script>
</body>

</html>