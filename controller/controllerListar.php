<?php

require_once("../model/banco.php");

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
</body>
</html>
<?php
class listarController{

    private $lista;

    public function __construct(){
        $this->lista = new Banco();
        $this->criarTabela();

    }

    private function criarTabela(){
            
            
    
                include_once('../conexao/conexao.php');
                $result_funcionario = "SELECT * FROM funcionario";
                $resultado_funcionario = mysqli_query($conn, $result_funcionario);

                while($rows_funcionario = mysqli_fetch_assoc($resultado_funcionario)){
            echo "<tr>";
            ?>
            <th><img src="../upload/<?php echo $rows_funcionario['image'] ?>" style="height:150px; width: 150px"></th>

            <?php
            echo "<th>".$rows_funcionario['nome'] ."</th>";
            echo "<td>".$rows_funcionario['cargo'] ."</td>";
            echo "<td>".$rows_funcionario['idade'] ."</td>";
            echo "<td>".$rows_funcionario['data_admissao'] ."</td>";
            echo "<td></td>";
            echo "<td>
            <a class='btn btn-primary' href='detalhesfuncionario.php?id=".$rows_funcionario['id']."'>mais informacoes</a>            
            <a class='btn btn-warning' href='editar.php?id=".$rows_funcionario['nome']."'>Editar</a>
            <a class='btn btn-danger' href='../controller/ControllerDeletar.php?id=".$rows_funcionario['id']."'>Excluir</a>

            <a class='btn btn-success' href='adcionarnumero.php?id=".$rows_funcionario['id']."'>Adc Numero</a>
            </td>";
            echo "</tr>";
            }
            ?>
            
      
     
    </div>
  </div>
</div>
<?php
        
    }
}