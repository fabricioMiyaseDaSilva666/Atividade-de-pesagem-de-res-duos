<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\Telas\telinha.html');
    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;
?>
<!doctype html>
<html>
<head>
        <meta charset="UFT-8">
        <title>Consultar Pesagem do Mês</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Consultar Registro do Mês</h1><br>
    <div class="cadastro">
        <form method="POST">
            <label>Informe o Código</label>
            <input type="text" name="tCodigo"/><br><br>
            <button type="submit">Consultar
            <?php
                $conexao = new Conexao();
                $cpf = $_POST['tCodigo'];
                $consultar = new Consultar();
            ?>
            </button>
        </form>
        <br><br><a href="Menu.php"><button>Voltar para o menu</button></a>
    <?php
        if(isset($_POST['tCodigo'])){
            echo $consultar->consultaMensalIndividual($conexao, $codigo);
        }else{
            return "Preencha o campo CPF";
        }
    ?>
</body>
</html>