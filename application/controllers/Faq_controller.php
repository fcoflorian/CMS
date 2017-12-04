<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Faq_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index($id = null){
		$data['faqs'] = $this->Faq_model->cargarFaqs();
		
		$this->load->view('vista/faq_view', $data);
	}

	public function guardarFaq($id = null){
		if($_POST){
			if($id == null){
				$guardar = $this->Faq_model->guardarFaq($_POST);
				if(count($guardar) > 0){
					$data['faq'] = $guardar[0];
					$data['error'] = $guardar[1];
				}
			}else{
				$this->editarFaq($id);
			}
		}else{
			$data['faq'] = $this->Faq_model->cargarUnaFaq($id);
		}

		$this->load->view('vista/admin/faq', isset($data)?$data:'');
	}

	public function editarFaq($id = null){
		if($id != null){
			$editar = $this->Faq_model->editarFaq($id, $_POST);
			if(count($editar) > 0){
				return $editar;
			}
		}
	}

	public function borrarFaq($id = null){
		if($id != null){
			$this->Faq_model->borrarFaq($id);
			redirect('Faq_controller/index');
		}
	}
}