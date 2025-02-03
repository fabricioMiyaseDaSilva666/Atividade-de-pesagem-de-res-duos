<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir
    {
        function excluirFuncionario(
            Conexao $conexao,
            int $cpf
        ){
            $conn = $conexao->conexao();
            $sql = "delete from funcionario where codigo = '$cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "Deletedo com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }
        function excluirMes(
            Conexao $conexao,
            int $codigo
        ){
            $conn = $conexao->conexao();
            $sql = "delete from mes where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }

    }
?>