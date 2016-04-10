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
	$this->load->view('headers',$dato);
	$this->load->view('Principal',$query);
}

function Carrito(){
	
}

function Productos(){
	$dep=$this->uri->segment(2);
	$this->load->model('CompuMaxDBM');
	$this->load->library('pagination');
	$config['base_url'] = base_url()."Productos/";
	$config['total_row']=$this->CompuMaxDBM->num_filas($dep);
	$config['per_page']= 1;
	$config['num_links']=5;
	$config['first_link']='Primero';
	$config['last_link']='Ultimo';
	$config['next_link']='Siguiente';
	$config['prev_link']='Anterior';

	$config['cur_tag_open']= '<b class="paginacion">';
	$config['cur_tag_close']= '</b>';

	$config['full_tag_open']= '<div class="col-md-6 productos">';
	$config['full_tag_close']= '</div>';

	$this->pagination->initialize($config);
	$prod=array("dep"=>$dep,"per_page"=>$config['per_page']);
	$dato['titulo']= $dep;
	$tablas['tablas']=array("datos"=>$this->CompuMaxDBM->datosMenu(),"prod"=>$this->CompuMaxDBM->productos($prod),"paginacion"=>$this->pagination->create_links());
	$this->load->view('headers',$dato);
	$this->load->view('Productos',$tablas);

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

function datosEnvio(){
	$dato['titulo']= 'Datos Envio';
	$this->load->view('headers',$dato);
	$this->load->view('datosEnvio');
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