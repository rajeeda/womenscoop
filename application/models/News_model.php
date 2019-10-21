<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model{ 
	//SELECT * from news WHERE news_home = 1 ORDER BY news_date DESC LIMIT $start, $per_page";
	
	function getUrls(){
	    $this->db->select('*');
        $this->db->from('url_tbl');
        $this->db->where('url_status','1');       
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}
	
	function getnewsrelimages($newsid){
	 $this->db->select('*');
        $this->db->from('news_rel_images');
        $this->db->where('news_id',$newsid);       
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

	function getlatestnews(){

		$this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_home','1');
        $this->db->order_by("news_date", "DESC");
        //$this->db->limit('6');
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

	function getnews($newsid){
		$this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_id',$newsid);       
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

	function getnrdfiles($newsid){
		$this->db->select('*');
        $this->db->from('upload_files');
        $this->db->where('record_id',$newsid);       
        $this->db->where('record_type','NRD');       
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

	function getfiles($newsid){
		$this->db->select('*');
        $this->db->from('upload_files');
        $this->db->where('record_id',$newsid);       
        $this->db->where('record_type','NRN');       
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        }
	}

    function getallnews(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by("news_date", "DESC");    
        
        $query = $this->db->get();
        if($query){
            return $query->result();
        } 
    }

       // Count all record of table "contact_info" in database.
    public function record_count() {
    return $this->db->count_all("news");
    }

    // Fetch data according to per_page limit.
    public function fetch_data($limit, $start) {
    //$this->db->limit($limit);
    //$this->db->where('news_id', $id);
    
    $this->db->order_by("news_date", "DESC");
 $this->db->limit($limit, $start);
    $query = $this->db->get("news");
    if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
    $data[] = $row;
    }

    return $data;
    }
    return false;
    }

    public function fetch_data2($limit, $start) {
    //$this->db->limit($limit);
    //$this->db->where('news_id', $id);
    
    $this->db->order_by("news_date", "ASC");
 $this->db->limit($limit, $start);
    $query = $this->db->get("news");
    if ($query->num_rows() > 0) {
    foreach ($query->result() as $row) {
    $data[] = $row;
    }

    return $data;
    }
    return false;
    }
}