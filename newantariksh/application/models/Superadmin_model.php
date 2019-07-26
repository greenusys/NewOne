<?php
	class Superadmin_Model extends CI_Model
	{

		public function insertCompany($data)
    	{
    		
    		$this->db->where($data);
            if(count($this->db->get('companylist')->result())==0)
			{
				if($this->db->insert("companylist",$data))
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
    	public function updateCompany($data,$status)
    	{
    		$this->db->where($data);
    		if($this->db->update("companylist",$status))
    		{
    			return true;
    		}
    		else
    		{
    			return false;
    		}
    	}
    	public function fetchParticularAdmin($dat){
    		$this->db->where($dat);
			return $this->db->get('admintable')->result();
    	}
	}	
?>

