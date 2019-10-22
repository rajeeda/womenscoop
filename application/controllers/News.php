<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
	function __Construct(){
      parent::__Construct ();
		$this->load->database();
		$this->load->model('News_model');
		$this->load->library("pagination");
		//$this->data['news']=$this->News_model->getnews();
		$this->data['latestnews']=$this->News_model->getlatestnews();
	}
	public function index()
	{
		$this->load->view('News_single',$this->data);
	}

	public function getonenews(){
		$newsid = $_GET['id'];

		$this->data['news'] = $this->News_model->getnews($newsid);
		$this->data['news_rel_images'] = $this->News_model->getnewsrelimages($newsid);
		$this->data['nrdfiles'] = $this->News_model->getnrdfiles($newsid);
		$this->data['files'] = $this->News_model->getfiles($newsid);
		$this->index();


	}

	public function getallnews(){


		//$this->data['allnews'] = $this->News_model->getallnews();	

		
		$config["base_url"] = base_url() . "index.php/News/getallnews"; 
		$total_row = $this->News_model->record_count();
		$config["total_rows"] = $total_row;	
		$config["per_page"] = 6;
		$config["uri_segment"] = 3;		
		$config["num_links"] =4;
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
		
		//$this->data["allnews"] = $this->News_model->fetch_data($config["per_page"], $page);
		$this->data["allnews"] = $this->News_model->fetch_data($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
	//	$this->data["links"] = explode('&nbsp;',$this->pagination->create_links());

       	//echo print_r($this->pagination->create_links()) ;

       	// echo "<pre>";
       	// print_r($this->data);
       	// exit();
		$this->load->view('News',$this->data);
	}
	public function getOldNews(){


		//$this->data['allnews'] = $this->News_model->getallnews();	

		
		$config["base_url"] = base_url() . "index.php/News/getOldNews"; 
		$total_row = $this->News_model->record_count();
		$config["total_rows"] = $total_row;	
		$config["per_page"] = 6;
		$config["uri_segment"] = 3;		
		$config["num_links"] =4;
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
		
		//$this->data["allnews"] = $this->News_model->fetch_data($config["per_page"], $page);
		$this->data["allnews"] = $this->News_model->fetch_data2($config["per_page"], $page);
		$this->data["links"] = $this->pagination->create_links();
	//	$this->data["links"] = explode('&nbsp;',$this->pagination->create_links());

       	//echo print_r($this->pagination->create_links()) ;

		$this->load->view('News',$this->data);
	}

	
}