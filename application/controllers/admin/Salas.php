<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}
        $this->load->model('Salas_model','modelsalas'); // Acesso ao model.

	}

	public function index()
	{
        $this->load->library('table');
        $dados['salas'] = $this->modelsalas->listar_salas();

    	$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Salas';

    	$this->load->view('backend/template/html-header', $dados);

    	$this->load->view('backend/template/template');
        $this->load->view('backend/salas');

    	$this->load->view('backend/template/html-footer');
	}

	public function novo_arquivo($id, $arquivo){
        /*Exclusão do arquivo antigo*/
        $this->load->helper("file");
		$caminhoArquivo = './assets/arquivos/salas/'.$arquivo;

         if (!unlink($caminhoArquivo)){
             echo 'Não foi possível excluir o arquivo antigo';
         }

            $arquivo = $_FILES['arquivo'];
            $original_name = $_FILES['arquivo']['name'];
            $new_name = strtr(utf8_decode($original_name), utf8_decode(' âãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY__');
            $configuracao['upload_path'] = './assets/arquivos/salas';
            $configuracao['allowed_types'] = 'pdf';
            $configuracao['file_name'] = $new_name;
            $configuracao['overwrite'] = TRUE;
            $this->load->library('upload', $configuracao);
            $this->upload->overwrite = true;
            $this->upload->initialize($configuracao);
            if($this->upload->do_upload('arquivo')){
                if($this->modelsalas->nova_matriz($id, $new_name)){
                    redirect(base_url('admin/salas'));
                }
            }else{
                echo "Houve um erro no sistema!";
                echo $this->upload->display_errors();
            }
	}

	public function pagina_arquivo($id)
    {
        $this->load->library('table');
        $dados['salas'] = $this->modelsalas->listar_sala($id); // Traz os dados do model noticias_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Alocação de Salas';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_arquivo');

		$this->load->view('backend/template/html-footer');
    }



    public function inserir()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('txt-nome','Nome',
            'required|min_length[3]');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }
        else{
            $nome = $this->input->post('txt-nome');
            $arquivo = $_FILES['arquivo'];
			$original_name = $_FILES['arquivo']['name'];
			$new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY__');;
			$configuracao['upload_path'] = './assets/arquivos/salas/';
			$configuracao['allowed_types'] = 'pdf';
			$configuracao['file_name'] = $new_name;
			$this->load->library('upload', $configuracao);
			$this->upload->initialize($configuracao);

            if($this->upload->do_upload('arquivo')){
				if($this->modelsalas->adicionar($nome, $new_name)){
	                redirect(base_url('admin/salas'));
	            }
			}
            else{
                echo "Houve um erro no sistema!";
				echo $this->upload->display_errors();
            }
        }
    }

    public function remover($id, $arquivo){
        if($this->modelsalas->remover($id)){
			$filePath = './assets/arquivos/salas/'.$arquivo;
			unlink($filePath);
            redirect(base_url('admin/salas'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }
}
?>
