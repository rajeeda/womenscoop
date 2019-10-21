<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    function __Construct(){
      parent::__Construct ();
        $this->load->library('session');  
    }
    
	public function index(){
        
        $user_id=$this->session->userdata('user_id');
        $this->session->sess_destroy();
        redirect('Login');
	}
}