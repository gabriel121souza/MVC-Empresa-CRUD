<?php

    //importando a conexao para acessa em paradgma Estruturado
    include_once('../conexao/conexao.php');
    
    
    //coletando o id
    $id = $_GET['id'];                
    //coletando as informacoes do banco de dados de forma estruturada
    $result_funcionario = "SELECT * FROM funcionario WHERE id='$id'";
    $resultado_funcionario = mysqli_query($conn, $result_funcionario);
    while($rows_funcionario = mysqli_fetch_assoc($resultado_funcionario)){
     
       
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">       
    <!-- Scripts -->
    
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
 <div class="row">

        <!--formulario-->
        <form  id="form" name="form"  action= "index.php" class="col-10">
            <div class="form-group">
                
                <!-- mostrando a imagem do banco de dados -->
                <p align="center"><img src="../upload/<?php echo $rows_funcionario['image'] ?>" style="height:250px; width: 250px"></p>                
                 <!--mostrando as informacoes do funcionario-->
                 <label><b> Nome:</b> </label>
                 <input readonly class="form-control" type="text" id="nome" name="nome" value="<?php echo $rows_funcionario['nome']; ?>" >
                 <br>

                <label><b> Cargo: </b></label>
                <input readonly class="form-control" type="text" id="cargo" name="cargo" value="<?php echo $rows_funcionario['cargo']; ?>" >
                <br>

                <label><b> Idade: </b></label>
                <input readonly class="form-control" type="number" id="idade" name="idade" value="<?php echo $rows_funcionario['idade']; ?>" >
                <br>

                <label><b> Salario: </b></label>
                <input readonly class="form-control" type="number" id="salario" name="salario" value="<?php echo $rows_funcionario['salario']?>" >
                <br>

                <label><b> Endereco: </b></label>
                <input readonly class="form-control" type="text" id="endereco" name="endereco" value="<?php echo $rows_funcionario['endereco'] ?>" >
                <br>

                <label><b> Data Admissão: </b></label>
                <input readonly class="form-control" type="date" id="data_admissao" name="data_admissao" value="<?php echo$rows_funcionario['data_admissao'] ?>" > 
                <br>
                
                <!-- coletando as informacoes dos numeros de outra tabela do banco de dados -->
                <label><b>Telefones para contatos</b></label>
             <?php } ?>
             <?php
              $result_numero = "SELECT * FROM numeros WHERE funcionario_id='$id'";
                $resultado_numero = mysqli_query($conn, $result_numero);
                while($rows_numero = mysqli_fetch_assoc($resultado_numero)){
            ?>
                <input readonly class="form-control" type="text" id="numero1" name="numero1" value="<?php echo $rows_numero['numero1'] ?>" >

                <input readonly class="form-control" type="text" id="numero2" name="numero2" value="<?php echo $rows_numero['numero2'] ?>" >

                <input readonly class="form-control" type="text" id="numero3" name="numero3" value="<?php echo $rows_numero['numero3'] ?>" >
           <?php } ?>
                    <br>
                    <button type="submit" type="button" class="btn btn-primary" type="submit" >Voltar</button>

            </div>
        </form>
    </div>
</body>
</html>