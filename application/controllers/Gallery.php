<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

function __Construct(){
      parent::__Construct ();
		$this->load->database();
		$this->load->model('Gallery_model');
		$this->load->library("pagination");
		
	}
	public function index()
	{	$config["base_url"] = base_url() . "index.php/Gallery/index"; 
		$total_row = $this->Gallery_model->record_count();
		$config["total_rows"] = $total_row;	
		$config["per_page"] = 4;
		$config["uri_segment"] = 3;		
		$config["num_links"] =3;
		$config['use_page_numbers'] = false;
		$config['page_query_string'] = false;
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		

		$this->pagination->initialize($config);
		//$page = $this->uri->segment(3);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data["photos"] = $this->Gallery_model->fetch_data($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
	
		$this->load->view('Gallery',$this->data);
		

	}

	public function vedio()
	{	$config["base_url"] = base_url() . "index.php/Gallery/vedio"; 
		$total_row = $this->Gallery_model->record_vedio_count();
		$config["total_rows"] = $total_row;	
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;		
		$config["num_links"] =3;
		$config['use_page_numbers'] = false;
		$config['page_query_string'] = false;
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		

		$this->pagination->initialize($config);
		//$page = $this->uri->segment(3);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data["vedio"] = $this->Gallery_model->fetch_vedio_data($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		$this->data["title"] ="AACCU Vedios";
	
		$this->load->view('Vedio',$this->data);
		

	}

	public function photos()
	{	$config["base_url"] = base_url() . "index.php/Gallery/photos"; 
		$total_row = $this->Gallery_model->record_album_count();
		$config["total_rows"] = $total_row;	
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;		
		$config["num_links"] =3;
		$config['use_page_numbers'] = false;
		$config['page_query_string'] = false;
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = '&gt;';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&lt;';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

		

		$this->pagination->initialize($config);
		//$page = $this->uri->segment(3);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$this->data["photos"] = $this->Gallery_model->fetch_album_data($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
		$this->data["rows"] = $total_row;
		$this->data["title"] ="AACCU Photos";
	
		$this->load->view('Gallery',$this->data);
		

	}

	


	public function alubm()
	{	//$alubm_id="";
		$alubm_id=$_GET['id'];	

		$total_row = $this->Gallery_model->record_count_alubm($alubm_id);
		if(!$total_row){
			$this->data["photos"] = '';
			$this->data["rows"] = '';
			$this->data["title"] = 'No Album';
			$this->load->view('Photos',$this->data);
		}
		$this->data["photos"] = $this->Gallery_model->fetch_data_alubm($alubm_id);
		$this->data["rows"] = $total_row;
		$this->data["title"] = $alubm_id;
	
		$this->load->view('Photos',$this->data);
		

	}

	
}