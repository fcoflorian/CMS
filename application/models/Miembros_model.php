<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miembros_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function cargarMiembros(){
		$query = $this->db->get('miembros');
		return $query->result_array();
	}

	public function cargarUnMiembro($id = null){
		if($id != null){
			$query = $this->db->get_where('miembros', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarMiembro($miembro){
		$query = $this->db->get_where('miembros', array('cedula' => $miembro['cedula']));
		if($query->row_array()){
			return array(false, 'Cedula ya registrada', $miembro);
		}else{
			if($miembro['cedula'] != null && $miembro['nombre'] != null && $miembro['apellido'] != null && $miembro['telefono'] != null && $miembro['correo'] != null && $miembro['celular'] != null && $miembro['direccion'] != null && $miembro['latitud'] != null && $miembro['longitud'] != null){
				if($this->db->insert('miembros', $miembro)){
					return array(true);
				}else{
					return array(false, 'Error interno, intentelo de nuevo', $miembro);
				}
			} else{
				return array(false, 'Todos los campos son obligatorios', $miembro);
			}
		}
	}

	public function iniciarSesion($cedula){
		$query = $this->db->get_where('miembros', array('cedula' => $cedula['cedula']));
		if($query->row_array()){
			$session = array(
				'id' => $query->row_array()['id'],
				'cedula' => $query->row_array()['cedula'],
				'nombre' => $query->row_array()['nombre'],
				'apellido' => $query->row_array()['apellido'],
				'telefono' => $query->row_array()['telefono'],
				'correo' => $query->row_array()['correo'],
				'celular' => $query->row_array()['celular'],
				'direccion' => $query->row_array()['direccion'],
				'latitud' => $query->row_array()['latitud'],
				'longitud' => $query->row_array()['longitud']
			);

			$this->session->set_userdata($session);

			return true;
		}else{
			return false;
		}
	}
}