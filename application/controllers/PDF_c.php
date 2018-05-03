<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PDF_c extends CI_Controller {

    private $itens = 0;
    private $data = null;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pdf');
	}

	public function index()
	{
        $data = date('d/m/Y');
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_escritorio/header', [], TRUE);
        $html = $this->load->view('pdf/material_escritorio/body', $dados, TRUE);
        //$footer = $this->load->view('pdf/material_escritorio/footer_material_escritorio', [], TRUE);

        set_time_limit(300); //seta o tempo limite de resposta para 
        ini_set("memory_limit", "600M"); //seta a quantidade de memória que pode ser usada pelo servidor
        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => '/tmp', 
            'setAutoTopMargin' => 'stretch', 
            'setAutoBottomMargin' => 'stretch',
            'autoMarginPadding' => -4,
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_bottom' => 10,
            'margin_header' => 0,
            'margin_footer' => 5,
            'orientation' => 'L', 
            'default_font' => 'arial'
        ]);
        $mpdf->SetTitle('Relatório de Materiais de Escritório');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio_Material_Escritório.pdf', I);
    }
}