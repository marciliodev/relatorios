<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body onLoad="$('#modalInfo').modal('show');">

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
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <form class="form-horizontal">
            <div class="form-group">
                <label class="col-sm-2 control-label">Data Inicial:</label>
                <div class="col-sm-10">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control">
                        <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>

                <label class="col-sm-2 control-label">Data Final:</label>
                <div class="col-sm-10">
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control" id="dtFinal">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                </div>
            </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEntrada">
            Consultar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalEntrada" tabindex="-1" role="dialog" aria-labelledby="modalEntradaLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEntradaLabel"><?=@$tituloModal?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <?=@$this->load->view('pdf/material_entrada/body', '', TRUE)?>
                </div>
                    <div class="modal-footer">
                        <?=@$impressaoPDF?>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div> <!-- Fim do Container-->
</body>
</html>