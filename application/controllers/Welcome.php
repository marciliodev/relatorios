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
		//Páginas do corpo do PDF.
		$html = [];
		$html[0] = $this->load->view('teste', [], TRUE);
		$footer = $this->load->view('footer_material_escritorio', [], TRUE);
		$header = $this->load->view('header_material_escritorio', [], TRUE);

		$mpdf = new \Mpdf\Mpdf();
        //var_dump($html);return;
        if ($footer == null) {
            foreach ($html as $page) {
                //var_dump($html);return;
                $mpdf->SetHTMLHeader($header);
                $mpdf->AddPage('', // L - landscape, P - portrait
                    '', '', //inicio da contagem do numero de páginas
                    '', '', 5, // margin left
                    5, // margin right
                    0, // margin top
                    0, // margin bottom
                    5, // margin header
                    5  // margin footer
                );
                $mpdf->WriteHTML($page);
            }
        } else {
            //var_dump($html);return;
            foreach ($html as $page) {
                $mpdf->SetHTMLHeader($header);
                $mpdf->AddPage('P');
//                $pdf->AddPage('P', '', "$this->contador_pag");
                $mpdf->SetHTMLFooter('<b>Página {PAGENO}</b>');
                $mpdf->WriteHTML($page);
//                $this->contador_pag += $pdf->page;
            }
        }
        $mpdf->setTitle($titulo);
        ob_end_clean(); //limpar objeto antes da geração do PDF
        $mpdf->Output();
	}

}
