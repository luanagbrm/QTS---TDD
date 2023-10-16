<?php
namespace src;

    class Produto{

        private int $id;
        private string $nome, $descricao, $fabricante;
        private float $lanceMinimo;
        private array $lancesMaiores;

        public function __construct(int $id, string $nome, string $descricao, string $fabricante, float $lanceMinimo){
            $this->id = $id;
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->fabricante = $fabricante;
            $this->lanceMinimo = $lanceMinimo;
        }

        public function getId(){
            return $this->id;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getFabricante(){
            return $this->fabricante;
        }

        public function getLanceMinimo(){
            return $this->lanceMinimo;
        }

        public function getLancesMaiores(){
            return $this->lancesMaiores;
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }

        public function setFabricante($fabricante){
            $this->fabricante = $fa;
        }

        public function setLanceMinimo($lanceMinimo){
            $this->lanceMinimo = $lanceMinimo;
        }

        public function setLancesMaiores($lances){
            $this->lancesMaiores = $lances;
        }

    }


?>