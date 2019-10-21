<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library_model extends CI_Model{

    function __Construct()
    {
        parent::__Construct ();
        $this->load->database();
    }

    public function getPublications()
    {
        return $this->db->select('publication_id,document_name,publication_cat_id')
            ->from('publication')
            ->order_by('add_date','DESC')
            ->get()
            ->result();
    }

    public function getAnualReports()
    {
        return $this->db->select('pub_doc_id,pub_doc_name,pub_doc_description,pub_doc_file,file_type,report_type,record_id,pubcation_documents.add_date,pub_image')
            ->from('pubcation_documents')
            ->join('publication','publication.publication_id=pubcation_documents.record_id')
            ->like('report_type','Annual Reports')

            ->order_by('pubcation_documents.add_date','DESC')
            ->get()
            ->result();
    }

    public function getTechReports($publication_id){
        return $this->db->select('pub_doc_id,pub_doc_name,pub_doc_description,pub_doc_file,file_type,report_type,record_id,pubcation_documents.add_date,pub_image')
            ->from('pubcation_documents')
            ->join('publication','publication.publication_id=pubcation_documents.record_id')
            ->where('record_id',$publication_id)
           //->where('pubcation_documents.publication_cat_id',3)
            ->order_by('pubcation_documents.add_date','DESC')
            ->get()
            ->result();
    }
     public function getPublicationsType()
    {
        return $this->db->select('publication_cat_id,pub_cat_name,add_date,activation')
            ->from('publication_catagary')
            ->where('activation','Y')
            ->order_by('add_date','DESC')
            ->get()
            ->result();
    }

}