<?php
	class UserMode extends CI_Model
	{
		private $tableName="users";
		function fetchAllUser()
		{
			return $this->db->get($this->tableName)->result();
		}
		// function fetchParticularUser($data)
		// {
			
		// }
		// function deleteUser($data)
		// {

		// }
		public function get_count() {
                return $this->db->count_all($this->tableName);
        }
        public function get_subscriber($limit, $start) {
            $this->db->limit($limit, $start);
            $this->db->order_by('id', 'DESC');
            $this->db->join('services','users.service_id=services.service_id');
            $query = $this->db->get($this->tableName);

    
            return $query->result();
        }
	}

?>