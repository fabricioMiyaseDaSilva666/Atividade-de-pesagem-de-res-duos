<?php
    namespace PHP\Modelo;

    class Funcionario{
        protected string $cpf;
        protected string $nome;
        protected string $endereco;
        protected string $telefone;
        protected string $email;
        protected string $salario;

        public function __construct(string $cpf, string $nome, string $endereco, string $telefone, string $email, string $salario)
        {
            //instanciar
            $this->cpf = $cpf;
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->salario = $salario;
        }//Fim do contrutor

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
            return "<br>CPF: ".$this->cpf."<br>Nome: ".$this->nome."<br>Endereço: ".$this->endereco."<br>Telefone: ".$this->telefone."<br>E-mail: ".$this->email."<br>Salário";
        }//Fim do método
    }//Fim da classe Pessoa
?>