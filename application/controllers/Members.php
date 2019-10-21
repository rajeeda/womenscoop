<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {
	function __Construct(){
      parent::__Construct ();
		$this->load->database();
		$this->load->model('Members_model');
		$this->data['members']=$this->Members_model->getmembers();
		$this->data['membersType']=$this->Members_model->getSumMembers2();
		$this->data['country']=$this->Members_model->contryName();
	}
	public function index()
	{
		$this->load->view('Members',$this->data);
	}
}