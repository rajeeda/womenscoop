<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cu_model extends CI_Model{

    function __Construct()
    {
        parent::__Construct ();
        $this->load->database();
    }

    public function getSolutions()
    {
        return $this->db->select('solution_id,solution_name,description,image_file,add_date,update_date,link')
            ->from('cu_solutions')
            ->order_by('ord','ASE')
            ->get()
            ->result();
    }

    public function get_Solutions_Doc()
    {
        return $this->db->select('upload_files.file_id,upload_files.record_id,upload_files.file_name,upload_files.file_data,upload_files.file_type,upload_files.record_type')
            ->from('upload_files')
            ->join('cu_solutions','upload_files.record_id = cu_solutions.solution_id')
            ->where('upload_files.record_type','C')
            ->get()
            ->result();
    }

}