<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index_model extends CI_Model {
	public function __construct(){
		$this->con();
	}

	public function config($server, $user, $pass, $db = null){
		return array(
			'hostname' => $server,
			'username' => $user,
			'password' => $pass,
			'database' => $db,
			'dbdriver' => 'mysqli',
			'dbprefix' => '',
			'pconnect' => FALSE,
			'db_debug' => FALSE,
			'cache_on' => FALSE,
			'cachedir' => '',
			'char_set' => 'utf8',
			'dbcollat' => 'utf8_general_ci'
		);
	}

	public function con(){
		$dbconfig = $this->config(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		@$this->load->database($dbconfig);

		if(!@$this->db->initialize()){
			$this->db->close();
			return TRUE;
		}

		return $this->load->database($dbconfig);	
	}

	public function setDb(){
		if($this->input->post('server') != null && $this->input->post('db') != null){
			$server = $this->input->post('server');
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$db = $this->input->post('db');	
		} else {
			$server = " ";
			$user = "";
			$pass = "";
			$db = " ";
		}

		$dbconfig = $this->config($server, $user, $pass);

		@$this->load->database($dbconfig);

		if(!@$this->db->initialize()){
			return array(
				'server' => $server,
				'user' => $user,
				'pass' => $pass,
				'db' => $db
			);
		}

		$this->db->query('CREATE DATABASE '.$db);

		$this->db->query('USE '.$db);

		$this->db->query('CREATE TABLE `asistencia_eventos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `clasificados` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(40) NOT NULL,
  `fecha` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `id_noticia` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL,
  `hora` varchar(20) NOT NULL,
  `imagen` varchar(40) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `miembros` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `latitud` varchar(50) NOT NULL,
  `longitud` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `admin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(40) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$this->db->query('CREATE TABLE `parametros` (
  `id` int(11) NOT NULL,
  `nombre_equipo` varchar(20) NOT NULL,
  `favicon` varchar(20) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;');

		$info = "<?php 
			define('DB_HOST', '{$server}');
			define('DB_USER', '{$user}');
			define('DB_PASS', '{$pass}');
			define('DB_NAME', '{$db}'); 
		?>";

	    file_put_contents("application/config/dbconfig.php", $info);
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

	public function cargarUltimas5Noticias(){
		$query = $this->db->query('SELECT * FROM noticias ORDER BY fecha DESC LIMIT 5');
		return $query->result_array();
	}

	public function cargarEventos(){
		$sql = 'SELECT *, 3956 * 2 * ASIN(SQRT(POWER(SIN((? - abs(eventos.latitud)) * pi()/180 / 2),2) + COS(? * pi()/180) * COS(abs(eventos.latitud) *  pi()/180) * POWER(SIN((? - eventos.longitud) *  pi()/180/2), 2) )) as distance FROM eventos having distance < 20 ORDER BY distance limit 5;';
		$query = $this->db->query($sql, array($this->session->userdata('latitud'), $this->session->userdata('latitud'), $this->session->userdata('longitud')));
		return $query->result_array();
	}

	public function cargarUltimos5Anuncios(){
		$query = $this->db->query('SELECT * FROM clasificados ORDER BY fecha DESC LIMIT 5');
		return $query->result_array();
	}

	public function cargarParametros(){
		$query = $this->db->get('parametros');
		return $query->row_array();
	}

	public function guardarParametros($parametros){
		$parametros['favicon'] = $this->guardarImagen('favicon');
		if($parametros['nombre_equipo'] != null && $parametros['titulo'] != null && $parametros['favicon'] != null){
			if($this->db->insert('parametros', $parametros)){
				return true;
			}else{
				return false;
			}
		}else{
			return array($parametros, 'Todos los campos son obligatorios');
		}
	}

	public function editarParametros($id = null, $parametros){
		if($id != null){
			if($parametros['nombre_equipo'] != null && $parametros['titulo'] != null){
				$nombreImagen = $this->guardarImagen('favicon');
				if($nombreImagen != null){
					$parametros['favicon'] = $nombreImagen;
				}	
				$this->db->where('id', $id);
				if($this->db->update('parametros', $parametros)){
					return true;
				}else{
					return false;
				}
			} else {
				return array($parametros, 'Todos los campos son obligatorios');
			}
		}
	}
}