<!DOCTYPE html>
<html lang="en">
<head>
  <title>Relatórios do Almoxarifado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?=('assets/css/bootstrap-4.1.1.min.css') ?>">
  <link rel="stylesheet" href="<?=('assets/css/estilo.css') ?>">
  <script src="<?=('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
  <script src="<?=('assets/js/popper.min.js') ?>"></script>
  <script src="<?=('assets/js/bootstrap-4.1.1.min.js') ?>"></script>
  <script src="<?=('assets/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?=('assets/js/jquery.min.js') ?>"></script>
  <script src="<?=('assets/js/funcoes.js') ?>"></script>

</head>
<body>
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
    <div class="row justify-content-around">
            <a class="btn" href="./index.php"><img height="38px" width="45px" src="<?=('assets/img/home.png')?>"></a>
            <a class="btn" onclick="window.history.go(-1); return false;"><img height="38px" width="45px" src="<?=('assets/img/return.png')?>">
            <a class="btn" onclick="window.history.go(1); return false;"><img height="38px" width="45px" src="<?=('assets/img/next.png')?>"></a>
            <a href="http://www.pmvc.ba.gov.br" target="_blank"><img height="40px" width="130px" src="<?=('assets/img/MARCA PMVC_2017_COLOR.png')?>"></a>
    </div>
    <!--
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
