<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Patient extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model("model_Patient");
			
		}

		//affichage 
		public function affichPatient()
		{
			
			$affichPat = $this->model_Patient->AffichagePatient();
			$this->load->view('affichPatient',['affichPat' => $affichPat]);
		}

		//ajout
		public function ajoutNewPatient()
		{	
			$this->form_validation->set_rules("name","Nom","required");
			$this->form_validation->set_rules("fname","Prénom","required");
			$this->form_validation->set_rules("ddn","Date de naissance","required");// name = "ddn", label : "Date de naissance"
			$this->form_validation->set_rules("adress","adresse","required");
			$this->form_validation->set_rules("phone","Téléphone","required");
			$this->form_validation->set_rules("phonepro","Téléphone du proche","required");
			$this->form_validation->set_rules("Consultation","Consulter","required");
			

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"nom" => $this->input->post("name"),
					"prenom" => $this->input->post("fname"),
					"DDN" => $this->input->post("ddn"),
					"adresse" => $this->input->post("adress"),
					"phone" => $this->input->post("phone"),
					//"Libelle" => $this->input->post("libelarticl"),
					"phoneProche" => $this->input->post("phonepro"),
					"consulter" => $this->input->post("consult")
				);

				if ($this->model_Patient->insererPatient($data)) {
					return redirect(base_url()."index.php/Patient/affichPatient");
				}

				else{
					return redirect(base_url()."index.php/Patient/affichPatient");
				}

			}

			else
			{
				$this->affichPatient();
			}
		}

		//editer 
		public function editPatient($id)
		{
			$unPatient = $this->model_Patient->getPatient($id);
			$this->load->view('editPatient',['unPatient' => $unPatient]);
		}

		//modifier
		public function updatePatient($id)
		{
			
			$this->form_validation->set_rules("name","Nom","required");
			$this->form_validation->set_rules("fname","Prénom","required");
			$this->form_validation->set_rules("ddn","Date de naissance","required");// name = "ddn", label : "Date de naissance"
			$this->form_validation->set_rules("adress","adresse","required");
			$this->form_validation->set_rules("phone","Téléphone","required");
			$this->form_validation->set_rules("phonepro","Téléphone du proche","required");
			$this->form_validation->set_rules("consult","Consultation","required");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
			
				$data = array(
					"nom" => $this->input->post("name"),
					"prenom" => $this->input->post("fname"),
					"DDN" => $this->input->post("ddn"),
					"adresse" => $this->input->post("adress"),
					"phone" => $this->input->post("phone"),
					//"Libelle" => $this->input->post("libelarticl"),
					"phoneProche" => $this->input->post("phonepro"),
					"consulter" => $this->input->post("consult")
				);

				var_dump($data);
				exit();

				if ($this->model_Patient->updatePatient($id,$data)) {
					return redirect(base_url()."index.php/Patient/affichPatient");
				}

				else{
					return redirect(base_url()."index.php/Patient/affichPatient");
				}

			}

			else
			{
				$this->editPatient($id);
			}
		}

		//supprimer une Patient
		public function deletePatient($id)
		{
			if ($this->model_Patient->suppPatient($id)) {
				return redirect("index.php/Patient/affichPatient");
			}
		}
	}
?>