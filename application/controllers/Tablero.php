<?php 

include_once(APPPATH.'controllers/PadreController.php'); 
class Tablero extends PadreController
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');	
		$this->load->model("controles/ControlArticulo");
	}

	function index(){
		$control = new ControlArticulo();
		$articulos = $control->obtenerUltimas();
		$data = array(
			'articulos' => $articulos );
		$this->load->view("Tablero/Index.php",$data);
	}

	function detalle($id){
		$this->load->model("entidades/Articulo");
		$articulo = new Articulo();
		$articulo = $articulo->buscar($id);
		$data = array(
			"articulo" => $articulo
		);
		$this->load->view("Tablero/Detalle.php",$data);	
	}
	/*Internos*/
	public function buscar()
	{
		$this->load->model("controles/ControlArticulo");
		$frm = $this->getAjaxFrm($_POST["form"]);
		$control = new ControlArticulo();
		$retorno = new stdClass();
		$retorno->estado = true;
		$retorno->resultado = $control->buscar($frm->textoBusqueda);
		echo json_encode($retorno);
	}
	public function ajax_obtenerUltimas(){
		$control = new ControlArticulo();
		$articulos = $control->obtenerUltimas();
		$retorno = new stdClass();
		$retorno->estado = true;
		$retorno->resultado = $control->obtenerUltimas();
		echo json_encode($retorno);
		
	}
}