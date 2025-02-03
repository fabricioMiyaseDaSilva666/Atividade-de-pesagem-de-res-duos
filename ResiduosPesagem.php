<?php
    namespace PHP\Modelo;

    class Mes{
        protected string $codigo;
        protected string $codigoFuncionario;
        protected string $dtColeta;
        protected string $categoria;
        protected string $peso;
        protected string $envio;

        public function __construct(string $codigo, string $codigoFuncionario, string $dtColeta, string $categoria, string $peso, string $envio)
        {
            $this->codigo = $codigo;
            $this->codigoFuncionario = $codigoFuncionario;
            $this->dtColeta = $dtColeta;
            $this->categoria = $categoria;
            $this->peso = $peso;
            $this->envio = $envio;
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
            return "<br>Codigo: ".$this->codigo."<br>Codigo do Funcionario: ".$this->codigoFuncionario."<br>Data da Coleta".$this->dtColeta."<br>Categoria: ".$this->categoria."<br>Peso: ".$this->peso."<br>Local de Envio: ".$this->envio;
        }
    }
?>