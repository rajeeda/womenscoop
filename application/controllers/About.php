<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __Construct(){
      parent::__Construct ();
		$this->load->database();
		$this->load->model('About_us_model');
		$this->load->model('Members_model');
		$this->data['board_of_directors']=$this->About_us_model->getdob();
		$this->data['Members']=$this->About_us_model->members();
		$this->data['eachmembers']=$this->Members_model->getmembers();
		$this->data['country']=$this->About_us_model->contryName();
		$this->data['staff_projects']=$this->About_us_model->staff_projects();
		$this->data['awards_categry']=$this->About_us_model->awards_categry();
		$this->data['awards']=$this->About_us_model->awards();
		$this->data['core_val']=$this->About_us_model->core_val();
		$this->data['Structure']=$this->About_us_model->Structure();
		$this->data['core_val_img']=$this->About_us_model->core_val_img();
	}

	public function index()
	{
		$this->load->view('About',$this->data);
}
}