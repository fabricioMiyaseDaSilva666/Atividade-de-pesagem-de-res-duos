<?php
    namespace PHP\Modelo\DAO;

    class Conexao{
        function conectar(){
            try{//O try é pra caso alguma coisa acabe dando errado, ele meio que vai proteger o código
                $conn = mysqli_connect('localhost', 'root', '', 'pesagemDeResiduos');//Isso vai chama um banco de dados do mysql pra fazer uma conexão entre essas duas coisas
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }
            catch(Except $erro)
            {
                return "Algo deu errado!<br><br>".$erro;
            }
        }//Fim do conectar
    }//Fim da classe
?>