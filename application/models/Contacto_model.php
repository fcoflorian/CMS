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

	public function guardarMensaje($mensaje){
		$mensaje['nombre'] = $this->session->userdata('nombre');
		$mensaje['correo'] = $this->session->userdata('correo');
		$mensaje['fecha'] = date('Y-m-d h:i:s');
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

	public function borrarMensaje($id = null){
		if($id != null){
			return $this->db->delete('mensajes', array('id' => $id));
		}
	}
}