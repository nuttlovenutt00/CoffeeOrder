<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Login_model', 'Login');
	}

	public function index()
	{
		$this->load->view('Login/login_view');
	}

	public function checklogin()
	{
			$_POST = json_decode(file_get_contents('php://input'), TRUE);
			$username =$this->input->post('username',TRUE);
			$password =$this->input->post('password',TRUE);

			
			$hasLogin = $this->Login->checklogin($username,$password);

			if($hasLogin==true){
				$newdata = array(
		        'id_per'  => $hasLogin->PSAutoId,
		        'name_per'  => $hasLogin->PSName,
		);

		$this->session->set_userdata($newdata);

				$re["status"]="yes";
				$re["location"]="Dashboard";

			}else{
				$re["status"]="no";
			}

			$result= json_encode($re);
			print_r($result);
			return $result;
			

		
		
	}

}
