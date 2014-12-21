<?php 
if(!defined('BASEPATH'))
		exit('No direct script access allowed');
// require APPPATH.'modules/informasi/controllers/informasi.php';

	class Lowongan_kerja extends Informasi{
		var $judul;
		function __construct(){
			parent::__construct();
		}

		function index(){
			$this->load->view('info_loker-belum_login');
		}
	}
 ?>