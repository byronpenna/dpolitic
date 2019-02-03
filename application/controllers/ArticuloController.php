<?php
include_once(APPPATH.'controllers/PadreController.php'); 
class ArticuloController extends PadreController
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		echo "hola";
	}
	function detalle($id){
		$this->load->model("entidades/Articulo");
		$articulo = new Articulo();
		$articulo = $articulo->buscar($id);
		$data = array(
			'articulo' => $articulo
		 );
		$this->load->view("Articulo/detalle.php",$data);
	}

	/* Backend */
		/*Acciones*/
		function cambiarEstado(){
			$this->load->model("controles/ControlArticulo");
			$frm 		= $this->getAjaxFrm($_POST["form"]);
			$control 	= new ControlArticulo();
			$retorno 	= new stdClass();
			$articulos 	= $control->cambiarEstado($frm->idArticulo);
			
		}
		function guardar(){
			$this->load->model("controles/ControlArticulo");
			$this->load->model("entidades/Articulo");
			$this->load->model("entidades/Categoria");
			$frm = $this->getAjaxFrm($_POST["form"]);
			
			$articulo = new Articulo();
			$articulo->_titulo = $frm->titulo;
			$articulo->_articulo = $frm->contenido;
			$articulo->_breveDescripcion = $frm->breveDescripcion;
			$articulo->_categoria = new Categoria();
			$articulo->_categoria->_idCategoria = $frm->idCategoria;

			$control = new ControlArticulo();
			$retorno = new stdClass();
			$retorno->estado = $control->guardarArticulo($articulo);

		}
		/*Vistas*/
		function gestion(){
			$this->load->model("controles/ControlArticulo");
			$control = new ControlArticulo();
			$articulos = $control->listarParaEdicion();
			$data = array('articulos' => $articulos);
			$this->load->view("Articulo/gestion.php",$data);
		}
		function agregar(){
			$this->load->model("controles/ControlCategoria");
			$control = new ControlCategoria();
			$categorias = $control->listar();
			$data = array(
				"categorias" => $categorias
			);
			$this->load->view("Articulo/agregar.php",$data);
		}
	
}
