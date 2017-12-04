<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index(){
		$data['noticias'] = $this->Index_model->cargarUltimas5Noticias();
		$data['eventos'] = $this->Index_model->cargarEventos();
		$data['clasificados'] = $this->Index_model->cargarUltimos5Anuncios();

		$data['parametros'] = $this->Index_model->cargarParametros();
		
		$this->load->view('vista/index_view', $data);
	}

	public function configurarParametros(){
		$data['parametros'] = $this->Index_model->cargarParametros();

		$this->load->view('vista/admin/parametros', $data);
	}

	public function guardarParametros($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Index_model->guardarParametros($_POST);
				if(count($guardar) > 0){
					$data['parametros'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarParametros($id);
			}
		}else{
			$data['parametros'] = $this->Index_model->cargarParametros();
		}

		$this->load->view('vista/admin/parametros', isset($data)?$data:'');
	}

	public function editarParametros($id = null){
		if($id != null){
			$editar = $this->Index_model->editarParametros($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}
}
