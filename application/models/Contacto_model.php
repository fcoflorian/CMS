<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarMensajes(){
		$query = $this->db->get('mensajes');
		return $query->result_array();
	}

	public function cargarUnMensaje($id = null){
		if($id != null){
			$query = $this->db->get_where('mensajes', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarMensaje($mensaje){
		$mensaje['nombre'] = $this->session->userdata('nombre');
		$mensaje['correo'] = $this->session->userdata('correo');
		if($mensaje['mensaje'] != null){
			if($this->db->insert('mensajes', $mensaje)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($mensaje, 'Todos los campos son obligatorios');
		}
	}

	public function editarMensaje($id = null, $mensaje){
		if($id != null){
			if($mensaje['mensaje'] != null){
				$this->db->where('id', $id);
				if($this->db->update('mensajes', $mensaje)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($mensaje, 'Todos los campos son obligatorios');
			}
		}
	}

	public function borrarMensaje($id = null){
		if($id != null){
			return $this->db->delete('mensajes', array('id' => $id));
		}
	}
}