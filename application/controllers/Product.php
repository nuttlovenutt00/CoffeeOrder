<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
		{
			parent::__construct();

			if($this->session->userdata('id_per')== null){
				//redirect(base_url());
				//exit;
			}

			$this->load->model('product_model', 'loadview');
		}

	public function index()
	{
		$this->data['title']="จัดการข้อมูลสินค้า";
		$this->data['description']="ChatBot Line Coffee";
		$this->data['keywords']="ChatBot,Line,Coffee,Management";
		$this->data['author']="Nutt";
		$this->data['nameweb']="Coffee Shop";
		$this->data['footer']="Coffee Shop";
		$this->data['breadcrumb']="จัดการข้อมูลสินค้า";

		$dataview['detailpro']=$this->loadview->loadviewproduct();
		$dataview['datatypepro']=$this->loadview->loadviewtypeproduct();
		$dataview['dataunitpro']=$this->loadview->loadviewunitproduct();
		$dataview['autoid']=$this->loadview->autoid();

		$this->load->view('template/header',$this->data);
		$this->load->view('template/bodystyle2');
		$this->load->view('menu/menu' ,$this->data);
		$this->load->view('product/product',$dataview);
		$this->load->view('template/footer',$this->data);
	}

	public function checkinsertpro()
	{
		$datain["name_pro"]=$this->input->post('name_pro');
		$datain["p_pro"]=$this->input->post('p_pro');

		$checkname=$this->loadview->checknamepro($datain["name_pro"]);

		if($datain["name_pro"]=="")
		{
			$res['status']="name_pro_no";
		}elseif($datain["p_pro"]=="")
		{
			$res['status']="p_pro_no";
		}else if($datain["p_pro"]<=0)
		{
			$res['status']="p_pro_zero";
		}else if($datain["p_pro"]=="" && $datain["name_pro"]==""){
			$res['status']="p_pro_noname_pro";
		}else if(!is_numeric($datain["p_pro"]))
		{
			$res['status']="p_pro_nint";
		}else if($checkname=="no"){
			$res['status']="p_pro_nametwo";
		}else{
			$res['status']="ok";
		}
		
		echo json_encode($res);
	}

	public function saveinsertpro()
	{
		
		$this->loadview->saveinsertproduct();			
		$res['idnew']=$this->loadview->autoid();
		$res['status']="ok";	
		echo json_encode($res);

	}

	public function delpro()
	{
		
		$q = $this->loadview->delproduct();		
		if($q=="yes"){
			$res['status']="ok";
		}else{
			$res['status']="no";

		}
		echo json_encode($res);
		

	}




}
