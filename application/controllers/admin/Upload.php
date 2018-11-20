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
        $dados['subtitulo'] = 'Documentos';

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
            $arquivo = $this->input->post('txt-arquivo');
            $descricao = $this->input->post('txt-descricao');
            $download = $this->input->post('txt-download');

            if($this->modelupload->adicionar($nome, $colegiado, $tipo, $arquivo, $descricao, $download)){
                redirect(base_url('admin/Upload'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function remover($id)
    {
        if($this->modelupload->remover($id)){
            redirect(base_url('admin/Upload'));
        }
        else{
            echo "Houve um erro no sistema!";
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
            $arquivo = $this->input->post('txt-arquivo');
            $descricao = $this->input->post('txt-descricao');
            $download = $this->input->post('txt-download');


            if($this->modelupload->alterar($id, $nome, $colegiado, $tipo, $arquivo, $descricao, $download)){
                redirect(base_url('admin/upload'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

}


?>
