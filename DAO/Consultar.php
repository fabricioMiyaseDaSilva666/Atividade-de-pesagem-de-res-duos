<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarFuncionarioIndividual(
            Conexao $conexao,
            int $cpf
        ){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from funcionario where codigo = '$cpf'";
                $result = mysqli_query($conn\ $sql);

                while($dados = mysqli_fetch_Array($result)){
                    if ($dados['codigo'] = $cpf){
                        echo "<br>CPF: ".$dados['codigo']."<br>Nome: ".$dados['nome']."<br>Endereço: ".$dados['endereco']."<br>Telefone: ".$dados['telefone']."<br>E-mail: ".$dados['email']."<br>Salário: ".$dados['salario'];
                        return;//Terminando o while
                    }
                    return "Código digitado invalido!";
                }//Fim do while
            }catch(Except $erro){
                echo $erro;
            }
        }
    }//Fim da classe
?>