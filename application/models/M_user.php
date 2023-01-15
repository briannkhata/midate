<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class M_user extends CI_Model {
		function get_users(){
		    $this->db->where('deleted',0);
		    $this->db->order_by('user_id','DESC');
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_user_by_id($user_id){
		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users');
			return $query->result_array();
		}

		function get_name($user_id){
   		    $this->db->where('user_id',$user_id);
			$query = $this->db->get('users')->result_array();
			if(count($query) > 0){
				foreach ($query as $row) {
					return $row['name'];
				}
			}else {
				return '';
			}
			
		}

		function getLogin($username,$password){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			$this->db->where('deleted',0);
			return $query = $this->db->get()->result_array();
		}

		function check_username($username){
			$this->db->where('username',$username);
			$query=$this->db->get('users');
			if($query->num_rows()>0)
			{
				return 1;	
			}
			else
			{
				return 0;	
			}
    	}	
   

 
}