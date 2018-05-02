<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    private $itens = 0;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pdf');
	}

	public function index()
	{
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('header_material_escritorio', [], TRUE);
        $html = $this->load->view('html_material_escritorio', $dados, TRUE);

        $mpdf = new \Mpdf\Mpdf([
            'tempDir' => '/tmp', 
            'setAutoTopMargin' => 'stretch', 
            'setAutoBottomMargin' => 'stretch', 
            'autoMarginPadding' => -5, 
            'default_font' => 'arial'
        ]);
        $mpdf->SetTitle('Relatório de Materiais de Escritório');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}