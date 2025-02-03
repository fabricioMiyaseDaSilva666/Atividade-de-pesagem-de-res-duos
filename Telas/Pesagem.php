<?php
    namespace PHP\Modelo\Tela;
    require_once('..\ResiduosPesagem.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    require_once('..\Telas\html.html');
    use PHP\Modleo\ResiduoPesagem;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\Telas\estilo;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UFT-8">
        <title>Pesagem de Resíduos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <form method="POST">
        <div class="mb-3">
            <label for="lCodigo" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="tCodigo" name="tCodigo" placeholder="99999999999">
        </div>
        <div class="mb-3">
            <label for="lFuncionarioCole" class="form-label">Funcionario</label>
            <input type="text" class="form-control" id="tFuncionarioCole" name="tFuncionarioCole" placeholder="Insira seu código">
        </div>
        <div class="mb-3">
            <label for="lDtColeta" class="form-label">Data da Coleta</label>
            <input type="text" class="form-control" id="tDtColeta" name="tDtColeta" placeholder="dia/mês/ano">
        </div>
        
        <div class="mb-3">
            <label for="lEnvio" class="form-label">Local de Envio</label>
            <input type="text" class="form-control" id="tEnvio" name="tEnvio" placeholder="Insira o local de envio">
        </div>

        <ul class="list-group">
            <li class="list-group-item">
                <label for="lNaoReci" class="form-check-label">Não Reciclável</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tNaoReci" name="tNaoReci">
            </li>

            <li class="list-group-item">
                <label for="lReciclavel" class="form-check-label">Reciclável</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tReciclavel" name="tReciclavel">
            </li>

            <li class="list-group-item">
                <label for="lOleo" class="form-check-label">Óleo</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tOleo" name="tOleo">
            </li>

            <li class="list-group-item">
                <label for="lTampasPlas" class="form-check-label">Tampinhas Plásticas</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tTampasPlas" name="tTampasPlas">
            </li>

            <li class="list-group-item">
                <label for="lLacreAlumi" class="form-check-label">Lacres de Alumínio</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tLacreAlumi" name="tLacreAlumi">
            </li>

            <li class="list-group-item">
                <label for="lTecidos" class="form-check-label">Tecidos</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tTecidos" name="tTecidos">
            </li>

            <li class="list-group-item">
                <label for="lMeias" class="form-check-label">Meias</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tMeias" name="tMeias">
            </li>

            <li class="list-group-item">
                <label for="lMaterialEsc" class="form-check-label">Material de Escrita</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tMaterialEsc" name="tMaterialEsc">
            </li>

            <li class="list-group-item">
                <label for="lEsponjas" class="form-check-label">Esponjas</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tEsponjas" name="tEsponjas">
            </li>

            <li class="list-group-item">
                <label for="lEletronicos" class="form-check-label">Eletrônicos</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tEletronicos" name="tEletronicos">
            </li>

            <li class="list-group-item">
                <label for="lPilhaBate" class="form-check-label">Pilhas de Baterias</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tPilhaBate" name="tPilhaBate">
            </li>

            <li class="list-group-item">
                <label for="lInfectante" class="form-check-label">Infectante</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tInfectante" name="tInfectante">
            </li>

            <li class="list-group-item">
                <label for="lQuimico" class="form-check-label">Químicos</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tQuimico" name="tQuimico">
            </li>

            <li class="list-group-item">
                <label for="lLampadaFluore" class="form-check-label">Lâmpada Fluorescente</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tLampadaFluore" name="tLampadaFluore">
            </li>

            <li class="list-group-item">
                <label for="lTonnersImpre" class="form-check-label">Tonners de Impressora</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tTonnersImpre" name="tTonnersImpre">
            </li>

            <li class="list-group-item">
                <label for="lEsmalte" class="form-check-label">Esmaltes</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tEsmalte" name="tEsmalte">
            </li>

            <li class="list-group-item">
                <label for="lCosmeticos" class="form-check-label">Cosméticos</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tCosmeticos" name="tCosmeticos">
            </li>

            <li class="list-group-item">
                <label for="lCartelaMed" class="form-check-label">Cartela de Medicamento</label>
                <input class="form-check-input me-1" type="checkbox" value="" id="tCartelaMed" name="tCartelaMed">
            </li>
        </ul>
        <div class="mb-3">
            <label for="lPeso" class="form-label">Peso em kg</label>
            <input type="text" class="form-control" id="tPeso" name="tPeso" placeholder="Insira o peso">
        </div>
        <button type="submit">Cadastrar
            <?php
                $conexao = new Conexao();//Isso vai Conectar ao Banco

                if(isset($_POST['tCodigo'])){
                    $codigo = $_POST['tCodigo'];
                    $codigoFuncionario = $_POST['tFuncionarioCole'];
                    $dtColeta = $_POST['tDtColeta'];
                    $envio = $_POST['tEnvio'];
                    $residuo = $_POST['tNaoReci'];
                    $residuo = $_POST['tReciclavel'];
                    $residuo = $_POST['tOleo'];
                    $residuo = $_POST['tTampasPlas'];
                    $residuo = $_POST['tLacreAlumi'];
                    $residuo = $_POST['tTecidos'];
                    $residuo = $_POST['tMeias'];
                    $residuo = $_POST['tMaterialEsc'];
                    $residuo = $_POST['tEsponjas'];
                    $residuo = $_POST['tEletronicos'];
                    $residuo = $_POST['tPilhaBate'];
                    $residuo = $_POST['tInfectante'];
                    $residuo = $_POST['tQuimico'];
                    $residuo = $_POST['tLampadaFluore'];
                    $residuo = $_POST['tTonnersImpre'];
                    $residuo = $_POST['tEsmalte'];
                    $residuo = $_POST['tCosmeticos'];
                    $residuo = $_POST['tCartelaMed'];
                    $peso = $_POST['tPeso'];

                    //Instanciar
                   $inserir = new Inserir();
                   echo $inserir->pesagemMensal($conexao, $codigo, $codigoFuncionario, $dtColeta, $envio, $residuo, $peso);
                }
            ?>
        </button>
        </form>
        <br><br><a href="Menu.php"><button>Voltar para o menu</button></a>
    </body>
</html>