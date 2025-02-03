<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Atualizar
    {
        function atualizarFuncionario(
            Conexao $conexao,
            string $campo,
            string $novoDado,
            int $cpf
        ){
            $conn = $conexao->conectar();
            $sql = "update funcionario set $campo = '$novoDado' where codigo = '$cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br>Não Atualizado!";
            }


        }//Fim do método
        function atualizarResiduos(
            Conexao $conexao,
            string $campo
        ){
            $conn = $conexao->conectar();
            $sql = "update mes set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br>Não Atualizado!";
            }
        }
    }//Fim do classe

?>