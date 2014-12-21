<?php 
if(!defined('BASEPATH'))
		exit('No direct script access allowed');

// require APPPATH."third_party/MX/Controller.php";

class Informasi extends MY_Controller{

var $judul;
var $deskripsi;
var $tgl;
var $isPublish;

 	function __construct(){
 		parent::__construct();

 	}

 	function index(){
 		$this->setJudul("Informasi parent");
 		echo $this->getJudul();
 	}

 	function simpan()
 	{

 	}

 	function update()
 	{}

 	function hapus()
 	{}

 	function setJudul($judul){
 		$this->judul=$judul;
 	}

 	function getJudul()
 	{
 		return $this->judul;
 	}
 }

 ?>