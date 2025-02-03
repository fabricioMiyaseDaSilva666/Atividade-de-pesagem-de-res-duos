<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        function cadastrarFuncionario(Conexao $conexao, string $cpf, string $nome, string $endereco, string $telefone, string $email, float $salario){
            try{
                $conn = $conexao->conectar();
                $sql = "Insert into funcionario(codigo, nome, endereco, telefone, email, salario) values('$cpf', '$nome', '$endereco', '$email', '$salario')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
        }
        function pesagemMensal(Conexao $conexao, string $codigo, string $codigoFuncionario, string $dtColeta, string $categoria, string $peso, string $envio){
            try{
                $conn = $conexao->conected();
                $sql = "Insert into mes(codigo, codigoFuncionario, dtColeta, categoria, peso, envio) values('$codigo', '$codigoFuncionario', '$dtColeta', '$categoria', '$peso', '$envio')";
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
        }
    }
?>