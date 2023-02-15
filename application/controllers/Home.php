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

		function about(){
			$data['page_title']  = 'About';
			$this->load->view('about',$data);			
		}

		function privacy(){
			$data['page_title']  = 'Privacy';
			$this->load->view('privacy',$data);
		}

		function models(){
			$data['page_title']  = 'Models';
			$this->load->view('models',$data);
		}

		function how_it_works(){
			$data['page_title']  = 'How it Works';
			$this->load->view('how_it_works',$data);
		}
}