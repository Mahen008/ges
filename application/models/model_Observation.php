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

		public function suppObservation($idOb)
		{
			return $this->db->delete('patient',['idO' => $idO]);
		}

		public function getIdCons($idOb)
		{
			// $unObs = $this->db->get_where('observation',array('idOb' => $idOb));
			$unObs = $this->db->query("SELECT patient.*,observation.* FROM observation INNER JOIN patient ON patient.id = observation.idPatient");
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
		
		public function updateConsultation($idOb,$dataa)
		{
			return $this->db->where('idOb',$idOb)
							->update('observation',$dataa);
		}

		// public function updateArticle($idArt,$data)
		// {
		// 	return $this->db->where('idArt',$idArt)
		// 					->update('article',$data);
		// }

	}
 
?>