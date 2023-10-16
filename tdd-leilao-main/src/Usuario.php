<?php
namespace src;

    class Usuario{
        private int $id;
        private string $nome, $cpf, $rg, $data_nascimento, $endereco, $email, $senha;
    
    public function __construct(int $id, string $nome, string $cpf, string $rg, string $data_nascimento, string $endereco, string $email, string $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->data_nascimento = $data_nascimento;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->senha = $senha;
    }    
    
    public function getId(){
        return this->$id_leiloeiro;
    }

    public function getNome(){
        return this->$nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getRg(){
        return this->$rg;
    }

    public function setRg($rg){
        $this->rg = $rg;
    }

    public function getNascimento(){
        return this->$data_nascimento;
    }

    public function setNascimento($data_nascimento){
        $this->data_nascimento = $data_nascimento;
    }

    public function getEndereco(){
        return this->$endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }

    public function getCpf(){
        return this->$rg;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getEmail(){
        return this->$email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getSenha(){
        return this->$senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    }

?>