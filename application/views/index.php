<!DOCTYPE html>
<html lang="en">
<head>
  <title>Relatórios do Almoxarifado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <script src="<?=('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
  <script src="<?=('assets/js/popper.min.js') ?>"></script>
  <script src="<?=('assets/js/bootstrap-4.1.1.min.js') ?>"></script>
  <script src="<?=('assets/js/jquery-3.3.1.min.js') ?>"></script>
  <script src="<?=('assets/js/jquery.min.js') ?>"></script>
  <link rel="stylesheet" href="<?=('assets/css/bootstrap-4.1.1.min.css') ?>">

<script>
$(document).ready(function(){

    $("a").click(function(){
        
        var escritorio = "http://localhost/codempdf/index.php/pdf_escritorio";
        var almoxarifado = "http://localhost/codempdf/index.php/pdf_almoxarifado";
        var servico_vascular = "http://localhost/codempdf/index.php/pdf_servico_vascular";
        var entrada = "http://localhost/codempdf/index.php/pdf_entrada";
        
        var url  = window.location.href; 
        var absoluto = url.split("/")[url.split("/").length -1];
        //console.log(absoluto);

        if (absoluto == "index.php?p=material_escritorio") {
            
            $("#btnImp").attr("href", escritorio);
        }
        
        if (absoluto == "index.php?p=material_almoxarifado") {

             $("#btnImp").attr("href", almoxarifado);
        }
        
        if (absoluto == "index.php?p=material_servico_vascular") {

            $("#btnImp").attr("href", servico_vascular);
        }
        
        if (absoluto == "index.php?p=material_entrada") {

            $("#btnImp").attr("href", entrada);
        } 
        
        if (absoluto == "http://localhost/codempdf/") {

            $("#btnImp").attr("href", "#");
            $("#btnImp").toggleClass("disabled", true);
        }

        if (absoluto == "http://localhost/codempdf/index.php/") {

            $("#btnImp").attr("href", "#");
            $("#btnImp").toggleClass("disabled", true);
        }
    });

});
 
function dropdownMenu() {
    
    document.getElementById("myDropdown").classList.toggle("show");
  }

  function filterFunction() {
    
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}

</script>

<style>

.dropbtn {
    
    background-color: #00B2EE;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    
    background-color: #FF4500;
}

#myInput {
    
    border-box: box-sizing;
    background-image: url('assets/img/search.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    height: 35px;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {
    
    outline: 3px solid #ddd;
}

.dropdown {
    
    position: relative;
    display: inline-block;
}

.dropdown-content {
    
    display: none;
    position: absolute;
    background-color: #f6f6f6;
    min-width: 230px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {

    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {
    
    background-color: #ddd
}

.show {
    display:block;
}

#conteudo {

width:99%;
height:570px;
border:0px solid #CCC;
margin:5px;
}

#h1Escritorio {

    font-size: 22px;
}

</style>
</head>
<body>
<nav class="navbar-right navbar-expand-lg navbar navbar-dark bg-primary">  
    <div class="dropdown">
        <!--<button onclick="dropdownMenu()" class="dropbtn">Relatórios do Almoxarifado</button>-->
        <input type="text"  placeholder="Pesquisar... " onclick="dropdownMenu()" id="myInput" onkeyup="filterFunction()">
        <div id="myDropdown" class="dropdown-content">
            <a href="./index.php?p=material_escritorio">Material de Escritório</a>
            <a href="./index.php?p=material_almoxarifado">Material do Almoxarifado</a>
            <a href="./index.php?p=material_servico_vascular">Material de Serviço Vascular</a>
            <a href="./index.php?p=material_entrada">Material de Entrada</a>
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-4">
            <a id="btnImp" class="btn btn-danger enabled" href="#" role="button" target="_blank">Imprimir</a>
        </div>
        <div class="col-4">
            <input action="action" id="btnImp" class="btn btn-danger" onclick="window.history.go(-1); return false;" type="button" value="Voltar" />
        </div>
    </div>
</nav>
<div id="conteudo">
<?php
    @$valor = $_GET['p'];

    if ($valor == 'material_escritorio'){
?>
        <h1 id="h1Escritorio">Relatório de Escritório - <?=@$data?>.</h1>
<?php        
        @$this->load->view('pdf/material_escritorio/body', '', FALSE);
        //require_once 'escritorio.php';
    }
    if ($valor == 'material_almoxarifado'){
?>
        <h1 id="h1Escritorio">Relatório de Almoxarifado - <?=@$data?>.</h1>
<?php
        @$this->load->view('pdf/material_almoxarifado/body', '', fALSE);
        //require_once 'almoxarifado.php';
    }
    if ($valor == 'material_servico_vascular'){
?>
        <h1 id="h1Escritorio">Relatório de Serviço Vascular - <?=@$data?>.</h1>
<?php
        @$this->load->view('pdf/material_servico_vascular/body', '', FALSE);
        //require_once 'vascular.php';
    }
    if ($valor == 'material_entrada'){
?>
        <h1 id="h1Escritorio">Relatório de Entrada - <?=@$data?>.</h1>
<?php
        @$this->load->view('pdf/material_entrada/body', '', FALSE);
        //require_once 'entrada.php';
    }
?>
</div>
</body>
</html>
