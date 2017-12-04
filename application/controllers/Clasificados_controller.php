<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clasificados_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Clasificados_model');
		$this->load->model('Index_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($paginaActual = 1, $id = null){
		$data['clasificados'] = $this->Clasificados_model->cargarClasificados();

		$data['numeroDePaginas'] = ceil(count($data['clasificados'])/10);
		$data['paginaActual'] = $paginaActual;

		$data['parametros'] = $this->Index_model->cargarParametros();
		
		$this->load->view('vista/clasificados_view', $data);
	}

	public function guardarClasificado($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Clasificados_model->guardarClasificado($_POST);
				if(count($guardar) > 0){
					$data['clasificado'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarClasificado($id);
			}
		}else{
			$data['clasificado'] = $this->Clasificados_model->cargarUnClasificado($id);
		}
		$data['parametros'] = $this->Index_model->cargarParametros();

		$this->load->view('vista/admin/clasificados', isset($data)?$data:'');
	}

	public function editarClasificado($id = null){
		if($id != null){
			$editar = $this->Clasificados_model->editarClasificado($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}

	public function borrarClasificado($id = null){
		if($id != null){
			$this->Clasificados_model->borrarClasificado($id);
			redirect('Clasificados_controller/index');
		}
	}
}