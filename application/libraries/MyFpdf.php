<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
require("fpdf.php");
class MyFpdf extends FPDF {
	function __construct(){
		parent::__construct();
		$CI = & get_instance();
	}
}



?>