<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function signin(){   
	 if (isset($_POST['login']) && !empty($_POST['phone'])){
			$phone	=	$this->input->post('phone');
  			//$password	=	md5($this->input->post('password'));
			$password	=	$this->input->post('password');	
	
			$login = $this->db->query("SELECT * FROM tblusers WHERE phone='$phone' AND password='$password'");
			$row = $login->row();
				if (isset($row))
					{
				   	 $phone   =	$row->phone;
					 $name		=	$row->name;
					 $user_id	=	$row->user_id;
					 $role	=	$row->role;
					 $this->session->set_userdata('user_login', '1');
					 $this->session->set_userdata('user_id',$user_id);
					 $this->session->set_userdata('name',$name);
					 redirect(base_url().'User/members', 'refresh');
					}
					$data['page_title']  = 'Login';
					$this->session->set_flashdata('message','Invalid Username or Password');
					return $this->load->view('login',$data);					
			    }				
	}
	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}