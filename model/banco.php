<?php 
require_once("../init.php");
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

//conexao do banco de dados
class Banco{
	protected $mysqli;
	public function __construct(){
		$this->conexao();
	}
	 private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    //CREATE funcionarios
    public function setFuncionario($nome, $cargo,  $idade,  $salario,  $endereco,  $dataAdmissao, $image){
        $stmt = $this->mysqli->prepare("INSERT INTO funcionario (`nome`, `cargo`, `idade`, `salario`, `endereco`, `data_admissao`, `image`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$nome, $cargo,  $idade,  $salario,  $endereco,  $dataAdmissao, $image);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    //READ funcionarios
    public function getFuncionario(){
        $result = $this->mysqli->query("SELECT * FROM funcionario");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;
    }
    
    //Delete funcionarios
    public function deleteFuncionario($id){
        if($this->mysqli->query("DELETE FROM `funcionario` WHERE `id` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }
    }

    //PESQUISAR funcionario(essencial para conseguir fazer o update)
    public function pesquisaFuncionario($id){
        $result = $this->mysqli->query("SELECT * FROM funcionario WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    //UPDATE funcionario
    public function updateFuncionario($nome,$cargo,$idade,$salario,$data_admissao,$endereco,$id){
        $stmt = $this->mysqli->prepare("UPDATE `funcionario` SET `nome` = ?, `cargo`=?, `idade`=?, `salario`=?, `data_admissao`=?,`endereco` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$nome,$cargo,$idade,$salario,$data_admissao,$endereco,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
   
    
}
?>

