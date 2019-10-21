<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bm_login_model extends CI_Model{
    function check_user($username,$password){
        $this -> db -> select('*');
        $this -> db -> from('user_level');
        $this -> db -> join('user_level_data','user_level.user_level_id = user_level_data.user_level_id');
        $this -> db -> where('user_level_data.user_name', $username);
        $this -> db -> where('user_level_data.pass', $password);
        $this -> db -> where('user_level.user_level_id',2);
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