<?php
    namespace PHP\Modelo\Tela;
    require_once('..\ResiduoPesagem.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modleo\ResiduoPesagem;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UFT-8">
        <title>Pesagem de Resíduos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="lCpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="99999999999">
        </div>
        <div class="mb-3">
            <label for="lNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu nome">
        </div>
        <div class="mb-3">
            <label for="lTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99)99999-9999">
        </div>
        <div class="mb-3">
            <label for="lEndereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="tEndereco" name="tEndereco" placeholder="Insira seu endereço">
        </div>
        <div class="mb-3">
            <label for="lTotal" class="form-label">Total de Compras</label>
            <input type="text" class="form-control" id="tTotal" name="tTotal" placeholder="Insira seu total de compras">
        </div>
        <button type="submit">Cadastrar
            <?php
                $conexao = new Conexao();//Isso vai Conectar ao Banco

                if(isset($_POST['tCpf'])){
                    $cpf = $_POST['tCpf'];
                    $nome = $_POST['tNome'];
                    $telefone = $_POST['tTelefone'];
                    $endereco = $_POST['tEndereco'];
                    $total = $_POST['tTotal'];
                    //Instanciar
                   $inserir = new Inserir();
                   echo $inserir->pesagemMensal($conexao, $cpf, $nome, $telefone, $endereco, $total);
                }
            ?>
        </button>
        </form>
        <br><br><a href="Menu.php"><button>Voltar para o menu</button></a>
    </body>
</html>