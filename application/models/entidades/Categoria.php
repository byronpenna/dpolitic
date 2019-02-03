<?php 
class Categoria extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	// propiedades 
		public $_idCategoria;
		public $_categoria;

	public function llenarByRow($row){
		$categoria = null;
		try{
			$categoria = new Categoria();
			$categoria->_idCategoria = $row->idCategoria;
			$categoria->_categoria = $row->categoria;

		}catch(Exception $e){
			$categoria = null;
		}
		return $categoria;
	}
}