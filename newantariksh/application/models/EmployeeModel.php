<?php
	class EmployeeModel extends CI_Model
	{
		public function getAllEmployees(){
			$this->db->where('user_role_id',4);
			return $this->db->get('users')->result();
		}
	}
?>