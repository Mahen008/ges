<?php
	class Model_Medicament extends CI_Model
	{
		//insertion d'un Medicament
		public function insererMedicament($data)
		{
			$this->db->insert('medicament',$data);
		}

		//affichage de tous les Medicaments
		public function getAllMedicament()
		{
			$Medicaments = $this->db->get('medicament');
			return $Medicaments->result();
		}

		//editer un Medicament
		public function getUnMedicament($idMedicament)
		{
			$unMedicament = $this->db->get_where('medicament',array('idMedicament' => $idMedicament));
			if ($unMedicament->num_rows() > 0) {
				return $unMedicament->row();
			}
		}

		//modifier un Medicament
		public function updateMedicament($idMedicament,$data)
		{
			return $this->db->where('idMedicament',$idMedicament)
							->update('medicament',$data);
		}

		//supprimer un Medicament
		public function suppMedicament($idMedicament)
		{
			return $this->db->delete('medicament',['idMedicament' => $idMedicament]);
		}

		//affichage n stock
		public function stock()
		{
			
			$sql = "SELECT medicament.*,medicamententree.*,medicamentsortie.*,(medicament.nbrDetail + medicamententree.qteEntree - medicamentsortie.qteSortie) 
					AS stock FROM medicament INNER JOIN medicamententree ON medicamententree.medicament_id = medicament.idMedicament 
					INNER JOIN medicamentsortie ON medicamentsortie.medicament_id = medicament.idMedicament 
                    ";
			$stock = $this->db->query($sql);
			return $stock->result();

		}
	}
?>