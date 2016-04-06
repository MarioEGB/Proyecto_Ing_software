<?php
if ( ! defined('BASEPATH'))  exit('No direct script access allowed');

class CMC extends CI_Controller {

	function _construct(){
		parent::__construct();
	}


function index(){
	$dato['titulo']= 'Home';
	$this->load->model('CompuMaxDBM');
	$query['datos']=$this->CompuMaxDBM->datosMenu();
	//$this->load->library('Menu',$query);
	//$dato2['menu']= $this->menu->crear_menu();
	$this->load->view('headers',$dato);
	$this->load->view('Principal',$query);
}

function Carrito(){
	
}

function Login(){
	$dato['titulo']= 'Log-in';
	$this->load->helper('form');
	$this->load->model('CompuMaxDBM');
	$this->load->view('headers',$dato);
	$this->load->view('Login');
}

function adminPrincipal(){
	$dato['titulo']= 'Home-Admin';
	$this->load->view('headers',$dato);
	$this->load->view('adminPrincipal');
}

function TerminarCompra(){

}

function Cobro(){

}

function verProducto(){

}

function comprobarDatos(){
	$this->load->model('CompuMaxDBM');
		$data = array('nombre' => $this->input->post('nombre'),'password' => $this->input->post('password'));
		$this->CompuMaxDBM->validarDatos($data);
}	

}

?>