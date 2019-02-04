<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/PadreController.php'); 
class Landing extends PadreController {

	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$this->load->view("Landing/Index.php");
	}
}