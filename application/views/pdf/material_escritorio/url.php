<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
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
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEscritorio">
            Consultar
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalEscritorio" tabindex="-1" role="dialog" aria-labelledby="modalEscritorioLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEscritorioLabel"><?=@$tituloModal?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <?=@$this->load->view('pdf/material_escritorio/body', '', TRUE)?>
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