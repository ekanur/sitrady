<?php 
if(!defined('BASEPATH'))
		exit('No direct script access allowed');
// require APPPATH.'modules/informasi/controllers/informasi.php';

	class Home extends MX_Controller{
		
		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->load->view('home');
		}
	}
 ?>