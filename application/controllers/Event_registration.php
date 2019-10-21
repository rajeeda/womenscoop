<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_registration extends CI_Controller {
	function __Construct(){
      parent::__Construct ();
		$this->load->database();
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->model('Event_model');
    $this->data['events']=$this->Event_model->getevents();
    $this->load->model('Members_model');
    $this->data['members']=$this->Members_model->getmembers();
	$this->data['error']=array('status' => '', 'msg' => ''); 
}
	public function index()
	{
		$this->load->view('Event_registration',$this->data);
	}

	function eventRegister(){

		$status = "";
        $msg = "";
        
        $this->form_validation->set_error_delimiters('<span class="error" style="color:red;">', '</span>');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('society', 'member', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        $this->form_validation->set_rules('contact', 'contact number', 'required');
        $this->form_validation->set_rules('event', 'event', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        
        if ($this->form_validation->run() == FALSE){
            $this->load->view('Event_registration',$this->data);
        }
        else{
            try{
                $name=$this->input->post('name');
                $society=$this->input->post('society');
                $address=$this->input->post('address');
                $contact=$this->input->post('contact');
                $event=$this->input->post('event');
                $email=$this->input->post('email');

                $data=array(
                    'event_id'=>$event,
                    'name_of_part'=>$name,
                    'name_of_member'=>$society,
                    'country_id'=>'',
                    'work_phone'=>$contact,
                    'email'=>$email,
                    );

                $insert=$this->Event_model->add_new_register($data);
                if($insert==False){
                    $status = "error";
                     $msg = "Registration failed. please try again...";
                     $this->data['error']=array('status' => $status, 'msg' => $msg);
                     $this->load->view('Event_registration',$this->data);

                }else{
                    $status = "success";
                     $msg = "You Registered Successfully...";
                     $this->data['error']=array('status' => $status, 'msg' => $msg);
                     $this->load->view('Event_registration',$this->data);
                }
                  
            }
            catch(Exception $e){
                redirect('Event_registration',$this->data);
            }
        }
    }
    
    function check_user_confirm($username,$password){
        try{
            $check_user=$this->Login_model->check_user($username,$password);
            
            if($check_user){
                
                foreach($check_user as $login){
                    $user_id=$login->user_id;
                    $user= array(
                        'username' =>$login->user_name,
                        'user_id'=>$user_id,
                        'login'=> true,
                        
                    );

                }
                return $user;      
            }
            else{
                throw new Exception(); 
            }
        }
        catch(Exception $e){
            return false;
        }
        
    }
}