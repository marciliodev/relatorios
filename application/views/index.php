<!DOCTYPE html>
<html lang="en">
<head>
  <title>Relatórios do Almoxarifado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Relatórios Almoxarifado</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
  </div>
</nav>

<div class="row">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action list-group-item-info" id="escritorio" data-toggle="list" href="#material_escritorio" role="tab" aria-controls="material_escritorio">Material de Escritório</a>
      <a class="list-group-item list-group-item-action list-group-item-info" id="almoxarifado" data-toggle="list" href="#material_almoxarifado" role="tab" aria-controls="material_almoxarifado">Material do Almoxarifado</a>
      <a class="list-group-item list-group-item-action list-group-item-info" id="servico_vascular" data-toggle="list" href="#material_servico_vascular" role="tab" aria-controls="material_servico_vascular">Material de Serviço Vascular</a>
      <a class="list-group-item list-group-item-action list-group-item-info" id="entrada" data-toggle="list" href="#material_entrada" role="tab" aria-controls="material_entrada">Material de Entrada</a>
    </div>
    
      <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="material_escritorio" role="tabpanel" aria-labelledby="material_escritorio">
      <input class="btn btn-primary" type="submit" value="Imprimir" name="imprimir">
      <?=$escritorio?>
      </div>

      <div class="tab-pane fade" id="material_almoxarifado" role="tabpanel" aria-labelledby="material_almoxarifado">
        <?=$almoxarifado?>
        </div>
      <div class="tab-pane fade" id="material_servico_vascular" role="tabpanel" aria-labelledby="material_servico_vascular">
        <?=$servico_vascular?>
      </div>

      <div class="tab-pane fade" id="material_entrada" role="tabpanel" aria-labelledby="material_entrada">
        <?=$entrada?></div>
    </div>
</div>
</body>
</html>
