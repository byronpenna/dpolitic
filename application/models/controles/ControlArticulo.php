<?php 
class ControlArticulo extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("entidades/Articulo");
	}


	public function guardarArticulo($articulo){
		$retorno = true;
		try {
			$sql ="call sp_controlArticulo_agregar(
				'".$articulo->_titulo."',
				'".$articulo->_breveDescripcion."',
				'".$articulo->_articulo."',
				".$articulo->_categoria->_idCategoria."
			);";
			$query = $this->db->query($sql);
			$row = $query->row();
			if($row->estado <> 0){
				$retorno = false;
			}
			/*
				in i_titulo varchar(100),
			    in i_breveDescripcion varchar(340),
			    in i_articulo varchar(3000),
			    in i_categoria int 
			*/

		} catch (Exception $e) {
			$retorno = false;
		}
		return $retorno;
	}
	public function cambiarEstado($idArticulo){
		$retorno = true;
		try{
			$sql 		= "call sp_controlArticulo_cambiarEstado(".$idArticulo.")";
			$query 		= $this->db->query($sql);
			$row = $query->row();
			if($row->estado <> 0){
				$retorno = false;
			}
		}catch (Exception  $e) {
			$retorno = false;
		}
		return $retorno;
	}
	public function listarParaEdicion()
	{
		$articulos = null;
		try
		{
			$articulos 	= array();
			$sql 		= "call sp_controlArticulo_listarParaEdicion()";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				$articulo = new Articulo();
				$articulo = $articulo->llenarByRow($row);
				array_push($articulos, $articulo);
			}
			$query->next_result();
			$query->free_result();
		}catch (Exception  $e) {
			return $e;
		}
		return $articulos;
	}
	public function obtenerUltimas(){
		$articulos = null;
		//echo "aca";
		try {
			$articulos 	= array();
			$sql 		= "call sp_controlArticulo_ultimas()";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				$articulo = new Articulo();
				$articulo = $articulo->llenarByRow($row);
				array_push($articulos, $articulo);
			}
			$query->next_result();
			$query->free_result();
		}catch (Exception  $e) {
			return $e;
		}
		//print_r($articulos);
		return $articulos;
	}
	public function buscar($txtBusqueda){
		$articulos = null;
		//echo "aca";
		try {
			$articulos 	= array();
			$sql 		= "call sp_controlArticulo_buscar('".$txtBusqueda."')";
			//echo "aquito";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				//echo "forsito";
				$articulo = new Articulo();
				$articulo = $articulo->llenarByRow($row);
				array_push($articulos, $articulo);
				//print_r($row);
			}
			$query->next_result();
			$query->free_result();
			
		} catch (Exception  $e) {
			return $e;
		}
		//print_r($articulos);
		return $articulos;
	}
}