<?php
namespace src;
use Produto;
use Leiloeiro;
use Usuario;

    class Leilao{
        private int $id;
        private string $nome_leilao, $status;
        private Produto $produto;
        private Leiloeiro $leiloeiro;
        private Usuario $usuario;
        private float $lance_final;
    

    public function getId(){
        return this->$id;
    }

    public function getNome(){
        return this->$nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getStatus(){
        return this->$status;
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getLanceFinal(){
        return this->$lancefinal;
    }

    public function setLanceFinal($lance_final){
        $this->lance_final = $lance_final;
    }

}

?>