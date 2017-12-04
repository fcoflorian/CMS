<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Miembros_model extends CI_Model {
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
			$miembro['foto'] = $this->guardarImagen('foto');
			if($miembro['cedula'] != null && $miembro['nombre'] != null && $miembro['apellido'] != null && $miembro['telefono'] != null && $miembro['correo'] != null && $miembro['celular'] != null && $miembro['direccion'] != null && $miembro['latitud'] != null && $miembro['longitud'] != null && $miembro['foto'] != null){
				if($this->db->insert('miembros', $miembro)){
					$query = $this->db->get_where('miembros', array('cedula' => $miembro['cedula']));
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
							'longitud' => $query->row_array()['longitud'],
							'foto' => $query->row_array()['foto'],
							'admin' => $query->row_array()['admin']
						);

						$this->session->set_userdata($session);

						return array(true);
					}else{
						return array(false);
					}
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
				'longitud' => $query->row_array()['longitud'],
				'foto' => $query->row_array()['foto'],
				'admin' => $query->row_array()['admin']
			);

			$this->session->set_userdata($session);

			return true;
		}else{
			return false;
		}
	}

	public function hacerAdmin($id = null){
		if($id != null){
			$this->db->where('id', $id);
			if($this->db->update('miembros', array('admin' => 'admin'))){
				return true;
			} else {
				return false;
			}
		}
	}

	public function exportarMiembros(){
		$query = $this->db->get('miembros');
		$result = $query->result_array();
		if($result){
			$file = fopen('miembros.csv', 'w');
			foreach($result as $miembro){
				$miembro['id'] = "Id: ".$miembro['id'];
				$miembro['cedula'] = "Cedula: ".$miembro['cedula'];
				$miembro['nombre'] = "Nombre: ".$miembro['nombre'];
				$miembro['apellido'] = "Apellido: ".$miembro['apellido'];
				$miembro['telefono'] = "Telefono: ".$miembro['telefono'];
				$miembro['correo'] = "Correo: ".$miembro['correo'];
				$miembro['celular'] = "Celular: ".$miembro['celular'];
				$miembro['direccion'] = "Direccion: ".$miembro['direccion'];
				$miembro['latitud'] = "Latitud: ".$miembro['latitud'];
				$miembro['longitud'] = "Longitud: ".$miembro['longitud'];
				$miembro['foto'] = "Foto: ".$miembro['foto'];
				$miembro['admin'] = "Admin: ".$miembro['admin'];

				fputcsv($file, $miembro);
			}
			fclose($file);
		}
	}
}