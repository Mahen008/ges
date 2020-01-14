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

		public function affichList()
		{
			$affichListeCons = $this->db->select(['patient.nom', 'patient.prenom','observation.idOb']);
			$this->db->from('observation');
			$this->db->join('patient','patient.id = observation.idPatient');
			// $this->db->where(array('id' => $id));
			$affichListeCons = $this->db->get();
			return $affichListeCons->result();
		}

		public function suppObservation($id)
		{
			return $this->db->delete('patient',['id' => $id]);
		}

		public function getObs($id)
		{
			$unObs = $this->db->get_where('observation',array('id' => $id));
			if ($unObs->num_rows() > 0) {
				return $unObs->row();
			}
		}

		public function consultation($id)
		{
			$this->db->select(["patient.id","observation.idPatient","observation.idOb"]);
			$this->db->from("observation");
			$this->db->join("patient","patient.id=observation.idPatient");
			$this->db->where(array("id" => $id));
			$consult = $this->db->get();
				return $consult->row();

		}

	}
 
?>