<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

        $this->load->model('Upload_model','modelupload');
        $this->load->model('Colegiados_model','modelcole');
	}

	public function index(){
        $this->load->library('table');
        $dados['uploads'] = $this->modelupload->listar_uploads();
        $dados['colegiados'] = $this->modelcole->listar_colegiados();
		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Upload';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
        $this->load->view('backend/upload');
		$this->load->view('backend/template/html-footer');
	}

    public function inserir()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');
        $this->form_validation->set_rules('txt-colegiado','Colegiado');
        $this->form_validation->set_rules('txt-tipo','Tipo');
        $this->form_validation->set_rules('txt-arquivo','Arquivo');
        $this->form_validation->set_rules('txt-descricao','Descricao','required|min_length[10]');
        $this->form_validation->set_rules('txt-download','Download');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $nome = $this->input->post('txt-nome');
            $colegiado = $this->input->post('txt-colegiado');
            $tipo = $this->input->post('txt-tipo');

            $arquivo = $_FILES['txt-arquivo'];
                $original_name = $_FILES['txt-arquivo']['name'];
                $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
                $configuracao['upload_path'] = './assets/arquivos/colegiado/';
                $configuracao['allowed_types'] = 'rar|zip|docx|pdf';
                $configuracao['file_name'] = $new_name;
                $this->load->library('upload', $configuracao);
                $this->upload->initialize($configuracao);

            $descricao = $this->input->post('txt-descricao');
            $download = $this->input->post('txt-download');

            if($this->upload->do_upload('txt-arquivo')){
                if($this->modelupload->adicionar($nome, $colegiado, $tipo, $new_name, $descricao, $download)){
                redirect(base_url('admin/Upload'));
                }
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function remover($id, $arquivo)
    {
        $caminhoArquivo = './assets/arquivos/colegiado/'. $arquivo;
        if (!unlink($caminhoArquivo)){
            echo 'Não foi possível excluir o arquivo antigo';
        }
        if($this->modelupload->remover($id)){
            redirect(base_url('admin/Upload'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }

    public function pagina_upload($id)
    {
        $this->load->library('table');
        $dados['uploads'] = $this->modelupload->listar_upload($id); // Traz os dados do model noticias_model.
        $dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Arquivo';

        $this->load->view('backend/template/html-header', $dados);
        $this->load->view('backend/template/template');
        $this->load->view('backend/alterar_up');
        $this->load->view('backend/template/html-footer');
    }

    public function novo_arquivo($id, $arquivo){
        /*Exclusão do arquivo antigo*/
        $this->load->helper('file');

        $caminhoArquivo = './assets/arquivos/colegiado/'. $arquivo;

        $extensoes_permitidas = array('.rar','.zip','.docx','.pdf');
        // Faz a verificação da extensão do arquivo enviado
        $extensao = strrchr($_FILES['txt-arquivo']['name'], '.');

        if(in_array($extensao, $extensoes_permitidas) == true)
        {
            if (!unlink($caminhoArquivo)){
            echo 'Não foi possível excluir o arquivo antigo';
            }
            $arquivo = $_FILES['txt-arquivo'];
            $original_name = $_FILES['txt-arquivo']['name'];
           $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()@#$!%¨&*?+="[]{}-<>;^~§º¬°¢£³²¹ª|'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY___________________________________');;
            $configuracao['upload_path'] = './assets/arquivos/colegiado/';
            $configuracao['allowed_types'] = 'rar|zip|docx|pdf';
            $configuracao['file_name'] = $new_name;
            $configuracao['overwrite'] = TRUE;
            $this->load->library('upload', $configuracao);
            $this->upload->overwrite = true;
            $this->upload->initialize($configuracao);
            if($this->upload->do_upload('txt-arquivo')){
                if($this->modelupload->novo_arquivo($id, $new_name)){
                    redirect(base_url('admin/upload'));
                }
            }else{
                echo "Houve um erro no sistema!";
                echo $this->upload->display_errors();
            }
        }
        else{
            echo "Selecione apenas arquivos RAR, ZIP, DOCX e PDF !";
        }
    }

    public function pagina_alterar($id)
    {
        $this->load->library('table');
        $dados['uploads'] = $this->modelupload->listar_upload($id);
        $dados['colegiados'] = $this->modelcole->listar_colegiados();
		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Documentos';

		$this->load->view('backend/template/html-header', $dados);
		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_Upload');
		$this->load->view('backend/template/html-footer');
    }

    public function alterar($id)
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');
        $this->form_validation->set_rules('txt-colegiado','Colegiado');
        $this->form_validation->set_rules('txt-tipo','Tipo');
        $this->form_validation->set_rules('txt-descricao','Descricao','required|min_length[10]');
        $this->form_validation->set_rules('txt-download','Download');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $nome = $this->input->post('txt-nome');
            $colegiado = $this->input->post('txt-colegiado');
            $tipo = $this->input->post('txt-tipo');
            $descricao = $this->input->post('txt-descricao');
            $download = $this->input->post('txt-download');


            if($this->modelupload->alterar($id, $nome, $colegiado, $tipo, $descricao, $download)){
                redirect(base_url('admin/upload'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

}


?>
