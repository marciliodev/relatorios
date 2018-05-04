<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PDF_c extends CI_Controller {

    private $itens = 0;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pdf');
	}

	public function index()
	{
        $dados = array (
            'escritorio' => $this->relacao_escritorio(),
            'almoxarifado' => $this->relacao_almoxarifado(),
            'servico_vascular' => $this->relacao_servico_vascular(),
            'entrada' => $this->relacao_entrada()
        );
        $this->load->view('index', $dados);
        //$this->load->view('comuns/body', [], TRUE);
        //$this->load->view('comuns/footer');

        //$this->relatorio_escritorio();
        //$this->relatorio_entrada();
        //$this->relatorio_escritorio();
        //$this->relatorio_servico_vascular();
    }

    public function relacao_escritorio()
    {
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        return $this->load->view('pdf/material_escritorio/body', $dados, TRUE);
    }

    public function relacao_almoxarifado()
    {
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        return $this->load->view('pdf/material_almoxarifado/body', $dados, TRUE);
    }

    public function relacao_servico_vascular()
    {
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        return $this->load->view('pdf/material_servico_vascular/body', $dados, TRUE);
    }

    public function relacao_entrada()
    {
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        return $this->load->view('pdf/material_entrada/body', $dados, TRUE);
    }

    public function relatorio_escritorio()
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
        return $mpdf->Output('Relatorio_Material_Escritório.pdf', I);
    }

    public function relatorio_almoxarifado()
    {
        $data = date('d/m/Y');
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_almoxarifado/header', [], TRUE);
        $html = $this->load->view('pdf/material_almoxarifado/body', $dados, TRUE);
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
        $mpdf->SetTitle('Relatório de Materiais do Almoxarifado');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        return $mpdf->Output('Relatorio_Material_Almoxarifado.pdf', I);
    }

    public function relatorio_servico_vascular()
    {
        $data = date('d/m/Y');
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_servico_vascular/header', [], TRUE);
        $html = $this->load->view('pdf/material_servico_vascular/body', $dados, TRUE);
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
        $mpdf->SetTitle('Relatório de Materiais de Serviço Vascular');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        return $mpdf->Output('Relatorio_Material_Serviço_Vascular.pdf', I);
    }

    public function relatorio_entrada()
    {
        $data = date('d/m/Y');
        $dados['dados'] = $this->pdf->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_entrada/header', [], TRUE);
        $html = $this->load->view('pdf/material_entrada/body', $dados, TRUE);
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
        $mpdf->SetTitle('Relatório de Materiais de Entrada');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        return $mpdf->Output('Relatorio_Material_Entrada.pdf', I);
    }
}