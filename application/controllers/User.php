<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	function index(){
		$data['page_title']  = 'Login';
		$this->load->view('admin/index',$data);			
	}

    function check_session(){
        if ($this->session->userdata('user_login') != 1)//not logged in
            redirect(base_url(), 'refresh');
    }

	function chat(){
        $this->check_session();
        $this->M_user->get_setonline_status_to_on($this->session->userdata('user_id'));
        $data['page_title']  = 'Members';
		$this->load->view('User/chat',$data);
	}

	function register(){
		$data['name'] = $this->input->post('name');
		$data['password'] = MD5($this->input->post('password'));
		$data['phone'] = $this->input->post('phone');
		$data['country'] = $this->input->post('country');
		$data['register_date'] = date('Y-m-d h:m:s');
        $data['role'] = 1;
		$data['activation_code'] = "";
		$this->db->insert('tblusers',$data);
        $this->session->set_flashdata('message','Your Account has been Created Successfully, Please Login');
		redirect("Home/register");
	}

    function change_password(){
        $data['password'] = MD5($this->input->post('password'));
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->insert('tblusers',$data);
        $this->session->set_flashdata('message','Password changed Successfully');
        redirect("User/chat");
    }
    function add_photo(){
        $data['user_id'] = $this->session->userdata('user_id');
        $data['photo'] = random_string().'_'.$_FILES['photo2']['name'];
        move_uploaded_file($_FILES['photo2']['tmp_name'],"uploads/users/".$data['photo']);
        $this->db->insert('tblphotos',$data);
        $this->session->set_flashdata('message','Photo Uploaded Successfully');
        redirect("User/chat");
    }

    function change_profile(){
        $data['photo'] = random_string().'_'.$_FILES['photo']['name'];
        $user_id = $this->session->userdata('user_id');
        move_uploaded_file($_FILES['photo']['tmp_name'],"uploads/users/".$data['photo']);
        $this->db->where('user_id',$user_id);
        $this->db->update('tblusers',$data);
        redirect("User/chat");
    }
    function close_account(){
        $data['reason_for_closing'] = $this->input->post('reason_for_closing');
        $data['deleted'] = 1;
        $data['date_closed'] = date('Y-m-d h:m:s');
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->update('tblusers',$data);
        $this->session->set_flashdata('message','Account Closed Successfully');
        redirect("Login/logout");
    }

    function update_password(){
        $data['password'] = MD5($this->input->post('password'));
        $user_id = $this->session->userdata('user_id');
        $this->db->update('tblusers',$data);
        $this->session->set_flashdata('message','Password Changed Successfully');
        redirect("User/chat");
    }
    function update_profile(){
        $data['name'] = $this->input->post('name');
        $data['church'] = $this->input->post('church');
        $data['profession'] = $this->input->post('profession');
        $data['phone'] = $this->input->post('phone');
        $data['dob'] = $this->input->post('dob');
        $data['location'] = $this->input->post('location');
        $data['gender'] = $this->input->post('gender');
        $data['age_to'] = $this->input->post('age_to');
        $data['age_from'] = $this->input->post('age_from');
        $data['looking_for'] = $this->input->post('looking_for');
        $data['about'] = $this->input->post('about');
        $data['country'] = $this->input->post('country');
        $data['location'] = $this->input->post('location');
        $data['district'] = $this->input->post('district');
        $data['m_status'] = $this->input->post('m_status');
        $data['dating_type'] = $this->input->post('dating_type');
        $data['hobies'] = $this->input->post('hobies');
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->update('tblusers',$data);
        $this->session->set_flashdata('message','Profile Updated Successfully');
        redirect("user/chat");
    }


	function send_message(){
        $data['from'] = $this->input->post('from');
        $data['to'] = $this->input->post('to');
        $data['message'] = $this->input->post('message');
        $data['sent'] = date('Y-m-d h:s:m');
        $data['read'] = 0;
        $this->db->insert('tblchats',$data);
        return;
    }

    function get_charts_realtime(){
        $from = $this->input->post('from');
        $to = $this->input->post('to');
        $output = "";
        $chats = $this->M_user->get_charts_realtime($to,$from);
        foreach ($chats as $chat)
        {
            $profile4 = !file_exists(base_url()."uploads/users/".$this->M_user->get_photo($chat["from"] == $from ? $from : $to)) ? base_url().'uploads/users/noimage.png': base_url()."uploads/users/".$this->M_user->get_photo($chat["from"] == $from ? $from : $to);
            $output .='<div class="message-item '.($chat["from"] == $from ? 'out' : 'in').'">
                            <div class="message-avatar">
                               <figure class="avatar avatar-sm">
                                    <img src='.$profile4.' class="rounded-circle" alt="image">
                                </figure>
                                <div>
                                  <h5>'.$this->M_user->get_name($chat["from"] == $from ? $from : $to).'</h5>
                                  <div class="time">'.date('d, M Y h:m:s',strtotime($chat['sent'])).'</div>
                                </div>
                            </div>
                        </div>
                        <div class="message-item '.($chat["from"] == $from ? 'out' : 'in').'">
                            <div class="message-content">
                                <div class="message-text">'.$chat['message'].'</div>
                            </div>
                        </div>';
        }
                echo $output;
    }


	
	function likeUser($param=""){
        $data['liker'] = $this->input->post('liker');
        $data['liked'] = $this->input->post('liked');
        $data['operation'] = $this->input->post('operation');
        $data['time'] = date('Y-m-d h:m:s');
        $this->db->insert('tbllikes',$data);
        return;
	}
	function ChangeProfile($param=""){
		$this->db->where("id",$param);
		$this->db->delete('messages');
		redirect("admin/messages");
	}
	
	function AddPhoto(){
		$data['page_title']  = 'Add Testimonial';
		$this->load->view('admin/addTestimonial',$data);			
	}


	
	function deleteTestimonial($param=""){
		$this->db->where("id",$param);
		$this->db->delete('testimonials');
		redirect("admin/testimonials");
	}

	function addService(){
		$data['page_title']  = 'Add Service';
		$this->load->view('admin/addService',$data);			
	}

	function addUser(){
		$data['page_title']  = 'Add User';
		$this->load->view('admin/addUser',$data);			
	}

	function deleteUser($param=""){
		$this->db->where("user_id",$param);
		$this->db->delete('users');
		redirect("admin/users");
	}

	function deleteNote($param=""){
		$this->db->where("id",$param);
		$this->db->delete('notes');
		redirect("admin/notes");
	}

	function deleteService($param=""){
		$this->db->where("id",$param);
		$this->db->delete('services');
		redirect("admin/services");
	}

	function deleteValue($param=""){
		$this->db->where("id",$param);
		$this->db->delete('values');
		redirect("admin/values");
	}

	function saveService(){
		$data['service'] = $this->input->post('service');
		$this->db->insert('services',$data);
		redirect("admin/services");
	}

	function saveValue(){
		$data['value'] = $this->input->post('value');
		$data['desc'] = $this->input->post('desc');
		$this->db->insert('values',$data);
		redirect("admin/values");
	}

	function saveSettings(){
		$data['company'] = $this->input->post('company');
		$data['email1'] = $this->input->post('email1');
		$data['email2'] = $this->input->post('email2');
		$data['email3'] = $this->input->post('email3');
		$data['phone1'] = $this->input->post('phone1');
		$data['phone2'] = $this->input->post('phone2');
		$data['phone3'] = $this->input->post('phone3');
		$data['history'] = $this->input->post('history');
		$data['vision'] = $this->input->post('vision');
		$data['mission'] = $this->input->post('mission');
		$data['address'] = $this->input->post('address');
		$data['motto'] = $this->input->post('motto');
		$data['about'] = $this->input->post('about');
		$data['privacy'] = $this->input->post('privacy');
		$data['terms'] = $this->input->post('terms');
		$data['cookie_policy'] = $this->input->post('cookie_policy');
		$data['tcs'] = $this->input->post('tcs');
		$data['twitter'] = $this->input->post('twitter');
		$data['instagram'] = $this->input->post('instagram');
		$data['facebook'] = $this->input->post('facebook');
		$data['whatsapp'] = $this->input->post('whatsapp');
		$id = $this->input->post('id');
		$this->db->where("id",$id);
		$this->db->update('settings',$data);
		redirect("admin/settings");
	}

	function login(){   
		
 	  $username	=	$this->input->post('username');
	  $password	=	$this->input->post('password');	
	  $admin = $this->db->query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	  $row = $admin->row();
		if (isset($row))
		{
			$username   =	$row->username;
			$name		=	$row->name;
			$user_id	=	$row->user_id;
			$this->session->set_userdata('user_login', '1');
			$this->session->set_userdata('user_id',$user_id);
			$this->session->set_userdata('name',$name);
			redirect(base_url().'admin/dashboard', 'refresh');
		}
		
		$data['page_title']  = 'Login';
		$this->session->set_flashdata('message','Invalid Username or Password');
		return $this->load->view('admin/index',$data);
    }

	
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	
}