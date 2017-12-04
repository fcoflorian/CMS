<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clasificados_model extends CI_Model {
	public function __construct(){
		$this->load->database();
	}

	public function guardarImagen($nombreCampo){
		$target_dir = "imagenes/";
		$target_file = $target_dir . basename($_FILES[$nombreCampo]["name"]);

		if($_FILES[$nombreCampo]['name']){
			$nombreImagen = basename($_FILES[$nombreCampo]['name']);
		}else{
			$nombreImagen = null;
		}
		move_uploaded_file($_FILES[$nombreCampo]["tmp_name"], $target_file);

		return $nombreImagen;
	}

	public function cargarClasificados(){
		$query = $this->db->get('clasificados');
		return $query->result_array();
	}

	public function cargarUnClasificado($id = null){
		if($id != null){
			$query = $this->db->get_where('clasificados', array('id' => $id));
			return $query->row_array();
		}
	}

	public function guardarClasificado($clasificado){
		$clasificado['imagen'] = $this->guardarImagen('imagen');
		$clasificado['fecha'] = date('Y-m-d h:i:s');
		$clasificado['id_usuario'] = $this->session->userdata('id');
		if($clasificado['titulo'] != null && $clasificado['descripcion'] != null && $clasificado['imagen'] != null){
			if($this->db->insert('clasificados', $clasificado)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($clasificado, 'Todos los campos son obligatorios');
		}
	}

	public function editarClasificado($id = null, $clasificado){
		if($id != null){
			if($clasificado['titulo'] != null && $clasificado['descripcion'] != null){
				$nombreImagen = $this->guardarImagen('imagen');
				if($nombreImagen != null){
					$clasificado['imagen'] = $nombreImagen;
				}	
				$this->db->where('id', $id);
				if($this->db->update('clasificados', $clasificado)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($clasificado, 'Todos los campos son obligatorios');
			}
		}
	}

	public function borrarClasificado($id = null){
		if($id != null){
			return $this->db->delete('clasificados', array('id' => $id));
		}
	}
}