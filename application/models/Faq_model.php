<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarFaqs(){
		$query = $this->db->get('faqs');
		return $query->result_array();
	}

	public function cargarUnaFaq($id = null){
		if($id != null){
			$query = $this->db->get_where('faqs', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarFaq($faq){
		if($faq['pregunta'] != null && $faq['respuesta'] != null){
			if($this->db->insert('faqs', $faq)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($faq, 'Todos los campos son obligatorios');
		}
	}

	public function editarFaq($id = null, $faq){
		if($id != null){
			if($faq['pregunta'] != null && $faq['respuesta'] != null){
				$this->db->where('id', $id);
				if($this->db->update('faqs', $faq)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($faq, 'Todos los campos son obligatorios');
			}
		}
	}

	public function borrarFaq($id = null){
		if($id != null){
			return $this->db->delete('faqs', array('id' => $id));
		}
	}
}