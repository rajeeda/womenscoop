<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {
	function __Construct(){
      parent::__Construct ();
      	$this->load->model('Donates_model');
		$this->data['msg']='';
		$this->data['msg_ty']='';
		$this->data['products']=$this->Donates_model->getProducts();
	}

	public function index()
	{
		$this->load->view('Assistance_to_rebuilding_saccos_in_nepal');
	}

	function donate(){
		$this->data['id']=$_GET['id'];
		$this->load->view('Donates',$this->data);
	}
	function succes(){
		$this->data['id']=$_GET['id'];
		$id=$this->data['id'];
		$order_id=$_GET['id'];
		$data=array(
			'status'=>'approved'
			);
		$result=$this->Donates_model->orderUpdate($data,$order_id);
		$this->data['msg']='Your order has been approved, you will receive a confirmation email shortly';
		$this->data['msg_ty']='1';
		$this->load->view('Donates',$this->data);
	}
	function error(){
		$this->data['id']=$_GET['id'];
		$id=$this->data['id'];
		$order_id=$_GET['id'];
		$data=array(
			'status'=>'declined'
			);
		$result=$this->Donates_model->orderUpdate($data,$order_id);

		$this->data['msg']="Your credit card didn't work";
		$this->data['msg_ty']='2';
		$this->load->view('Donates',$this->data);
	}
	function cancel(){

		$this->data['id']=$_GET['id'];
		$id=$this->data['id'];
		$order_id=$_GET['id'];
		$data=array(
			'status'=>'canceled'
			);
		$result=$this->Donates_model->orderUpdate($data,$order_id);
		if($result){
			$this->data['msg']='Your order has been cancelled';
			$this->data['msg_ty']='3';
			$this->load->view('Donates',$this->data);
		}
		
	}
	function addorder(){
		$id=$_GET['id'];
		$customer_name=$this->input->post("customer_name");
		$email=$this->input->post("email");
		$product_id=$this->input->post("product_id");
		$amount=$this->input->post("amount");
		$data=array(
			'product_id'=>$id,
			'amount'=>$amount,
			'customer_name'=>$customer_name,
			'email'=>$email,
			'status'=>'pending',
			'created_date'=>date("Y-m-d")

			);
		$result=$this->Donates_model->addOder($data);
         if($result){
            echo json_encode($result);
        }
		
	}
}