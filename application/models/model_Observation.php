<?php
	
	class model_Observation extends CI_Model
	{
		public function AjoutConsultation($dataa)
		{
			$this->db->insert("observation",$dataa);
		}

		// public function AffichageObservation()
		// {
		// 	$affichObservation = $this->db->get("patient");
		// 	return $affichObservation->result();
		// }

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

		public function consultation($id)
		{
			$this->db->select(["patient.id","observation.idPatient","observation.idOb"]);
			$this->db->from("observation");
			$this->db->join("patient","patient.id=observation.idPatient");
			// $this->db->where("id"=>$id);
			$consult = $this->db->get();
				return $consult->row();

		}

	}
 
?>