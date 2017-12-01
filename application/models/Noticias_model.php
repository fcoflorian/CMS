<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticias_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarNoticias(){
		$query = $this->db->get('noticias');
		return $query->result_array();
	}

	public function cargarUnaNoticia($id = null){
		if($id != null){
			$query = $this->db->get_where('noticias', array('id' => $id));
			return $query->row_array();
		}
	}

	public function cargarComentarios(){
		$query = $this->db->get('comentarios');
		return $query->result_array();
	}

	public function guardarComentario($comentario){
		if($comentario['comentario'] != null){
			return $this->db->insert('comentarios', $comentario);
		}
	}
}