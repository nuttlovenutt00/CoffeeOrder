<?php
	class product_model extends CI_Model{

		public function __construct()
		{
			parent::__construct();
		}

		//โหลดข้อมูล ประเภทสินค้า
		public function loadviewtypeproduct(){
			$query = $this->db->get('type');
			
			return $query->result();
		}

		//โหลดข้อมูล หน่วยยับสินค้า
		public function loadviewunitproduct(){
			$query = $this->db->get('Unit');
			
			return $query->result();
		}

		//โหลดข้อมูล สินค้า
		public function loadviewproduct(){

			$this->db->select('p.*,t.t_name,u.UName');
			$this->db->from('Product as p');
			$this->db->join('type as t', 'p.PTpId = t.t_id_auto');
			$this->db->join('Unit as u', 'p.PUnit = u.UId');
			$query = $this->db->get();
			
			return $query->result();
		}

		//สร้างรหัสสินค้า
		public function autoid(){
			$this->db->select('PId');
			$this->db->order_by('PAutoId', 'DESC');
			$query = $this->db->get('Product');
			if($query->num_rows()>0){
				 $res2 = $query->result_array();
				 $res3=substr($res2[0]['PId'],1);
				 $res4=intval($res3)+1;
				$id_temp="P".$res4;

			}else{				
				$id_temp="P1";
			}
			
			return $id_temp;
		}

		public function saveinsertproduct(){

			$datain=array(
				"PId"=> $this->input->post('id_pro'),
				"PTpId"=> $this->input->post('type_pro'),
				"PName"=> $this->input->post('name_pro'),
				"PPrice"=> $this->input->post('p_pro'),		
				"PUnit"=> $this->input->post('unit_pro'),
				"PStatus"=>$this->input->post('status_pro')
			);
			$this->db->insert('Product',$datain);

		}

		public function checknamepro($name){
			$this->db->where('PName',$name);
			$query = $this->db->get('Product');
			if($query->num_rows()>0){
				$status="no";
			}else{
				$status="yes";
			}
			return $status;
		}

		public function delproduct(){
			$datain["id_pro"]=$this->input->post('id');

			$this->db->where('PId', $datain["id_pro"]);
			$query = $this->db->delete('Product');
			if($query){
				$status="yes";
			}else{
				$status="no";
			}
			return $status;
		}


	}
?>