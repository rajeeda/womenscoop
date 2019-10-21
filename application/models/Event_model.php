<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model{ 
	function getevents(){
		$this->db->select('*');
        $this->db->from('event');
        $this->db->where('event_home',1);
        $this->db->order_by('event_starting_date' , "DESC");
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}
	function get_event_details($id){
		$this->db->select('*');
        $this->db->from('event');
        $this->db->where('event_id',$id);
        $this->db->order_by('event_starting_date');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}
    function get_event_doc($id){
        $this->db->select('*');
        $this->db->from('upload_files');
        $this->db->where('record_id',$id);
        $this->db->where('record_type','ED');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }

    function add_new_register($data){
        $query=$this->db->insert('event_registration',$data);
        return $query;
    }
	
}