<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donates_model extends CI_Model{

    function __Construct()
    {
        parent::__Construct ();
        $this->load->database();
    }

    public function addOder($data)
    {
        $query=$this->db->insert('order',$data);
        if($query){
            extract($data);
            return $this->db->select('order_id')
            ->from('order')
            ->where('customer_name',$customer_name)
            ->where('amount',$amount)
            ->order_by('order_id','desc')
            ->limit(1)
            ->get()
            ->result();
        }
        
    }
    public function orderUpdate($data,$order_id){
        $this->db->where('order_id',$order_id);
        $query=$this->db->update('order',$data);
        return $query;
    }

    public function getProducts()
    {
        return $this->db->select('id,name,price,dollar_price')
            ->from('product')
            ->get()
            ->result();
    }
}