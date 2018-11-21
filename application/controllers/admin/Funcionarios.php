<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

        $this->load->model('Funcionarios_model','modelfunc'); // Acessoa ao model.
        $this->load->model('Colegiados_model','modelcole'); // Acessoa ao model.

	}

	public function index()
	{

        $this->load->library('table');
        $dados['funcionarios'] = $this->modelfunc->listar_funcionarios(); // Traz os dados do model funcionarios_model.
        $dados['colegiados'] = $this->modelcole->listar_colegiados();

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Funcionários';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/funcionarios');

		$this->load->view('backend/template/html-footer');
	}

    public function inserir()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');        
        $this->form_validation->set_rules('txt-colegiado','Colegiado','required|min_length[1]');
        $this->form_validation->set_rules('txt-cargo','Cargo');
        $this->form_validation->set_rules('txt-membro','Membro');
        $this->form_validation->set_rules('txt-email','Email','required|min_length[3]');
        $this->form_validation->set_rules('txt-telefone','Telefone');
        $this->form_validation->set_rules('txt-lattes','Lattes');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $nome = $this->input->post('txt-nome');
            $colegiado = $this->input->post('txt-colegiado');
            $cargo = $this->input->post('txt-cargo');
            $membro = $this->input->post('txt-membro');
            $email = $this->input->post('txt-email');
            $telefone = $this->input->post('txt-telefone');
            $lattes = $this->input->post('txt-lattes');

            if($this->modelfunc->adicionar($nome, $colegiado, $cargo, $membro, $email, $telefone, $lattes)){
                redirect(base_url('admin/funcionarios'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

    public function remover($id)
    {
        if($this->modelfunc->remover($id)){
            redirect(base_url('admin/funcionarios'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }

    public function pagina_alterar($id)
    {
        $this->load->library('table');
        $dados['funcionarios'] = $this->modelfunc->listar_funcionario($id); // Traz os dados do model funcioanrios_model.
        $dados['colegiados'] = $this->modelcole->listar_colegiados();

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Funcionários';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_funcionarios');

		$this->load->view('backend/template/html-footer');
    }

    public function alterar($id)
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('txt-nome','Nome','required|min_length[3]');        
        $this->form_validation->set_rules('txt-colegiado','Colegiado','required|min_length[1]');
        $this->form_validation->set_rules('txt-cargo','Cargo');
        $this->form_validation->set_rules('txt-membro','Membro');
        $this->form_validation->set_rules('txt-email','Email','required|min_length[3]');
        $this->form_validation->set_rules('txt-telefone','Telefone');
        $this->form_validation->set_rules('txt-lattes','Lattes');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $nome = $this->input->post('txt-nome');
            $colegiado = $this->input->post('txt-colegiado');
            $cargo = $this->input->post('txt-cargo');
            $membro = $this->input->post('txt-membro');
            $email = $this->input->post('txt-email');
            $telefone = $this->input->post('txt-telefone');
            $lattes = $this->input->post('txt-lattes');


            if($this->modelfunc->alterar($id, $nome, $colegiado, $cargo, $membro, $email, $telefone, $lattes)){
                redirect(base_url('admin/funcionarios'));
            }
            else{
                echo "Houve um erro no sistema!";
            }
        }
    }

}


?>
