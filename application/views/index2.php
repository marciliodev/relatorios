<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>

<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Menu de Relatórios</a>
    <div class="dropdown-content">
      <a href="<?=$this->view('material_escritorio/body')?>">Material de Escritório</a>
      <a href="#material_almoxarifado">Material do Almoxarifado</a>
      <a href="#material_servico_vascular">Material de Serviço Vascular</a>
      <a href="#material_entrada">Material de Entrada</a>
    </div>
    <li><a href="#">Voltar</a></li>
  </li>
</ul>
</body>
</html>
