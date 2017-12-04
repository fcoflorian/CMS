<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Galeria_model');
		$this->load->model('Index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = null){
		$data['fotos'] = $this->Galeria_model->cargarFotos();

		$data['parametros'] = $this->Index_model->cargarParametros();
		
		$this->load->view('vista/galeria_view', $data);
	}

	public function guardarFoto($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Galeria_model->guardarFoto($_POST);
				if(count($guardar) > 0){
					$data['foto'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarFoto($id);
			}
		}else{
			$data['foto'] = $this->Galeria_model->cargarUnaFoto($id);
		}
		$data['parametros'] = $this->Index_model->cargarParametros();

		$this->load->view('vista/admin/galeria', isset($data)?$data:'');
	}

	public function editarFoto($id = null){
		if($id != null){
			$editar = $this->Galeria_model->editarFoto($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}

	public function borrarFoto($id = null){
		if($id != null){
			$this->Galeria_model->borrarFoto($id);
			redirect('Galeria_controller/index');
		}
	}
}