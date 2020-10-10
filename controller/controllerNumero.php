  
<?php
session_start();
  require_once("../controller/ControllerEditar.php");

$btnCad = filter_input(INPUT_POST, 'btn-cad', FILTER_SANITIZE_STRING);
if($btnCad){
    include_once("../conexao/conexao.php");
    $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
   	$numero1 = filter_input(INPUT_POST, 'numero1', FILTER_SANITIZE_STRING);
   	$numero2 = filter_input(INPUT_POST, 'numero2', FILTER_SANITIZE_STRING);
   	$numero3 = filter_input(INPUT_POST, 'numero3', FILTER_SANITIZE_STRING);
    $dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    $erro = false;
  
    if(!$erro){
        $result_numero = "INSERT INTO numeros (numero1, numero2, numero3, funcionario_id) VALUES ('$numero1', '$numero2', '$numero3', '$id')";
        $resultado_numero = mysqli_query($conn, $result_numero);
        
        if(mysqli_insert_id($conn)){
           echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se o numero não está duplicado');</script>";
        }
    }else{

    }
	



}
