<?php
require_once("../model/cadastroFuncionario.php");
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

//class controller
class cadastroController{
	private $cadastro;

	public function __construct(){
		$this->cadastro = new Cadastro();
		$this->incluir();
	}
	//pegando os dados do formulario e passando o objeto funcionario pela function incluir
	private function incluir(){
		$this->cadastro->setNome($_POST['nome']);
		$this->cadastro->setCargo($_POST['cargo']);
		$this->cadastro->setIdade($_POST['idade']);
		$this->cadastro->setSalario($_POST['salario']);
		$this->cadastro->setEndereco($_POST['endereco']);
		$this->cadastro->setDataAdmissao(date('Y-m-d',strtotime($_POST['dataAdmissao'])));
		$this->cadastro->setImage($_FILES['img']['name']);
		$diretorio ="../upload/";
		    move_uploaded_file($_FILES['img']['tmp_name'], $diretorio.$this->cadastro->getImage()); //efetua o upload


		$result = $this->cadastro->incluir();

		if($result >= 1){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/cadastro.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!, verifique se funcionario não está duplicado');</script>";
        }

	}
}
new cadastroController();
