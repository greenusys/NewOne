<?php
	class UserRoleModel extends CI_Model
	{
		public function getAllUserRole()
		{
			return $this->db->get('roles')->result();
		} 
		function insertRole($data)
        {
            if($this->db->insert('roles', $data))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
	}

?>