<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __Construct(){
      parent::__Construct ();
		$this->load->database();
		$this->load->model('News_model');
		$this->load->model('Event_model');
		$this->load->model('Gallery_model');
		$this->data['latestnews']=$this->News_model->getlatestnews();
		$this->data['events']=$this->Event_model->getevents();
		$this->data['photos']=$this->Gallery_model->getphotos();
		$this->data['vedios']=$this->Gallery_model->getvedios();
		$this->data['testimonials']=$this->Gallery_model->testimonials();
		$this->data['urls']=$this->News_model->getUrls();
		$this->data['homepage_partners']=$this->Gallery_model->partners();
		$this->data['networkstrength']=$this->Gallery_model->network();

		//print_r($this->data['urls']);
	}

	public function index()
	{
		$this->load->view('Index',$this->data);
	}
}
