<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model{ 
	public function record_count() {
    	return $this->db->count_all("image_gallary");
    }

    // Fetch data according to per_page limit.
    public function fetch_data($limit, $start) {
    
    	$this->db->order_by("image_id", "DESC");
 		$this->db->limit($limit, $start);
    	$query = $this->db->get("image_gallary");
    		if ($query->num_rows() > 0) {
    		foreach ($query->result() as $row) {
    		$data[] = $row;
    		}

    	return $data;
    	}
    	return false;
    }

    public function record_count_alubm($alubm_id){
        $alubm_id="";
        $alubm_id=$_GET['id'];
        $this->db->where("catagary",$alubm_id);
        $query =$this->db->count_all_results("image_gallary");
        return $query;
    }

    public function fetch_data_alubm($alubm_id) {
        $alubm_id=$_GET['id'];
        $this->db->where("catagary",$alubm_id);
        $this->db->order_by("image_id", "DESC");
        $query = $this->db->get("image_gallary");
            if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
            $data[] = $row;
            }

        return $data;
        }
        return false;
    }

    public function record_vedio_count() {
    	return $this->db->count_all("videos");
    }


    // Fetch data according to per_page limit.
    public function fetch_vedio_data($limit, $start) {
    
    	$this->db->order_by("video_id", "DESC");
 		$this->db->limit($limit, $start);
    	$query = $this->db->get("videos");
    		if ($query->num_rows() > 0) {
    		foreach ($query->result() as $row) {
    		$data[] = $row;
    		}

    	return $data;
    	}
    	return false;
    }

    public function record_album_count() {
        return $this->db->count_all("image_gallary_catogry");
    }


    // Fetch data according to per_page limit.
    public function fetch_album_data($limit, $start) {
    
        $this->db->order_by("id", "DESC");
        $this->db->limit($limit, $start);
        $query = $this->db->get("image_gallary_catogry");
            if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
            $data[] = $row;
            }

        return $data;
        }
        return false;
    }

    public function getvedios(){
        return $this->db->select('*')
        ->from('videos')
        ->order_by("order", "DESC")
        ->get()
            ->result();

    }
    public function getphotos(){
        return $this->db->select('Category_name,Category_image_name')
        ->from('image_gallary_catogry')
        ->order_by("id", "DESC")
        ->get()
            ->result();
    }
    public function testimonials(){
        return $this->db->select('t_heading,t_message,t_writter,order_id')
        ->from('testimonials')
        ->get()
            ->result();
    }

    public function network(){
        return $this->db->select('networkstrength_id,individual_members,financial_cooperatives,billion_asset,volunteers,employees')
        ->from('networkstrength')
        ->get()
            ->result();
    }

    public function partners(){
        return $this->db->select('partner_id,partner_name,partner_logo,partner_url')
        ->from('homepage_partners')
        ->where('active',1)
        ->get()
            ->result();
    }


}