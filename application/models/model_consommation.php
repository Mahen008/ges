<?php
	
	class model_consommation extends CI_Model
	{
		

		public function insererConsommation($data)
		{
			$this->db->insert("consommation",$data);
		}

		
	}

?>