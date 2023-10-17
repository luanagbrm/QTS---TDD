<?php
namespace src;
use src\Produto;
use src\Usuario;

    class Leilao{
        private int $id;
        private string $nome_leilao, $status;
        private Produto $produto;
        private array $inscritos;
        private float $lance_final;
        private array $lancesMaiores;

    public function __construct($id,$nome,$status,$produto){
        
        $this->id = $id;
        $this->nome_leilao = $nome;
        $this->status = $status;
        $this->produto = $produto;
        $this->inscritos = [];

    }

    public function setProduto(Produto $produto){
        $this->produto = $produto;
    }

    public function getProduto(){
        return $this->produto;
    }

    public function setInscritos(Usuario $inscrito){
        array_push($this->inscritos,$inscrito);
    }

    public function getInscritos(){
        return $this->inscritos;
    }
    

    public function getId(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome_leilao;
    }

    public function setNome($nome){
        $this->nome_leilao = $nome;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getLanceFinal(){
        return $this->lance_final;
    }

    public function setLanceFinal($lance_final){
        $this->lance_final = $lance_final;
    }

}

?>