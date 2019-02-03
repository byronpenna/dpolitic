<?php 
class ControlCategoria extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("entidades/Categoria");
	}
	public function listar(){
		$categorias = null;
		try
		{
			$categorias = array();
			$sql 		= "call sp_controlCategoria_listar()";
			$query 		= $this->db->query($sql);
			foreach ($query->result() as $key => $row) {
				$categoria = new Categoria();
				$categoria = $categoria->llenarByRow($row);
				array_push($categorias, $categoria);
			}
			$query->next_result();
			$query->free_result();
		}catch (Exception  $e) {
			return $e;
		}
		return $categorias;
	}
}