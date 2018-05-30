<?php
function imp_escritorio()
{   $this->load->controller('PDF_c');
    $dados['rel_escritorio'] = $this->relatorio_escritorio();
    $this->load->view('index2', $dados);
}
?>