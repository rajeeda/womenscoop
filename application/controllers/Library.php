<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

    function __Construct()
    {
        parent::__Construct ();
                $this->load->model('Library_model');
                $this->load->library('session');
            
    }

	public function index()
	{
	    $publications = $this->Library_model->getPublications();
	    $this->data['publications']= $publications;
	    $this->data['PublicationsType']=$this->Library_model->getPublicationsType();
        $this->data['PublicationsCategory']=$this->Library_model->getPublicationsType();
	    $techReport = array();

	    foreach ($publications as $publication){
	        $publication_id=$publication->publication_id;
	        $data = array(
                'id'=>$publication_id,
                'publication_cat_id'=>$publication->publication_cat_id,
                'name' => $publication->document_name,
                'data'  => $this->Library_model->getTechReports($publication_id)
            );

            $techReport[] = $data;
        }

        $this->data['techReports']=$techReport;

		$this->load->view('Library',$this->data);
	}
}