<?php
	
	class model_stock extends CI_Model
	{
		

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
		public function suppStock($id)
		{
			return $this->db->delete('stock',['id' => $id]);
		}
	}

?>