<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Funcionario.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    require_once('..\Telas\telinha.html');
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\Telas\estilo;
    use PHP\Modelo\Telas\html;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UFT-8">
        <title>Cadastro Funcionario</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <h1>Cadastro de Funcionário</h1><br>
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
            <label for="lEndereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="tEndereco" name="tEndereco" placeholder="Insira seu endereço">
        </div>
        <div class="mb-3">
            <label for="lTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(99)99999-9999">
        </div>
        <div class="mb-3">
            <label for="lEmail" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="tEmail" name="tEmail" placeholder="Coloque seu E-mail">
        </div>
        <div class="mb-3">
            <label for="lSalario" class="form-label">Salario Total</label>
            <input type="text" class="form-control" id="tSalario" name="tSalario" placeholder="Insira seu salário">
        </div>
        <div class="cadastro">
            <button type="submit">Cadastrar
                <?php
                    $conexao = new Conexao();//Isso vai Conectar ao Banco

                    if(isset($_POST['tCpf'])){
                        $cpf = $_POST['tCpf'];
                        $nome = $_POST['tNome'];
                        $endereco = $_POST['tEndereco'];
                        $telefone = $_POST['tTelefone'];
                        $email = $_POST['tEmail'];
                        $salario = $_POST['tSalario'];
                        //Instanciar
                        $inserir = new Inserir();
                        echo $inserir->cadastrarFuncionario($conexao, $cpf, $nome, $endereco, $telefone, $email, $salario);
                    }
                ?>
            </button>
            </form>
            <br><br><a href="Menu.php"><button>Voltar para o menu</button></a>
    </body>
</html>