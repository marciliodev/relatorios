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
        <div class="col-4">
        <a id="inicio" class="btn btn-danger" href="./index.php">Início</a>
        </div>
        <div class="col-4">
            <?=@$liberaImpressao?>
        </div>
        <div class="col-4">
            <input action="action" class="btn btn-danger" onclick="window.history.go(-1); return false;" type="button" value="Voltar" />
        </div>
    </div>
</nav>
<div id="conteudo">
    <?=@$liberaConteudo?>
</div>
</body>
</html>
