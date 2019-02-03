<?php 
include_once(APPPATH.'controllers/PadreController.php'); 
class Reina extends PadreController
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data = array();
		$this->load->view("Reina/Index.php",$data);
	}
}