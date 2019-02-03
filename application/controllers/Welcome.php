<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php'); 
class Welcome extends PadreController {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	// variables 
		private $_model;
	// metodos magicos
	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');	
	}
	// privados
		private function getUserFromPostLogin(){
			$usuario = new Usuario();
			$usuario->setUsuario($_POST['Username']);
			$usuario->setPass($_POST['Password']);
			return $usuario;
		}
	// publicos 
	public function logout(){
		$_SESSION = null;
		session_destroy();
		redirect('/Welcome/index', 'refresh');
	}
	public function test(){
		$this->load->model("controles/ControlArticulo");
		$control 	= new ControlArticulo();
		$articulos 	= $control->obtenerUltimas();
		$data 		= array(
			'articulos' => $articulos
		);
		$this->load->view("Welcome/Index.php",$data);
	}
	public function index()
	{
		$this->load->model("controles/ControlArticulo");
		$control 	= new ControlArticulo();
		$articulos 	= $control->obtenerUltimas();
		$data 		= array(
			'articulos' => $articulos
		);
		$this->load->view("Welcome/Index.php",$data);
	}
	public function login(){
		$data = array();
		$this->load->view("Welcome/login.php",$data);
	}
	public function AccesoLogin(){
		$this->load->model("acciones/PantallaUsuario");
		$pantalla = new PantallaUsuario();				
		$usuario = $this->getUserFromPostLogin();
		$roles = array(); // array de roles del usuario;
		$logueado = $pantalla->login($usuario,$roles);
		if ($logueado){
			$this->session->set_userdata('usuario',$usuario);
			redirect('/Welcome/test', 'refresh');
		}else{
			redirect('/Welcome/index', 'refresh');
		}
	}
	public function buscar()
	{
		$this->load->model("controles/ControlArticulo");
		$frm = $this->getAjaxFrm($_POST["form"]);
		//print_r($frm);
		$control = new ControlArticulo();
		$retorno = new stdClass();
		$retorno->estado = true;
		$retorno->resultado = $control->buscar($frm->textoBusqueda);

		echo json_encode($retorno);
	}
}
