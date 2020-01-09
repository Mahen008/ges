<?php
	
	class model_Affichage extends CI_Model
	{
				
		public function fichMedical($id)
		{

			// $this->db->select(["abonnes.nom","abonnes.zone","abonnes.addresse","abonnes.tourne","abonnes.codeTVA","abonnes.ZoneSTX","categorie.libelle_cat","releve.ancienIndexElec","releve.nouvelleIndexElec","releve.dateAI","releve.ancienIndexEau","releve.nouvelleIndexEau","releve.dateNI","abonnes.zone","abonnes.carnet","abonnes.compte","abonnes.sous_compte","compteur.numCompteur","tarif_eau.PU_tarif_eau","(releve.nouvelleIndexElec - releve.ancienIndexElec) AS consommationElec","(releve.nouvelleIndexEau - releve.ancienIndexEau) AS consommationEau","premTranche","(releve.nouvelleIndexElec - releve.ancienIndexElec - releve.premTranche) AS deuxiemeTranche","tarif_elec.redevance","prixPrem","prixDeux","(releve.premTranche * releve.prixPrem) AS MontantPrem","(tarif_eau.PU_tarif_eau * (releve.nouvelleIndexEau - releve.ancienIndexEau)) AS MontantEau","((releve.nouvelleIndexElec - releve.ancienIndexElec - releve.premTranche)*`prixDeux`) AS MontantDeux","( ( releve.premTranche * releve.prixPrem ) + ( ( releve.nouvelleIndexElec - releve.ancienIndexElec - releve.premTranche ) * (releve.`prixDeux`) ) + (tarif_elec.redevance) ) AS SousTotalJirama","releve.coefDeTranche","releve.consNbJr","tarif_elec.PU_tarif_elec","tarif_elec.PS","releve.taxeCommunal","releve.surTax","releve.RedevFond","(releve.taxeCommunal + releve.surTax + releve.RedevFond) AS SousTotalEtat","( ( releve.premTranche * releve.prixPrem ) + ( ( releve.nouvelleIndexElec - releve.ancienIndexElec - releve.premTranche ) * (releve.`prixDeux`) ) + (tarif_elec.redevance) ) + (releve.taxeCommunal + releve.surTax + releve.RedevFond) AS TotalElec" , "( ( releve.premTranche * releve.prixPrem ) + ( ( releve.nouvelleIndexElec - releve.ancienIndexElec - releve.premTranche ) * (releve.`prixDeux`) ) + (tarif_elec.redevance) ) + (releve.taxeCommunal + releve.surTax + releve.RedevFond + (tarif_eau.PU_tarif_eau * (releve.nouvelleIndexEau - releve.ancienIndexEau))) AS Total"]);
			// $this->db->from("abonnes");
			// $this->db->join("tut","tut.code_tut = abonnes.ZoneSTX");
			// $this->db->join("tva","tva.code_tva = abonnes.codeTVA");
			// $this->db->join("categorie","categorie.code_cat = abonnes.Categ");
			// $this->db->join("compteur","compteur.numCompteur = abonnes.comp");
			// $this->db->join("tarif_elec","tarif_elec.code_tarif_elec = abonnes.t_elec");
			// $this->db->join("tarif_eau","tarif_eau.code_tarif_eau = abonnes.t_eau");
			// $this->db->join("releve","releve.numCompteur = compteur.numCompteur");
			// $this->db->where(array("id" => $id));
			// $consultFact = $this->db->get();
			// return $consultFact->row();

			$this->db->select(["observation.nom", "observation.prenom", "observation.adresse", "observation.DDN", "observation.phone", "observation.phoneProche","patient.DDN", "TIMESTAMPDIFF(YEAR, DDN, CURDATE()) AS age"]);
			$this->db->from("observation");
			$this->db->join("patient","patient.id = observation.idPatient");
			$this->db->where(array("id" => $id));
			$affichConsult = $this->db->get();
			return $affichConsult->row();

			// SELECT "observation.nom", "observation.prenom", "observation.adresse", "observation.DDN", "observation.phone", "observation.phoneProche","patient.DDN", "TIMESTAMPDIFF(YEAR, DDN, CURDATE()) AS age" FROM `observation` JOIN patient WHERE patient.id = observation.idPatient 
		}
	}

?>