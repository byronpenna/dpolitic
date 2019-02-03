<?php 
include_once(APPPATH.'controllers/PadreController.php'); 
class Enroque extends PadreController
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data = array();
		$this->load->view("Enroque/index.php",$data);
	}
}