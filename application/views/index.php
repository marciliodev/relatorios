<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Relatórios do Almoxarifado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=('assets/css/estilo.css') ?>">
  <link rel="stylesheet" href="<?=('assets/css/bootstrap-datepicker.css') ?>">

</head>
<body>

<script src="<?=('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
<script src="<?=('assets/js/jquery.min.js') ?>"></script>
<script src="<?=('assets/js/funcoes.js') ?>"></script>
<script src="<?=('assets/js/bootstrap-datepicker.min.js') ?>"></script>
<script src="<?=('assets/locales/bootstrap-datepicker.pt-BR.min.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<nav class="navbar-right navbar-expand-lg navbar navbar-dark bg-primary">  
    <div class="dropdown">
        <!--<button onclick="dropdownMenu()" class="dropbtn">Relatórios do Almoxarifado</button>-->
        <input type="text"  placeholder="Pesquisar... " onclick="dropdownMenu()" id="myInput" onkeyup="filterFunction()">
        <div id="myDropdown" class="dropdown-content">
            <a id="a_escritorio" onclick="mudaImp();" href="./index.php?p=material_escritorio">Material de Escritório</a>
            <a id="a_almoxarifado" href="./index.php?p=material_almoxarifado">Material do Almoxarifado</a>
            <a id="a_servico_vascular" href="./index.php?p=material_servico_vascular">Material de Serviço Vascular</a>
            <a id="a_entrada" href="./index.php?p=material_entrada">Material de Entrada</a>
        </div>
    </div>
    <!-- Implementar depois...
    <div class="row justify-content-around">
        <div class="col-1">
            <a class="btn btn-danger" href="./index.php">Início</a>
        </div>
        <div class="col-1">
            <a class="btn btn-danger" onclick="window.history.go(-1); return false;">Voltar</a>
        </div>
        <div class="col-1">
            <a class="btn btn-danger" onclick="window.history.go(1); return false;">Avançar</a>
        </div> 
    -->
    <div class="col-1">
        <a href="./index.php"><img height="40px" width="130px" src="<?=('assets/img/MARCA PMVC_2017_COLOR.png')?>"></a>    
    </div>
        <!-- <a href="http://www.pmvc.ba.gov.br" target="_blank"><img height="40px" width="130px" src="<?=('assets/img/MARCA PMVC_2017_COLOR.png')?>"></a> -->
    <!--
         </div>
    <div class="row justify-content-around">
        <div class="row">
            <div class="col-sm-4">
                <a id="inicio" class="btn btn-danger" href="./index.php">Início</a>
            </div>
            <div class="col-sm-4">
                <?=@$liberaImpressao?>
            </div>
            <div class="col-sm-4">
                <input action="action" class="btn btn-danger" onclick="window.history.go(-1); return false;" type="button" value="Voltar" />
            </div>
        </div> 
    </div>
    -->
</nav>
<div id="conteudo">
    <?=@$setTitulo?>
    <?=@$liberaConteudo?>
</div>
</body>
</html>
