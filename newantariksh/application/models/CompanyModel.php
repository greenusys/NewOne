<?php
	class CompanyModel extends CI_Model
	{
		public function getAllCompany(){
			return $this->db->get('companylist')->result();
		}
	}
?>