<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $cargo;
    private $idade;
    private $salario;
    private $data_admissao;
    private $endereco;


     public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }


      private function criarFormulario($id){
        $row = $this->editar->pesquisaFuncionario($id);
        $this->nome         =$row['nome'];
        $this->cargo        =$row['cargo'];
        $this->idade   =$row['idade'];
        $this->salario        =$row['salario'];
        $this->data_admissao         =$row['data_admissao'];
        $this->endereco         =$row['endereco'];

    }

     public function editarFormulario($nome,$cargo,$idade,$salario,$data_admissao,$endereco,$id){
        if($this->editar->updateFuncionario($nome,$cargo,$idade,$salario,$data_admissao,$endereco,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getCargo(){
        return $this->cargo;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSalario(){
        return $this->salario;
    }
    public function getDataAdmissao(){
        return $this->data_admissao;
    }
    public function getEndereco(){
        return $this->endereco;
    }


}

$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['cargo'],$_POST['idade'],$_POST['salario'],$_POST['data_admissao'],$_POST['endereco'],$_POST['id']);
}
?>