<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}
        $this->load->model('Mapa_model','modelmapa'); // Acessoa ao model.
	}

	public function index()
	{
        $this->load->library('table');
        $dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Mapas do iceb';

		$dados['mapas'] = $this->modelmapa->listar_mapas();

    	$this->load->view('backend/template/html-header', $dados);

    	$this->load->view('backend/template/template');
        $this->load->view('backend/mapa');

    	$this->load->view('backend/template/html-footer');
	}

	// public function novo_arquivo($id, $arquivo){
    //     /*Exclusão do arquivo antigo*/
    //     $this->load->helper("file");
	//
    //         $arquivo = $_FILES['arquivo'];
    //         $original_name = $_FILES['arquivo']['name'];
    //         $new_name = strtr(utf8_decode($original_name), utf8_decode('âãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY');
    //         $configuracao['upload_path'] = './assets/arquivos/mapas';
    //         $configuracao['allowed_types'] = 'pdf';
    //         $configuracao['file_name'] = $new_name;
    //         $configuracao['overwrite'] = TRUE;
    //         $this->load->library('upload', $configuracao);
    //         $this->upload->overwrite = true;
    //         $this->upload->initialize($configuracao);
    //         if($this->upload->do_upload('arquivo')){
    //             if($this->modelmapa->nova_matriz($id, $new_name)){
    //                 redirect(base_url('admin/mapas'));
    //             }
    //         }else{
    //             echo "Houve um erro no sistema!";
    //             echo $this->upload->display_errors();
    //         }
	// }

	public function pagina_arquivo($id)
    {
        $this->load->library('table');
        $dados['mapas'] = $this->modelmapa->listar_mapa($id); // Traz os dados do model noticias_model.

		$dados['titulo']= 'Painel Administrativo';
        $dados['subtitulo'] = 'Alocação de mapas';

		$this->load->view('backend/template/html-header', $dados);

		$this->load->view('backend/template/template');
        $this->load->view('backend/alterar_mapa');

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
            $arquivo = $_FILES['mapa'];
			$original_name = $_FILES['mapa']['name'];
			$new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY__');;
			$configuracao['upload_path'] = './assets/arquivos/mapas/';
			$configuracao['allowed_types'] = 'pdf';
			$configuracao['file_name'] = $new_name;
		    $configuracao['overwrite'] = TRUE;
			$this->load->library('upload', $configuracao);
			$this->upload->initialize($configuracao);

            if($this->upload->do_upload('mapa')){
				if($this->modelmapa->adicionar($nome, $new_name)){
	                redirect(base_url('admin/mapa'));
	            }
			}
            else{
                echo "Houve um erro no sistema!";
				echo $this->upload->display_errors();
            }
        }
    }

    public function alterar_mapa($id, $arquivo){
       /*Exclusão do arquivo antigo*/
        $this->load->helper("file");
       $caminhoArquivo = './assets/arquivos/mapas/'.$arquivo;

        if (!unlink($caminhoArquivo)){
            echo 'Não foi possível excluir o arquivo antigo';
        }
        else
        {
            $arquivo = $_FILES['mapa'];
            $original_name = $_FILES['mapa']['name'];
            $new_name = strtr(utf8_decode($original_name), utf8_decode(' àáâãäçèéêëìíîïñòóôõöùúûüýÿÀÁÂÃÄÇÈÉÊËÌÍÎÏÑÒÓÔÕÖÙÚÛÜÝ()'), '_aaaaaceeeeiiiinooooouuuuyyAAAAACEEEEIIIINOOOOOUUUUY__');
            $configuracao['upload_path'] = './assets/arquivos/mapas';
            $configuracao['allowed_types'] = 'pdf';
            $configuracao['file_name'] = $new_name;
            $configuracao['overwrite'] = TRUE;
            $this->load->library('upload', $configuracao);
            $this->upload->overwrite = true;
            $this->upload->initialize($configuracao);
            if($this->upload->do_upload('mapa')){
				if($this->modelmapa->nova_matriz($id, $new_name)){
					redirect(base_url('admin/mapa'));
				}
            }else{
                echo "Houve um erro no sistema!";
                echo $this->upload->display_errors();
            }
        }
    }

	public function remover($id, $arquivo){
        if($this->modelmapa->remover($id)){
			$filePath = './assets/arquivos/mapas/'.$arquivo;
			unlink($filePath);
            redirect(base_url('admin/mapa'));
        }
        else{
            echo "Houve um erro no sistema!";
        }
    }
}
?>
