<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author common
 */
class Login_Model extends CI_Model {
    //put your code here
    public function saveUserInfo($data)
    {
        $this->db->insert('tbl_user',$data);
    }
    
    function checkDuplicateEmail ($email_address)
	{
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('email_address', $email_address);
		$query_result = $this->db->get();
		if (count($query_result->result()) > 0)
		{
			return true;
		} else
		{
			return false;
		}
	}
        
        public function userLoginCheck($email_address,$password)
        {
            $this->db->select('*');
            $this->db->from('tbl_user');
            $this->db->where('email_address',$email_address);
            $this->db->where('password',md5($password));
            $query_result=$this->db->get();
            $result=$query_result->row();
            return $result;
        }
}

?>
