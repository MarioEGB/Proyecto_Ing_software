<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class CompuMaxDBM extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

function validarDatos($data){
		$query = $this->db->get('administrador');
		if($query->num_rows()>0){
		 foreach ($query->result() as $row){
		 	if(($row->usuario == $data['nombre']) && ($row->contraseña == $data['password'])){
		 		redirect(base_url()."CMC/adminPrincipal");
		 	}
		 }
		}
		redirect(base_url()."CMC/Login");
	}

function datosMenu(){
	$query = $this->db->get('categoria');

	if($query->num_rows() >0){
	return $query;
	}else{
		return false;
	}
	}
	
}

?>	