<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

		function index(){
			$data['page_title']  = 'Login';
			$this->load->view('login',$data);			
		}

		function register(){
			$data['page_title']  = 'Register';
			$this->load->view('register',$data);			
		}

		function complaints(){
			$data['page_title']  = 'Complaints Handling Mechanism';
			$this->load->view('complaints',$data);			
		}

		function mission(){
			$data['page_title']  = 'Mission';
			$this->load->view('mission',$data);			
		}

		function testimony(){
			$data['page_title']  = 'Testimonies';
			$this->load->view('testimony',$data);			
		}

		function history(){
			$data['page_title']  = 'History';
			$this->load->view('history',$data);			
		}

		function applyLoan($param=""){
			$data['page_title']  = 'Apply Loan';
			$data['productId'] = $param;
			$this->load->view('applyLoan',$data);			
		}

		function contact(){
			$data['page_title']  = 'Contact Us';
			$this->load->view('contact',$data);			
		}

		function team(){
			$data['page_title']  = 'Team';
			$this->load->view('team',$data);			
		}

		function careers(){
			$data['page_title']  = 'Careers';
			$this->load->view('careers',$data);			
		}

		function jobDetails($param=""){
			$data['page_title']  = 'Careers';
			$data['id']  = $param;
			$data['edit']  = $this->db->get_where('jobs',array('id'=>$param))->result_array();
			$this->load->view('jobDetails',$data);			
		}

		function loans(){
			$data['page_title']  = 'Products';
			$this->load->view('loans',$data);			
		}

		function client_protection(){
			$data['page_title']  = 'Client Protection';
			$this->load->view('client_protection',$data);			
		}

		function privacy(){
			$data['page_title']  = 'Privacy Policy';
			$this->load->view('privacy',$data);			
		}
		
		function terms(){
			$data['page_title']  = 'Terms of Use';
			$this->load->view('terms',$data);			
		}

		function vision(){
			$data['page_title']  = 'Our Vision';
			$this->load->view('vision',$data);			
		}

		function values(){
			$data['page_title']  = 'Our Values';
			$this->load->view('values',$data);			
		}

		function clients(){
			$data['page_title']  = 'Our Clients';
			$this->load->view('clients',$data);			
		}

		function cookie_policy(){
			$data['page_title']  = 'Cookie Policy';
			$this->load->view('cookie_policy',$data);			
		}

		function tcs(){
			$data['page_title']  = 'Terms & Conditions';
			$this->load->view('tcs',$data);			
		}

		function slider_view($param=""){
			$data['page_title']  = $this->db->get_where('slides',array('id'=>$param))->row()->title;;
			$data['id']  = $param;
			$this->load->view('slider_view',$data);			
		}

		function saveMessage(){
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['subject'] = $this->input->post('subject');
			$data['message'] = $this->input->post('message');
			$data['date_sent'] = date('Y-m-d h:m:i');
			$this->db->insert('messages',$data);
			return;
		}

		function saveComplaint(){
			$data['name'] = $this->input->post('name');
			$data['phone'] = $this->input->post('phone');
			$data['branch'] = $this->input->post('branch');
			$data['complaint'] = $this->input->post('complaint');
			$data['relationship'] = $this->input->post('relationship');
			$data['date_sent'] = date('Y-m-d h:m:i');
			$this->db->insert('complaints',$data);
			return;
		}

		function applyLoani(){
			$data['name'] = $this->input->post('name');
			$data['email'] = $this->input->post('email');
			$data['amount'] = $this->input->post('amount');
			$data['phone'] = $this->input->post('phone');
			$data['occupation'] = $this->input->post('occupation');
			$data['product'] = $this->input->post('product');
			$data['address'] = $this->input->post('address');
			$data['district'] = $this->input->post('district');
			$data['date_applied'] = date('Y-m-d h:m:i');
			$this->db->insert('applications',$data);
			//$to = 'briannkhata@gmail.com';
			$to = $this->db->get('settings')->row()->email1;
			$subject = "LOAN APPLICATION NOTIFICATION";
			$message = "You have LOAN APPLICATION through portal from".$data['name'].' with email '.$data['email'].' and phone '.$data['phone']." Please login in and attend to the applicant";
			$this->sendEmail($to,$subject,$message);
			return;
		}
		
		function sendEmail($to,$subject,$message){
			$config = array(
				'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
				'smtp_host' => 'smtp.savannamw.com', 
				'smtp_port' => 465,
				'smtp_user' => 'info@savannamw.com',
				'smtp_pass' => 'Mbola20!50',
				'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
				'mailtype' => 'html', //plaintext 'text' mails or 'html'
				'smtp_timeout' => '4', //in seconds
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE
			);
        	$this->load->library('email',$config);
			$from = $this->config->item('smtp_user');
			$this->email->set_newline("\r\n");
			$this->email->from($from);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();
		
		}



		
}