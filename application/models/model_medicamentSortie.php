<?php
	Class Model_medicamentSortie extends CI_Model
	{
		//affichage n medicament sortie
		public function getAllMedicamentSortie()
		{
			
			$sql = "SELECT patient.*,medicamentsortie.*,medicament.*,date_format(`dateSortieMed`,'%d-%m-%Y') 
                    AS dateSortieMedic FROM medicamentsortie INNER JOIN patient 
                    ON patient.id = medicamentsortie.patient_id 
                    INNER JOIN medicament ON medicament.idMedicament = medicamentsortie.medicament_id 
                    ";
			$MedicamenSortie = $this->db->query($sql);
			return $MedicamenSortie->result();

		}
		
		//inserer un medicament sortie
		public function insererMedicamentSortie($data)
		{
			$this->db->insert('medicamentsortie',$data);
		}

		//editer un medicament sortie
		public function getUnMedicamentSortie($idMedicamentSorti)
		{
			$unMedicamenSortie = $this->db->get_where('medicamentsortie',array('idMedicamentSorti' => $idMedicamentSorti));
			if ($unMedicamenSortie->num_rows() > 0) {
				return $unMedicamenSortie->row();
			}
		}

		//modifier un medicament sortie
		public function updateMedicamentSortie($idMedicamentSorti,$data)
		{
			return $this->db->where('idMedicamentSorti',$idMedicamentSorti)
							->update('medicamentsortie',$data);
		}

		//supprimer un medicament sortie 
		public function suppMedicamentSortie($idMedicamentSorti)
		{
			return $this->db->delete('medicamentsortie',['idMedicamentSorti' => $idMedicamentSorti]);
		}
	}
?>