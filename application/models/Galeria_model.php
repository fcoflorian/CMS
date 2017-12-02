<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarFotos(){
		$query = $this->db->get('fotos');
		return $query->result_array();
	}

	public function cargarUnaFoto($id = null){
		if($id != null){
			$query = $this->db->get_where('fotos', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarFoto($foto){
		if($foto['nombre'] != null && $foto['descripcion'] != null && $foto['foto'] != null){
			if($this->db->insert('fotos', $foto)){
				return true;
			}else{
				return false;
			}
		}
	}

	public function editarFoto($id = null, $foto){
		if($id != null){
			if($foto['nombre'] != null && $foto['descripcion'] != null){
				$this->db->where('id', $id);
				if($this->db->update('fotos', $foto)){
					return true;
				}else{
					return false;
				}
			}
		}
	}
}