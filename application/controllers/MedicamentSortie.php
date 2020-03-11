<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class MedicamentSortie extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model('model_medicamentsortie');
            $this->load->model('model_medicament');
            $this->load->model("model_Patient");
		}

		//affichage medicament sortie 
		public function affichMedicamentSortie()
		{
			$data['medicament'] = $this->model_medicament->getAllMedicament();
            $data['MedicamentSortie'] = $this->model_medicamentsortie->getAllMedicamentSortie();
            $data['patient'] = $this->model_Patient->AffichagePatient();
			$this->load->view('affichMedicamentSortie',$data);
		}

		//ajout medicament sortie
		public function creerMedicamentSortie()
		{
			$this->form_validation->set_rules("patient","Patient","required");
			$this->form_validation->set_rules("medicament","Medicament","required");
			$this->form_validation->set_rules("qteSortie","Quantité sortie","integer|required");
			$this->form_validation->set_rules("dateSortieMed","Date de sortie","required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"patient_id" => $this->input->post("patient"),
					"medicament_id" => $this->input->post("medicament"),
					"qteSortie" => $this->input->post("qteSortie"),
					"dateSortieMed" => $this->input->post("dateSortieMed"),
				);

				if ($this->model_medicamentsortie->insererMedicamentSortie($data)) {
					return redirect(base_url()."index.php/MedicamentSortie/affichMedicamentSortie");
				}

				else{
					return redirect(base_url()."index.php/MedicamentSortie/affichMedicamentSortie");
				}
			}
			else
			{
				$this->affichMedicamentSortie();
			}
		}

		//editer medicament entrée 
		public function editMedicamentSortie($idMedicamentSorti)
		{
			$unMedicamentSortie = $this->model_medicamentsortie->getUnMedicamentSortie($idMedicamentSorti);
			$medicament = $this->model_medicament->getAllMedicament();
			$this->load->view('editMedicamentSortie',['unMedicamentSortie' => $unMedicamentSortie,'medicament' => $medicament]);
		}


		

		
		//modifier medicament sortie 
		public function updateMedicamentSortie($idMedicamentSorti)
		{
			
			$this->form_validation->set_rules("dateSortieMed","Date de sortie","required");
			$this->form_validation->set_rules("qteSortie","Quantité sortie","integer|required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
			
				$data = array(
					"dateSortieMed" => $this->input->post("dateSortieMed"),
					"qteSortie" => $this->input->post("qteSortie"),
				);

				if ($this->model_medicamentsortie->updateMedicamentSortie($idMedicamentSorti,$data)) {
					return redirect(base_url()."index.php/MedicamentSortie/affichMedicamentSortie");
				}

				else{
					return redirect(base_url()."index.php/MedicamentSortie/affichMedicamentSortie");
				}

			}

			else
			{
                $this->editMedicamentSortie($idMedicamentSorti);
                // echo validation_errors();
			}
		}

		//supprimer medicament sortie
		public function deleteMedicamentSortie($idMedicamentSorti)
		{
			if ($this->model_medicamentsortie->suppMedicamentSortie($idMedicamentSorti)) {
				return redirect(base_url()."index.php/MedicamentSortie/affichMedicamentSortie");
			}
		}
	}
?>