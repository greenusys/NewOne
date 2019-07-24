<?php
	class UserRoleModel extends CI_Model
	{
		public function getAllUserRole()
		{
			return $this->db->get('roles')->result();
		} 
	}

?>