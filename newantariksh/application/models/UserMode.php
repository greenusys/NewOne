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
        function form_insert($data,$newdata,$radcheck,$radcheck1,$radcheck2,$radcheck3,$newrad)
        {
            if($this->db->insert('users', $data))
            {
                if($this->db->insert('radcheck',$radcheck)){
                    $this->db->insert('radcheck',$radcheck1);
                    $this->db->insert('radcheck',$radcheck2);
                    $this->db->insert('radcheck',$radcheck3);
                    // $this->db->insert('radcheck',$radcheck4);
                    $this->db->insert('radusergroup',$newdata);
                    $this->db->insert('radreply',$newrad);
                	return  1;
                }
                else{
                    return  0;
                }
            }
            else
            {
                return  0;
            }
        }
	}

?>