<?php 
include_once(APPPATH.'controllers/PadreController.php'); 
class Jaque extends PadreController
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data = array();
		$this->load->view("Jaque/index.php",$data);
	}
}