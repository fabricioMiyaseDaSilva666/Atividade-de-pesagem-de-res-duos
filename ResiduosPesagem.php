<?php
    namespace PHP\Modelo;

    class Pesagem{
        protected string $codigo;
        protected string $codigoFuncionario;
        protected string $dtColeta;
        protected string $categoria;
        protected string $peso;

        public function __construct(string $codigo, string $codigoFuncionario, string $dtColete, string $categoria, string $peso)
        {
            $this->codigo = $codigo;
            $this->codigoFuncionario = $codigoFuncionario;
            $this->dtColete = $dtColete;
            $this->categoria = $categoria;
            $this->peso = $peso;
        }//Fim do constructor

        public function __get(string $variavel):mixed
        {
            return $this->variavel;
        }//Fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//Fim do set

        public function imprimir():string
        {
            return parent::imprimir().
                    "<br>Total: ".$this->categoria;
        }
    }
?>