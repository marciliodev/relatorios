<!DOCTYPE html>
<html lang="en">
<head>
  <title>Relatórios do Almoxarifado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>
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
  <script src="<?=('assets/js/jquery-3.3.1.slim.min.js') ?>"></script>
  <script src="<?=('assets/js/popper.min.js') ?>"></script>
  <script src="<?=('assets/js/bootstrap-4.1.1.min.js') ?>"></script>
  <link rel="stylesheet" href="<?=('assets/css/bootstrap-4.1.1.min.css') ?>">

  <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

#myInput {
    border-box: box-sizing;
    background-image: url('assets/img/search.png');
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

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

.dropdown a:hover {background-color: #ddd}

.show {display:block;}

#conteudo {
width:99%;
height:570px;
border:2px solid #CCC;
margin:5px;
 }
</style>

</head>
<body>
<nav class="navbar-right navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="dropdown">
  <button onclick="dropdownMenu()" class="dropbtn">Relatórios do Almoxarifado</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Procurar... " id="myInput" onkeyup="filterFunction()">
    <a href="#material_escritorio">Material de Escritório</a>
    <a href="#material_almoxarifado">Material do Almoxarifado</a>
    <a href="#material_servico_vascular">Material de Serviço Vascular</a>
    <a href="#material_entrada">Material de Exemplo</a>
    <a href="#material_entrada">Material de Exemplo</a>
    <a href="#material_entrada">Material de Exemplo</a>
    <a href="#material_entrada">Material de Exemplo</a>
    <a href="#material_entrada">Material de Exemplo</a>
    <a href="#material_entrada">Material de Exemplo</a>
  </div>
</div>
<!--
<div class="row">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action list-group-item-info" id="escritorio" data-toggle="list" href="#material_escritorio" role="tab" aria-controls="material_escritorio">Material de Escritório</a>
      <a class="list-group-item list-group-item-action list-group-item-info" id="almoxarifado" data-toggle="list" href="#material_almoxarifado" role="tab" aria-controls="material_almoxarifado">Material do Almoxarifado</a>
      <a class="list-group-item list-group-item-action list-group-item-info" id="servico_vascular" data-toggle="list" href="#material_servico_vascular" role="tab" aria-controls="material_servico_vascular">Material de Serviço Vascular</a>
      <a class="list-group-item list-group-item-action list-group-item-info" id="entrada" data-toggle="list" href="#material_entrada" role="tab" aria-controls="material_entrada">Material de Entrada</a>
    </div>
      <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="material_escritorio" role="tabpanel" aria-labelledby="material_escritorio">
      </div>
      <div class="tab-pane fade" id="material_almoxarifado" role="tabpanel" aria-labelledby="material_almoxarifado">
        </div>
      <div class="tab-pane fade" id="material_servico_vascular" role="tabpanel" aria-labelledby="material_servico_vascular">
      </div>
      <div class="tab-pane fade" id="material_entrada" role="tabpanel" aria-labelledby="material_entrada">
      </div>
    </div>
</div>
-->
</nav>
<div id="conteudo"></div>
</body>
</html>
