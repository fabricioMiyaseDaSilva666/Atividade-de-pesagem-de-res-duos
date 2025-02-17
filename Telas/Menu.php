<?php
    namespace PHP\Modelo\Telas;
    require_once('..\Telas\telinha.html');
    use HTML\Modelo\Telas\html;
    use CSS\Modelo\Telas\estilo;
?>
<!Doctype HTML>
<html>
    <head>
        <meta charset="UFT-8">
        <title>Menu Geral</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="estilo.css">

    </head>
    <body>
        <h1>Menu Principal </h1><br>
        
        <div class="menuPrincipal">
            <a href="Pesagem.php"><button>Registra Pesagem do Mês</button></a><br>
            <a href="CadastroFuncionario.php"><button>Cadastro do Funcionario</button></a><br>
            <a href="AtualizarFuncionario.php"><button>Atualizar Funcionario</button></a><br>
            <a href="ConsultarFuncionario.php"><button>Consultar Funcionario</button></a><br>
            <a href="ConsultarMes.php"><button>Consultar Mensal</button></a><br>
            <a href="ExcluirFuncionario.php"><button>Excluir Funcionario</button></a><br>
            <a href="ExcluirPesagem.php"><button>Excluir Registro de Pesagem</button></a>
            <br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
    </body>
</html>