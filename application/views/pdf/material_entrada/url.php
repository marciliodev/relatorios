<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<!-- <body onLoad="$('#modalInfo').modal('show');"> -->
    <!-- Modal Inicial -->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    <h5 class="modal-title" id="modalInfoLabel">Aviso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   Para realizar a busca do relatório é necessário informar qual a <b>data inicial</b> e <b>data final</b> do período desejado.
                </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Fechar</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <form class="form-horizontal" method="post" id="myForm">
            <div class="form-group">
                <label class="col-sm-2 control-label"><b>Período:</b></label>
                <div class="col-sm-3">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" name="dtInicial" id="datainicial" placeholder="Data inicial" required>
                        <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" name="dtFinal" id="dataFinal" placeholder="Data final" required>
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    <br>
                    <!-- Button trigger modal -->
                    <?=@$impressaoPDF?>
        </form> <!-- Fim do Form -->
        <p>
        <h3>Resultados:</h3>
        <?=@$this->load->view('pdf/material_entrada/body', '', TRUE)?>
    </div> <!-- Fim do Container-->
</body>
</html>