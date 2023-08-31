<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct() {
			parent::__construct();
			 $this->load->helper(array('url'));
	}
	
	public function index()
	{
		$this->output->enable_profiler(TRUE);
	}
	
	public function rendimiento()
	{
		$this->benchmark->mark('inicio_test');
		
		for($i=0; $i<1000; $i++){
			$a = md5("test".$i);
		
		}
		
		$this->benchmark->mark('fin_test');
		echo "Tiempo del test: ".$this->benchmark->elapsed_time('inicio_test','fin_test');
	}
}
