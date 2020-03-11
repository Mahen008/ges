<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MedicamentEntree extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('model_medicamententree');
			$this->load->model('model_medicament');
		}

		//affichage medicament entree 
		public function affichMedicamentEntree()
		{
			$medicament = $this->model_medicament->getAllMedicament();
			$MedicamentEntree = $this->model_medicamententree->getAllMedicamentEntree();
			$this->load->view('affichMedicamentEntree',['medicament' => $medicament,'MedicamentEntree' => $MedicamentEntree]);
		}

		//ajout medicament entree
		public function creerMedicamentEntree()
		{
			$this->form_validation->set_rules("libelle","Libellé","required");
			$this->form_validation->set_rules("dateEntreeMed","Date d'entrée","required");
			$this->form_validation->set_rules("qteEntree","Quantité entrée","integer|required");
			$this->form_validation->set_rules("prix","Prix","integer|required");
			// $this->form_validation->set_rules("paquet","Paquet","required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"dateEntreeMed" => $this->input->post("dateEntreeMed"),
					"prixMed" => $this->input->post("prix"),
					"qteEntree" => $this->input->post("qteEntree"),
					// "paquet" => $this->input->post("paquet"),
					"medicament_id" => $this->input->post("libelle")
				);

				if ($this->model_medicamententree->insererMedicamentEntree($data)) {
					return redirect(base_url()."index.php/MedicamentEntree/affichMedicamentEntree");
				}

				else{
					return redirect(base_url()."index.php/MedicamentEntree/affichMedicamentEntree");
				}
			}
			else
			{
				$this->affichMedicamentEntree();
			}
		}

		//editer medicament entrée 
		public function editMedicamentEntree($idMedEntree)
		{
			$unMedicamentEntree = $this->model_medicamententree->getUnMedicamentEntree($idMedEntree);
			$medicament = $this->model_medicament->getAllMedicament();
			$this->load->view('editMedicamentEntree',['unMedicamentEntree' => $unMedicamentEntree,'medicament' => $medicament]);
		}


		

		
		//modifier medicament entree 
		public function updateMedicamentEntree($idMedEntree)
		{
			
			$this->form_validation->set_rules("dateEntreeMed","Date d'entrée","required");
			$this->form_validation->set_rules("qteEntree","Quantité entrée","integer|required");
			$this->form_validation->set_rules("prixMed","Prix","integer|required");
			// $this->form_validation->set_rules("paquet","Paquet","required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
			
				$data = array(
					"dateEntreeMed" => $this->input->post("dateEntreeMed"),
					"qteEntree" => $this->input->post("qteEntree"),
					"prixMed" => $this->input->post("prixMed")
					// "paquet" => $this->input->post("paquet")
				);

				if ($this->model_medicamententree->updateMedicamentEntree($idMedEntree,$data)) {
					return redirect(base_url()."index.php/MedicamentEntree/affichMedicamentEntree");
				}

				else{
					return redirect(base_url()."index.php/MedicamentEntree/affichMedicamentEntree");
				}

			}

			else
			{
                $this->editMedicamentEntree($idMedEntree);
                // echo validation_errors();
			}
		}

		//supprimer medicament entree
		public function deleteMedicamentEntree($idMedEntree)
		{
			if ($this->model_medicamententree->suppMedicamentEntree($idMedEntree)) {
				return redirect(base_url()."index.php/MedicamentEntree/affichMedicamentEntree");
			}
		}
	}
?>