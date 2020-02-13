<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {



	public function index()
	{
		$this->data['title']="รับออร์เดอร์ลูกค้า";
		$this->data['description']="ChatBot Line Coffee";
		$this->data['keywords']="ChatBot,Line,Coffee,Management";
		$this->data['author']="Nutt";
		$this->data['nameweb']="Coffee Shop";
		$this->data['footer']="Coffee Shop";

		
		$this->load->view('template/header',$this->data);
		$this->load->view('template/bodystyle2');
		$this->load->view('menu/menu' ,$this->data);
		$this->load->view('order/order');
		$this->load->view('template/footer',$this->data);
	}
}