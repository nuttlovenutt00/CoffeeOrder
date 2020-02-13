<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			if($this->session->userdata('id_per')== null){
				redirect(base_url());
				exit;
			}
		}

	public function index()
	{
		$this->data['title']="Dashboard";
		$this->data['description']="ChatBot Line Coffee";
		$this->data['keywords']="ChatBot,Line,Coffee,Management";
		$this->data['author']="Nutt";
		$this->data['nameweb']="Coffee Shop";
		$this->data['footer']="Coffee Shop";
		$this->data['breadcrumb']="Dashboard";

		$this->load->view('template/header',$this->data);
		$this->load->view('template/bodystyle');
		$this->load->view('menu/menu' ,$this->data);
		$this->load->view('dashboard/dashboard' ,$this->data);
		$this->load->view('template/footer',$this->data);
	}

}
