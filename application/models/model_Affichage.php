<?php
	
	class model_Affichage extends CI_Model
	{
		public function affichConMed()
		{

			// $this->db->select(['patient.nom', 'patient.prenom', 'patient.adresse', 'patient.DDN', 'patient.phone', 'patient.phoneProche','patient.DDN', 'TIMESTAMPDIFF(YEAR, DDN, CURDATE()) AS age','observation.neuphroInit','observation.dateDiag','observation.debutHemo', 'observation.histMaladie', 'observation.Antecedents', 'observation.Comorbidites', 'observation.etatGenAct', 'observation.groupSang', 'observation.attenteGref', 'observation.allergies', 'observation.acceVasc', 'observation.pose', 'observation.PremiereUse', 'observation.Arret', 'observation.coms', 'observation.DatSerVHC', 'observation.statSerVHC', 'observation.DatSerVBH', 'observation.statSerVBH', 'observation.DatSerHIV', 'observation.statSerHIV', 'observation.DatSerCMV', 'observation.statSerCMV', 'observation.DatSerEBV', 'observation.statSerEBV', 'observation.DatAgeVHC', 'observation.statAgeVHC', 'observation.DatAgeVHB', 'observation.statAgeVHB', 'observation.DatAgeHIV', 'observation.statAgeHIV', 'observation.DatAgeCMV', 'observation.statAgeCMV', 'observation.DatAgeEBV', 'observation.statAgeEBV']);
			// $this->db->from('observation');
			// $this->db->join('patient','patient.id = observation.idPatient');
			// $this->db->where(array('id' => $id));
			// $affichConsult = $this->db->get();

			$affichCon = $this->db->query("SELECT patient.*,observation.* FROM patient INNER JOIN observation ON observation.idPatient = patient.id");
			return $affichCon->result();
		}

		// public function affichConModif()
		// {

		// 	$affichModif = $this->db->query("SELECT patient.*,observation.* FROM patient INNER JOIN observation ON observation.idPatient = patient.id");
		// 	return $affichModif->row();
		// }
				
		public function fichMedical($id)
		{

			$this->db->select(['patient.nom', 'patient.prenom', 'patient.adresse', 'patient.DDN', 'patient.phone', 'patient.phoneProche','patient.DDN', 'TIMESTAMPDIFF(YEAR, DDN, CURDATE()) AS age','observation.neuphroInit','observation.dateDiag','observation.debutHemo', 'observation.histMaladie', 'observation.Antecedents', 'observation.Comorbidites', 'observation.etatGenAct', 'observation.groupSang', 'observation.attenteGref', 'observation.allergies', 'observation.acceVasc', 'observation.pose', 'observation.PremiereUse', 'observation.Arret', 'observation.coms', 'observation.DatSerVHC', 'observation.statSerVHC', 'observation.DatSerVBH', 'observation.statSerVBH', 'observation.DatSerHIV', 'observation.statSerHIV', 'observation.DatSerCMV', 'observation.statSerCMV', 'observation.DatSerEBV', 'observation.statSerEBV', 'observation.DatAgeVHC', 'observation.statAgeVHC', 'observation.DatAgeVHB', 'observation.statAgeVHB', 'observation.DatAgeHIV', 'observation.statAgeHIV', 'observation.DatAgeCMV', 'observation.statAgeCMV', 'observation.DatAgeEBV', 'observation.statAgeEBV']);
			$this->db->from('observation');
			$this->db->join('patient','patient.id = observation.idPatient');
			$this->db->where(array('id' => $id));
			$affichConsult = $this->db->get();
			return $affichConsult->row();
		}

		public function getIdCons($idOb)
		{
			// $unObs = $this->db->get_where('observation',array('idOb' => $idOb));
			$unObs = $this->db->get_where('observation',array('idOb' => $idOb));
			if ($unObs->num_rows() > 0) {
				return $unObs->row();
			}
		}

		
	}

?>