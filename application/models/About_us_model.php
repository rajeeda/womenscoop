<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us_model extends CI_Model{ 
	function getdob(){
		$this->db->select('about_us,title,mem_name,possion,society_name,country,image,type,position,add_date,edit_date,description,project,active');
        $this->db->from('about_us');
        $this->db->where('active','1');
        $this->db->order_by('position');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

    function members(){
        $this->db->select('member_type_id,member_type_name,member_type_description');
        $this->db->from('member_type_description');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }

   function getmembers(){
        $this->db->select('member_sign,member_name,Address,phone_no,email,member_id,member_type_id,member_abbrevation,country_name');
        $this->db->from('member');
        $this->db->join('country','member.country_id=country.country_id');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    } 

    function staff_projects(){
        $this->db->select('id,project_name,active');
        $this->db->from('projects');
        $this->db->where('active','1');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    /*function getdob(){
        $this->db->select('GROUP_CONCAT(CONCAT(tbl_product.mem_name) SEPARATOR "</br>") as mem_name,country_name');
        $this->db->from('about_us');
        $this->db->join('country','about_us.country=country.country_id');
        $this->db->group_by()
        $this->db->order_by('position');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }*/
    function contryName(){
        $this->db->select('country.country_id,country.country_name');
        $this->db->from('country');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    function awards_categry(){
        $this->db->select('awardees_category.category_id,awardees_category.category_name');
        $this->db->from('awardees_category');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    function awards(){
        $this->db->select('awards.award_id,
                    awards.award_year,
                    awards.country,
                    awards.awader,
                    awards.active,
                    awards.award_catagory,
                    country.country_name');
        $this->db->from('awards');
        $this->db->join('country','awards.country = country.country_id','INNER');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    function Structure(){
        $this->db->select('image,description');
        $this->db->from('organizationalstructure');
        $this->db->limit('1');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    function core_val(){
        $this->db->select('core_id,title,description');
        $this->db->from('core_value');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
    function core_val_img(){
        $this->db->select('*');
        $this->db->from('core_value_image');
        $this->db->limit('1');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
    }
}