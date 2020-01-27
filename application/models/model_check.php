<?php
	
	class Model_Check extends CI_Model
	{
		public function insererCheck($data)
		{
			$this->db->insert("personnel",$data);
		}
	}
?>