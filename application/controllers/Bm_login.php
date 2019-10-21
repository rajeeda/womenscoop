.........
.
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bm_login extends CI_Controller {
    function __Construct(){
        parent::__Construct ();
        $this->load->database();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Bm_login_model');
        $this->data['error']=array('status' => '', 'msg' => '');
    }
    public function index()
    {
        $this->load->view('Bmlogin_view',$this->data);
    }

    function checkuser(){

        $status = "";
        $msg = "";

        $this->form_validation->set_error_delimiters('<span class="error" style="color:red;">', '</span>');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('Bmlogin_view',$this->data);
        }
        else{
            try{
                $username=$this->input->post('username');
                $password=md5($this->input->post('password'));
                $check_user=$this->check_user_confirm($username,$password);
                if($check_user){
                    $this->session->set_userdata($check_user);
                    log_message('info', $user_id.' user loged into the system');
                    redirect('Board_member_dashboard_ctrl');
                }
                else{
                    $status = "error";
                    $msg = "Invalid Username or Password..";
                    $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
                    $this->data['error']=array('status' => $status, 'msg' => $msg);
                    $this->load->view('Bmlogin_view',$this->data);

                }


            }
            catch(Exception $e){
                redirect('Logout');
            }
        }
    }

    function check_user_confirm($username,$password){
        try{
            $check_user=$this->Bm_login_model->check_user($username,$password);

            if($check_user){

                foreach($check_user as $login){
                    $user_id=$login->user_id;
                    $user= array(
                        'username' =>$login->user_name,
                        'user_id'=>$user_id,
                        'login'=> true,

                    );

                }
                return $user;
            }
            else{
                throw new Exception();
            }
        }
        catch(Exception $e){
            return false;
        }

    }
}