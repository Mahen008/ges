<?php
	
	class model_Patient extends CI_Model
	{
		

		public function AffichagePatient()
		{
			$affichPatient = $this->db->get("patient");
			return $affichPatient->result();
		}

		public function insererPatient($data)
		{
			$this->db->insert("patient",$data);
		}

		//editer une Patient
		public function getPatient($id)
		{
			$unPatient = $this->db->get_where('patient',array('id' => $id));
			if ($unPatient->num_rows() > 0) {
				return $unPatient->row();
			}
		}

		public function updatePatient($id,$data)
		{
			return $this->db->where('id',$id)
							->update('patient',$data);
		}

		//supprimer une patient 
		public function suppPatient($id)
		{
			return $this->db->delete('patient',['id' => $id]);
		}
	}

?>