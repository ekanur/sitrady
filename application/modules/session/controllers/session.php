<?php 
if(!defined('BASEPATH'))
	exit('Error');

class Session extends MX_Controller{
 var $sebagai;
 var $key;
 var $value;
 var $expired;
 function __construct()
 {
 	parent::__construct();
 }

 function index()
 {
 	exit("not allowed");
 }

function buat_session($data){
// $data:array
// 
} 

function hapus_session(){

}

function cek_session(){}


function setSebagai($role){}

function setKey($key){
 }

 function setValue($value){}

 function setExpired($durasi){}
}
