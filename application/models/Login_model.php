<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{ 
function check_user($username,$password){
        $this -> db -> select('*');
        $this -> db -> from('user_level_data');
        $this -> db -> where('user_name', $username);
        $this -> db -> where('pass', $password);
        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

}

?>