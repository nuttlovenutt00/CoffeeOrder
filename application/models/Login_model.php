<?php
	class Login_model extends CI_Model{

		public function __construct()
		{
			parent::__construct();
		}

		public function checklogin($username,$password){
			$this->db->where('PSUserName',$username);
			$this->db->where('PSPassword',$password);
			$query = $this->db->get('Personal');

			return $query->row();
		}

	}
?>