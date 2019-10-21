<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

function __Construct(){
      parent::__Construct ();
		$this->load->database();
		$this->load->model('Event_model');
		$this->data['events']=$this->Event_model->getevents();
	}
	public function index()
	{
		$this->load->view('Event',$this->data);

	}

	function get_event($id){
		$description=$this->Event_model->get_event_details($id);
		$event_doc=$this->Event_model->get_event_doc($id);
		$this->data['events_doc']=$event_doc;
        $this->data['events_des']=$description;
        
        $this->load->view('Event',$this->data);
    }

    function get_all_event(){
    	$this->load->view('Events_All',$this->data);
    }
}