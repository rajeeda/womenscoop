
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cu_solutions extends CI_Controller {

function __Construct(){
      parent::__Construct ();
      $this->load->model('Cu_model');
		
		if($this->session->userdata('login')){
			$this->load->database();
		$this->load->library('session');
			}
        else{
            redirect('Logout');
        }

		
	}
	public function index()
	{	
		$this->data['cu_solution']=$this->Cu_model->getSolutions();
		$this->data['cu_solution_doc']=$this->Cu_model->get_Solutions_Doc();
		$this->load->view('Cu_solutions',$this->data);


	}
}