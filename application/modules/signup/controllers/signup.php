<?php

class Signup extends MX_Controller{

public $nama;
public $username;
public $email;
private $password;
public $tgl;

	function __construct()
	{
		parent::__construct();
		$this->setTgl(date("Y-m-d"));
	}

	function index(){
		$data=array(
			'tgl'=>$this->getTgl()
			);
		$this->display("signup", $data);
	}

	function display($page, $data=null){
		$this->load->view($page, $data);
	}

	function Simpan($data){

	}

	function cekNama($nama){}
	function cekUsername($username){}
	function cekEmail($email){}

	function setNama($nama){
		$this->nama=$nama;
	}
	function setUsername($usernama){
		$this->username=$username;
	}
	function setPassword($password){
		$this->password=$password;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTgl($tgl){
		$this->tgl=$tgl;
	}

	function getNama(){
		return $this->nama;
	}
	function getUsername(){
		return $this->username;
	}
	function getEmail(){
		return $this->email;
	}
	function getPassword(){
		return $this->password;
	}
	function getTgl(){
		return $this->tgl;
	}
}