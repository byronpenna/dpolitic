<?php 

class PadreController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}
	function getAjaxFrm(){
		$frm = json_decode($_POST["form"]);
		return $frm;
	}
}