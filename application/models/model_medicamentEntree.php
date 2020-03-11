<?php
	Class Model_medicamentEntree extends CI_Model
	{
		//affichage n medicament entree
		public function getAllMedicamentEntree()
		{
			
			$sql = "SELECT medicament.*,medicamententree.*,date_format(medicamententree.dateEntreeMed,'%d-%m-%Y') 
                    AS `dateEntreeMedic` FROM medicament 
                    INNER JOIN medicamententree ON medicamententree.medicament_id = medicament.idMedicament
                    ";
			$MedicamentEntree = $this->db->query($sql);
			return $MedicamentEntree->result();

		}
		
		//inserer un medicament entrée
		public function insererMedicamentEntree($data)
		{
			$this->db->insert("medicamententree",$data);
		}

		//editer un medicament entrée
		public function getUnMedicamentEntree($idMedEntree)
		{
			$unMedicamentEntree = $this->db->get_where('medicamententree',array('idMedEntree' => $idMedEntree));
			if ($unMedicamentEntree->num_rows() > 0) {
				return $unMedicamentEntree->row();
			}
		}

		//modifier un medicament entrée
		public function updateMedicamentEntree($idMedEntree,$data)
		{
			return $this->db->where('idMedEntree',$idMedEntree)
							->update('medicamententree',$data);
		}

		//supprimer un medicament entrée 
		public function suppMedicamentEntree($idMedEntree)
		{
			return $this->db->delete('medicamententree',['idMedEntree' => $idMedEntree]);
		}
	}
?>