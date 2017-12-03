<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Contacto_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = null){
		$data['mensajes'] = $this->Contacto_model->cargarMensajes();
		
		$this->load->view('vista/admin/contacto', $data);
	}

	public function enviarMensaje($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Contacto_model->guardarMensaje($_POST);
				if(count($guardar) > 0){
					$data['mensaje'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarMensaje($id);
			}
		}else{
			$data['mensaje'] = $this->Contacto_model->cargarUnMensaje($id);
		}

		$this->load->view('vista/contacto_view', $data);
	}

	public function editarMensaje($id = null){
		if($id != null){
			$editar = $this->Contacto_model->editarMensaje($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}

	public function borrarMensaje($id = null){
		if($id != null){
			$this->Contacto_model->borrarMensaje($id);
			redirect('Contacto_controller/index');
		}
	}
}