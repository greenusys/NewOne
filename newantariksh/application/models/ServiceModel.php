<?php
	class ServiceModel extends CI_Model{
		public function getAllServices(){
			return $this->db->get('services')->result();
		}
	}
?>