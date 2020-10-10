<?php

//importando o banco e usando o ini_set para coletar os erros do php
require_once("banco.php");
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);

//criando objeto que extende a classe Banco
class Cadastro extends Banco {
    //atributos
    private $nome;
	private $image;
    private $cargo;
    private $idade;
    private $salario;
    private $endereco;
    private $dataAdmissao;


    //getters e setters
	 public function setNome($string){
        $this->nome = $string;
    }

     public function getNome(){
        return $this->nome;
    }

    public function setCargo($string){
        $this->cargo = $string;
    }

     public function getCargo(){
        return $this->cargo;
    }

    public function setIdade($string){
        $this->idade = $string;
    }

     public function getIdade(){
        return $this->idade;
    }


    public function setSalario($string){
        $this->salario = $string;
    }

     public function getSalario(){
        return $this->salario;
    }



    public function setEndereco($string){
        $this->endereco = $string;
    }

     public function getEndereco(){
        return $this->endereco;
    }


    public function setDataAdmissao($string){
        $this->dataAdmissao = $string;
    }

     public function getDataAdmissao(){
        return $this->dataAdmissao;
    }


    public function setImage($string){
        $this->image = $string;
    }

     public function getImage(){
        return $this->image;
    }

    //incluir retornar todos os atributos do Funcionario
     public function incluir(){
        return $this->setFuncionario($this->getNome(), $this->getCargo(), $this->getIdade(), $this->getSalario(), $this->getEndereco(), $this->getDataAdmissao(), $this->getImage());
    }



}