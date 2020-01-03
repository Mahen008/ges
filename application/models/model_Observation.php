<?php
	
	class model_Observation extends CI_Model
	{
		

		public function AffichageObservation()
		{
			$affichObservation = $this->db->get("patient");
			return $affichObservation->result();
		}

		public function suppObservation($id)
		{
			return $this->db->delete('patient',['id' => $id]);
		}

		public function getPatientObs($id)
		{
			$unPatientOb = $this->db->get_where('patient',array('id' => $id));
			if ($unPatientOb->num_rows() > 0) {
				return $unPatientOb->row();
			}
		}

	}

?>