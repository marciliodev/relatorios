<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PDF_c extends CI_Controller {

    private $itens = 0;

	public function __construct()
	{
        
        parent::__construct();
		$this->load->model('almoxarifado');
	}

	public function index()
	{
        
        $dados = array (
            'setTitulo' => $this->setTitulo(),
            'liberaConteudo' => $this->liberaConteudo()
        );
        $this->load->view('index', $dados);
    }

    //CONTROLADORES DE CONTEÚDO 

    public function passaData() 
    {

        return date('d/m/Y');
    }

    public function setTitulo()
    {

        switch (@$_GET['p']) {
            case 'material_escritorio':
                return "<h1 class=\"h1Titulo\">Relatório de Material de Escritório - ".$this->passaData().".</h1>";
                break;
            case 'material_almoxarifado':
                return "<h1 class=\"h1Titulo\">Relatório de Material do Almoxarifado - ".$this->passaData().".</h1>";
                break;
            case 'material_servico_vascular':
                return "<h1 class=\"h1Titulo\">Relatório de Material de Serviço Vascular - ".$this->passaData().".</h1>";
                break;
            case 'material_entrada':
                return "<h1 class=\"h1Titulo\">Relatório de Material de Entrada - ".$this->passaData().".</h1>";
                break;
            case 'material_entrada_resultado':
                return "<h1 class=\"h1Titulo\">Resultados da Pesquisa (Entrada) - ".$this->passaData().".</h1>";
            default:
                return "";
                break;
        }
        
        /*
        if (isset($_GET['p']) == 'material_escritorio')            
            return "<h1 class=\"h1Titulo\">Relatório de Material de Escritório - ".$this->passaData().".</h1>";
            elseif (isset($_GET['p']) == 'material_almoxarifado')
                return "<h1 class=\"h1Titulo\">Relatório de Material do Almoxarifado - ".$this->passaData().".</h1>";
                elseif (isset($_GET['p']) == 'material_servico_vascular')
                    return "<h1 class=\"h1Titulo\">Relatório de Material de Serviço Vascular - ".$this->passaData().".</h1>";
                    elseif (isset($_GET['p']) == 'material_entrada')
                        return "<h1 class=\"h1Titulo\">Relatório de Material de Escritório - ".$this->passaData().".</h1>";
        else
            return " ";
            */
    }            
        
    public function liberaConteudo() //modificar estrutura como em relacao_escritorio_html();
    {
        
        switch (@$_GET['p']) {
            
            
            case 'material_escritorio':
                return $this->relacao_escritorio_html();
                break;
            case 'material_almoxarifado':
                return $this->relacao_almoxarifado_html();
                break;
            case 'material_servico_vascular':
                return $this->relacao_servico_vascular_html();
                break;
            case 'material_entrada':
                return $this->relacao_entrada_html();
                break;
            case 'material_entrada_resultados':
                return $this->modalEntrada();
            default:
                return $this->relacao_index();
                break;
        }
    }

    public function liberaImpressao() //modificar estrutura como em relacao_escritorio_html();
    {
        
        switch (@$_GET['p']) {
            case 'material_escritorio':
                return "<a class=\"btn btn-primary\" href=\"./index.php/pdf_escritorio\" target=\"_blank\">Gerar PDF</a>";
                break;
            case 'material_almoxarifado':
                return "<a class=\"btn btn-primary\" href=\"./index.php/pdf_almoxarifado\" target=\"_blank\">Gerar PDF</a>";
                break;
            case 'material_servico_vascular':
                return "<a class=\"btn btn-primary\" href=\"./index.php/pdf_servico_vascular\" target=\"_blank\">Gerar PDF</a>";
                break;
            case 'material_entrada':
                if (@$_POST['dtInicial'] == NULL || @$_POST['dtFinal'] == NULL) { 
                    $html = "";
                    $html .= "
                        <button class=\"btn btn-primary\" type=\"submit\">Buscar</button>
                        <p>
                        <h3>Resultados:</h3>
                        <iframe name=\"my-iframe\" width=\"1000px\" height=\"400px\" src=\"./index.php/pdf_entrada\"></iframe>
                    "; 
                    return $html;
                }
                break;
            default:
                return "";//implementar
                break;
        }
    }

    public function relacao_index()
    {
        
        $html = "";
        $html .= "
            <div class=\"divIndex\">
            <h1 class=\"h1TituloIndex\">Bem-Vindo ao Módulo de Relatórios do Almoxarifado!</h1>
            </div>
        ";
        return $html;
    }

    public function relacao_escritorio_html()//espelhar nas demais estrurutas também.
    {
        
        $dados = [

            'dados' => $this->almoxarifado->busca_produtos(),
            'tituloModal' => $this->setTitulo(),
            'impressaoPDF' => $this->liberaImpressao()
        ];

        /*
        //var_dump($var);return;
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        $dados['tituloModal'] = $this->setTitulo();
        $dados['impressaoPDF'] = $this->liberaImpressao();
        //$dados['bodyModal'] = $this->load->view('pdf/material_escritorio/body', '', FALSE);
        */

        return $this->load->view('pdf/material_escritorio/url', $dados, TRUE);
    }

    public function relacao_almoxarifado_html()//espelhar nas demais estrurutas também.
    {

        $dados = [

            'dados' => $this->almoxarifado->busca_produtos(),
            'tituloModal' => $this->setTitulo(),
            'impressaoPDF' => $this->liberaImpressao()
        ];
        
        /*
        //var_dump($var);return;
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        $dados['tituloModal'] = $this->setTitulo();
        $dados['impressaoPDF'] = $this->liberaImpressao();
        //$dados['bodyModal'] = $this->load->view('pdf/material_escritorio/body', '', FALSE);
        */

        return $this->load->view('pdf/material_almoxarifado/url', $dados, TRUE);
    }

    public function relacao_servico_vascular_html()//espelhar nas demais estrurutas também.
    {

        $dados = [ 

            'dados' => $this->almoxarifado->busca_produtos(),
            'tituloModal' => $this->setTitulo(),
            'impressaoPDF' => $this->liberaImpressao(),
        ];

        /*    
        //var_dump($var);return;
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        $dados['tituloModal'] = $this->setTitulo();
        $dados['impressaoPDF'] = $this->liberaImpressao();
        //$dados['bodyModal'] = $this->load->view('pdf/material_escritorio/body', '', FALSE);
        */

        return $this->load->view('pdf/material_servico_vascular/url', $dados, TRUE);
    }

    public function relacao_entrada_html()//espelhar nas demais estrurutas também.
    {
        
        $dados = [

            //'dados' => $this->almoxarifado->busca_produtos(),
            'tituloModal' => $this->setTitulo(),
            'impressaoPDF' => $this->liberaImpressao(),
            //'resultadoBusca' => var_dump(@$_POST["dtInicial"], @$_POST["dtFinal"]),
            'dados' => $this->almoxarifado->busca_produtos_data(),
        ];
        
        /*
        //Verifica se já existe algum valor na variável de POST e se possuir apaga o registo
        if(isset($_POST['dtInicial'])) {

            unset($_POST['dtInicial']);
        }

        //var_dump($var);return;
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        $dados['tituloModal'] = $this->setTitulo();
        $dados['impressaoPDF'] = $this->liberaImpressao();
        $dados['resultadoBusca'] = $this->almoxarifado->busca_produtos_data(@$_POST['dtInicial']);
        $dados['modalResultado'] = var_dump($_POST['dtInicial']);
        //$dados['bodyModal'] = $this->load->view('pdf/material_escritorio/body', '', FALSE);
        */
        return $this->load->view('pdf/material_entrada/url', $dados, TRUE);
    }

    //CONTROLE DOS CORPOS DA BIBLIOTECA MPDF 
    public function relatorio_escritorio()
    {
        
        $data = date('d/m/Y');
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_escritorio/header', [], TRUE);
        $html = $this->load->view('pdf/material_escritorio/body', $dados, TRUE);
        //$footer = $this->load->view('pdf/material_escritorio/footer_material_escritorio', [], TRUE);
        set_time_limit(300); //seta o tempo limite de resposta para 
        ini_set("memory_limit", "600M"); //seta a quantidade de memória que pode ser usada pelo servidor
        $mpdf = new \Mpdf\Mpdf([
            //'tempDir' => '/tmp', no windows precisa ser comentado
            'setAutoTopMargin' => 'stretch', 
            'setAutoBottomMargin' => 'stretch',
            'autoMarginPadding' => -10, // estava -4
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_bottom' => 10,
            'margin_header' => 0,
            'margin_footer' => 5,
            'format' => 'A4', //implementação depois última atualização.
            'orientation' => 'P', //mudou depois da última atualização.
            'default_font' => 'arial'
        ]);
        $mpdf->SetTitle('Relatório de Materiais de Escritório');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio_Material_Escritório.pdf', I);
    }

    public function relatorio_almoxarifado()
    {
        
        $data = date('d/m/Y');
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_almoxarifado/header', [], TRUE);
        $html = $this->load->view('pdf/material_almoxarifado/body', $dados, TRUE);
        //$footer = $this->load->view('pdf/material_escritorio/footer_material_escritorio', [], TRUE);
        set_time_limit(300); //seta o tempo limite de resposta para 
        ini_set("memory_limit", "600M"); //seta a quantidade de memória que pode ser usada pelo servidor
        $mpdf = new \Mpdf\Mpdf([
            //'tempDir' => '/tmp', no windows precisa ser comentado
            'setAutoTopMargin' => 'stretch', 
            'setAutoBottomMargin' => 'stretch',
            'autoMarginPadding' => -10, // estava -4
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_bottom' => 10,
            'margin_header' => 0,
            'margin_footer' => 5,
            'format' => 'A4', //implementação depois última atualização.
            'orientation' => 'P', //mudou depois da última atualização.
            'default_font' => 'arial'
        ]);
        $mpdf->SetTitle('Relatório de Materiais do Almoxarifado');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio_Material_Almoxarifado.pdf', I);
    }

    public function relatorio_servico_vascular()
    {
       
        $data = date('d/m/Y');
        $dados['dados'] = $this->almoxarifado->busca_produtos();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_servico_vascular/header', [], TRUE);
        $html = $this->load->view('pdf/material_servico_vascular/body', $dados, TRUE);
        //$footer = $this->load->view('pdf/material_escritorio/footer_material_escritorio', [], TRUE);
        set_time_limit(300); //seta o tempo limite de resposta para 
        ini_set("memory_limit", "600M"); //seta a quantidade de memória que pode ser usada pelo servidor
        $mpdf = new \Mpdf\Mpdf([
            //'tempDir' => '/tmp', no windows precisa ser comentado
            'setAutoTopMargin' => 'stretch', 
            'setAutoBottomMargin' => 'stretch',
            'autoMarginPadding' => -10, // estava -4
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_bottom' => 10,
            'margin_header' => 0,
            'margin_footer' => 5,
            'format' => 'A4', //implementação depois última atualização.
            'orientation' => 'P', //mudou depois da última atualização. 
            'default_font' => 'arial'
        ]);
        $mpdf->SetTitle('Relatório de Materiais de Serviço Vascular');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio_Material_Serviço_Vascular.pdf', I);
    }

    public function relatorio_entrada()
    {
        
        $data = date('d/m/Y');
        $dados['dados'] = $this->almoxarifado->busca_produtos_data();
        //var_dump($var);return;
        $header = $this->load->view('pdf/material_entrada/header', [], TRUE);
        $html = $this->load->view('pdf/material_entrada/body', $dados, TRUE);
        //$html = $this->load->view('pdf/material_entrada/body', $dados, TRUE);
        //$footer = $this->load->view('pdf/material_escritorio/footer_material_escritorio', [], TRUE);
        set_time_limit(300); //seta o tempo limite de resposta para 
        ini_set("memory_limit", "600M"); //seta a quantidade de memória que pode ser usada pelo servidor
        $mpdf = new \Mpdf\Mpdf([
            //'tempDir' => '/tmp', no windows precisa ser comentado
            'setAutoTopMargin' => 'stretch', 
            'setAutoBottomMargin' => 'stretch',
            'autoMarginPadding' => -10, // estava -4
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_bottom' => 10,
            'margin_header' => 0,
            'margin_footer' => 5,
            'format' => 'A4', //implementação depois última atualização.
            'orientation' => 'P', //mudou depois da última atualização.
            'default_font' => 'arial'
        ]);
        $mpdf->SetTitle('Relatório de Materiais de Entrada');
        $mpdf->SetHTMLHeader($header);
        $mpdf->SetHTMLFooter('<b>Página {PAGENO}</br>');
        $mpdf->WriteHTML($html);
        $mpdf->Output('Relatorio_Material_Entrada.pdf', I);
    }
}