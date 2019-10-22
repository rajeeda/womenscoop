<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members_model extends CI_Model{ 
	function getmembers(){
		$this->db->select('member_sign,member_name,Address,phone_no,email,member_id,member_type_id,member.country_id,member.member_abbrevation');
        $this->db->from('member');
        $this->db->where('member.active',1);
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

	function getSumMembers2(){
        $this->db->select('Count(member.member_id) As sum,member_type_description.member_type_name,member_type_description.member_type_id');
        $this->db->from('member_type_description');
        $this->db->join('member','member.member_type_id = member_type_description.member_type_id');
        $this->db->where('member.active',1);
        $this ->db->group_by('member_type_description.member_type_id');


        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    function contryName(){
        $this->db->select('country.country_id,country.country_name');
        $this->db->from('country');
        $this->db->join('member','country ON country.country_id= member.country_id','INNER');
        $this->db->where('member_type_id',4);
        $this->db->group_by('country.country_id');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }


    function getboardreport(){
        $this->db->select('*');
        $this->db->from('user_doc_cate');
        $this->db->join('user_doc','user_doc_cate ON user_doc_cate.doc_cate_id= user_doc.doc_cate_id','INNER');
        $this->db->order_by('user_doc_cate.doc_cate_id','DESC');
        //echo $this->db->get_compiled_select();die();
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }


    function getdoccatrelreport($publication_id){
        $this->db->select('*');
        $this->db->from('user_doc');
        $this->db->where('doc_cate_id',$publication_id);
        $this->db->order_by('doc_id','DESC');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }


	
}