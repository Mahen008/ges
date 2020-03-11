<?php
	
	class model_stock extends CI_Model
	{
		
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

		public function AffichageStock()
		{
			$affichStock = $this->db->get("stock");
			return $affichStock->result();
		}

		public function insererStock($data)
		{
			$this->db->insert("stock",$data);
		}

		//editer une stock
		public function getStock($id)
		{
			$unStock = $this->db->get_where('stock',array('id' => $id));
			if ($unStock->num_rows() > 0) {
				return $unStock->row();
			}
		}

		public function updateStock($id,$data)
		{
			return $this->db->where('id',$id)
							->update('stock',$data);
		}
		

		//supprimer une stock 
		public function suppStock($idSt)
		{
			return $this->db->delete('stock',['idSt' => $idSt]);
		}
	}

?>