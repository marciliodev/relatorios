<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Almoxarifado</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Relatórios<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Material de Escritório</a></li>
          <li><a href="#">Material do Almoxarifado</a></li>
          <li><a href="#">Material de Serviço Vascular</a></li>
          <li><a href="#">Material de Entrada</a></li>
        </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Relatórios do Almoxarifado</h3>
  <?= $this->load->view('welcome_message.php', [], TRUE);?>
</div>

</body>
</html>
