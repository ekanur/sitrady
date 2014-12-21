<?php 
if(!defined('BASEPATH'))
		exit('No direct script access allowed');
// require APPPATH.'modules/informasi/controllers/informasi.php';

	class Profile extends User{
		
		function __construct(){
			parent::__construct();
		}

		function index($username=null){
			if ($username!=null) {
				$this->load->view('profile');
			}
			
		}

		function display($page){
			$this->load->view($page);
		}

	}
