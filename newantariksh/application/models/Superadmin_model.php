<?php
	class Superadmin_Model extends CI_Model
	{

		public function insertCompany($data)
    	{
    		
    		$this->db->where($data);
            if(count($this->db->get('companyList')->result())==0)
			{
				if($this->db->insert("companyList",$data))
	            {
	                return true;
	            }
	            else
	            {
	                return false;
	            }	
			}
			else
			{
				return false;
			}
            
    	}
    	public function insertAdmin($data)
    	{
    		
    		$this->db->where($data);
            if(count($this->db->get('admintable')->result())==0)
			{
				if($this->db->insert("admintable",$data))
	            {
	                return true;
	            }
	            else
	            {
	                return false;
	            }	
			}
			else
			{
				return false;
			}
            
    	}
	}	
?>
