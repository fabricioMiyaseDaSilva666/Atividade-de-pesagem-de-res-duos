<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    require_once('..\Telas\telinha.html');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>

<!Doctype HTML>
<HTML>
<head>
<meta charset="UFT-8">
        <title>Excluir Pesagem Mensal</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Excluir Registro do Mês</h1><br>
    <div class="cadastro">
        <form method="POST">
            <label>Código: </label>
            <input type="text" name="tCodigo"><br><br>

        <div class="cadastro">
            <button type="submit">Excluir
                <?php
                    $conexao = new Conexao();
                    if(isset($_POST['tCodigo'])){
                        $codigo = $_POST['tCodigo'];
                        $excluir = new Excluir();
                    }
            ?>
        </button>
        
    </form>
    <br><br>
    <a href="Menu.php"><button>Voltar para o menu</button></a>
    <div class="cadastro">
    <?php
        if(isset($_POST['tCpf'])){
            echo $excluir->excluirMes($conexao, $codigo);
        }else{
            return "Informe um CPF válido";
        }
    ?>
</body>
</HTML>