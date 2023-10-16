<?php
namespace src;

use Leilao;

    class Leiloeiro{
        private int $id;
        private Leilao $leilao;
        private string $nome, $cpf, $rg, $matricula, $senha;
        private array $historico;
    
    public function __construct(int $id, string $nome, string $cpf, string $rg, string $matricula, string $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->matricula = $matricula;
        $this->senha = $senha;
    }    
    
    public function getId(){
        return this->$id;
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

    public function getCpf(){
        return this->$rg;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getMatricula(){
        return this->$matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getSenha(){
        return this->$senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getHistorico(){
        return this->$historico;
    }

    }

?>