<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
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
                </div> <!-- Fim do Modal -->
                </form> <!-- Fim do Form -->
                </div>
            </div>
            <?=@$this->load->view('pdf/material_entrada/body', '', TRUE)?>
    </div> <!-- Fim do Container-->
</body>
</html>