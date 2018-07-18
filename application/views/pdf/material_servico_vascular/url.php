<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body onLoad="$('#modalInfo').modal('show');">
<script src="<?=('assets/js/funcoes.js') ?>"></script>
    <!-- Modal Inicial -->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalInfoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalInfoLabel"> <img src="<?='assets/img/info.png'?>" height="17" width="17"/> Informação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-warning" role="alert">
                        <strong><img src="<?='assets/img/flag.png'?>" height="17" width="17"/> Atenção!</strong> Informe o período desejado na busca, com <b>data inicial</b> e uma <b>data final</b>.
                    </div>
                </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-secondary" data-dismiss="modal"><img src="<?='assets/img/logout.png'?>" height="17" width="17"/> Fechar</a>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
       
       
        <form class="" method="post" id="myForm" target="my-iframe" action="./index.php/pdf_entrada">
            <div class="form-group">
                <label class="col-sm-2 form-control-label"><b>Período:</b></label>
                <div class="col-sm-3">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control date" name="dtInicial" id="datainicial" placeholder="Data inicial" required>
                        <div class="input-group-addon">
                        <img src="<?='assets/img/calendario.png'?>" height="40" width="40"/>
                        </div>
                    </div>
                </div>
                <p></p>
                <div class="col-sm-3">
                        <div class="input-group date" data-provide="datepicker">
                            <input type="text" class="form-control date" name="dtFinal" id="dataFinal" placeholder="Data final" required>
                            <div class="input-group-addon">
                            <img src="<?='assets/img/calendario.png'?>" height="40" width="40"/>    
                            </div>
                        </div>
                    <br>                    <!-- Button trigger modal -->
                    <?=@$impressaoPDF?>
        </form> <!-- Fim do Form -->
    </div> <!-- Fim do Container-->
</body>
</html>