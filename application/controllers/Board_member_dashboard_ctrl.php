<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Board_member_dashboard_ctrl extends CI_Controller {
    function __Construct(){
        parent::__Construct ();
        $this->load->database();
        $this->load->model('Members_model');
        $this->load->model('Library_model');
        $this->data['members']=$this->Members_model->getmembers();
        $this->data['membersType']=$this->Members_model->getSumMembers2();
        $this->data['country']=$this->Members_model->contryName();
       // $this->data['board_member_folder']=$this->Members_model->board_member_folders();

        $publications = $this->Members_model->getboardreport();
        $this->data['publications']= $publications;

        $techReport = array();

        foreach ($publications as $publication){
            $publication_id=$publication->doc_cate_id;
            $data = array(
                'name' => $publication->doc_cate_name,
                'data'  => $this->Members_model->getdoccatrelreport($publication_id)
            );

            $techReport[] = $data;
        }
        //echo "<pre>";
        //print_r($techReport);die;
        $this->data['techReports']=$techReport;

    }
    public function index()
    {
        $this->load->view('Board_member_dashboard_view',$this->data);
    }
}