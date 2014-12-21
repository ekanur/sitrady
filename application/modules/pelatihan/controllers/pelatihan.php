<?php 
if(!defined('BASEPATH'))
		exit('No direct script access allowed');
// require APPPATH.'modules/informasi/controllers/informasi.php';

	class Pelatihan extends Informasi{
		
		function __construct(){
			parent::__construct();
		}

		function index(){
			
			$this->display("pelatihan");
		}

		function display($page){
			$this->load->view($page);
		}
	}
 ?>