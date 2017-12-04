<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Eventos_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = null){
		$data['eventos'] = $this->Eventos_model->cargarEventos();
		
		$this->load->view('vista/eventos_view', $data);
	}

	public function guardarEvento($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Eventos_model->guardarEvento($_POST);
				if(count($guardar) > 0){
					$data['evento'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarEvento($id);
			}
		}else{
			$data['evento'] = $this->Eventos_model->cargarUnEvento($id);
		}

		$this->load->view('vista/admin/eventos', $data);
	}

	public function editarEvento($id = null){
		if($id != null){
			$editar = $this->Eventos_model->editarEvento($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}

	public function borrarEvento($id = null){
		if($id != null){
			$this->Eventos_model->borrarEvento($id);
			redirect('Eventos_controller/index');
		}
	}

	public function asistirAEvento($id = null){
		if($id != null){
			if($this->Eventos_model->asistirAEvento($id)){
				redirect('Eventos_controller/verEvento/'.$id);
			}
		}
	}

	public function desasistirAEvento($id = null){
		if($id != null){
			if($this->Eventos_model->desasistirAEvento($id)){
				redirect('Eventos_controller/verEvento/'.$id);
			}
		}
	}

	public function verEvento($id = null){
		if($id != null){
			$evento = $this->Eventos_model->cargarUnEvento($id);
			$data['evento'] = $evento[0];
			$data['asistencia'] = $evento[1];
			$data['miembros'] = $this->Eventos_model->cargarMiembrosEvento($id);

			$this->load->view('vista/ver_evento_view', $data);
		}
	}
}