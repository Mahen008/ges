<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Medicament extends CI_Controller{

		public function __construct()
		{
			parent::__construct();
			$this->load->model('model_medicament');
		}

		//affichage des Medicaments
		public function affichMedicament()
		{
            $Medicaments = $this->model_medicament->getAllMedicament();
            
			$this->load->view('affichMedicament',[
				'Medicaments' => $Medicaments
			]);
		}
		
		//ajout des MedicamentS
		public function creeMedicament()
		{
			$this->form_validation->set_rules("libelle","Libellé","required");
			$this->form_validation->set_rules("nbrDetail","Nombre détaillé","integer|required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {

				$data = array(
					"libelle" => $this->input->post("libelle"),
					"nbrDetail" => $this->input->post("nbrDetail")
				);

				if ($this->model_medicament->insererMedicament($data)) 
				{
					$this->session->set_flashdata('message','Medicament ajouté avec succès');
				} 
				else 
				{
					$this->session->set_flashdata('message',"echec de l'ajout du medicament");
				}

				return redirect(base_url()."index.php/medicament/affichMedicament");
				
			} 
			else 
			{
				$this->affichMedicament();
			}	

		}

		//editer un Medicaments
		public function editMedicament($idMedicament)
		{
			$unMedicament = $this->model_medicament->getUnMedicament($idMedicament);
			$this->load->view('editMedicament',['unMedicament' => $unMedicament]);
			//echo $idMedicament;
		}

		
		//modifier un Medicament
		public function updateMedicament($idMedicament)
		{
			$this->form_validation->set_rules("libelle","Libellé","required");
			$this->form_validation->set_rules("nbrDetail","Nombre détaillé","integer|required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
                //echo "validation passé";
                
				$data = array(
					"libelle" => $this->input->post("libelle"),
					"nbrDetail" => $this->input->post("nbrDetail")
				);

				if ($this->model_medicament->updateMedicament($idMedicament,$data)) 
				{
					$this->session->set_flashdata('message','Medicament modifié avec succès');
				} 
				else 
				{
					$this->session->set_flashdata('message',"echec de modification du medicament");
				}

				return redirect(base_url()."index.php/medicament/affichMedicament");
			} 
			else 
			{
				$this->editMedicament($idMedicament);
			}	
		}

		
		//supprimer un Medicament
		public function deleteMedicament($idMedicament)
		{
			if ($this->model_medicament->suppMedicament($idMedicament)) {
				return redirect(base_url()."index.php/medicament/affichMedicament");
			}
		}

	}
?>