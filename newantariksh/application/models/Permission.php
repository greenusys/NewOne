<?php
	class Permission extends CI_Model
	{
		public function getAllPermission()
		{
			return $this->db->get('user_rights')->result();
		} 
	}

?>