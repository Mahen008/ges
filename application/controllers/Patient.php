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
			$patients = $this->model_Patient->CountPatient();

			$this->load->view('affichPatient',['affichPat' => $affichPat, 'patients' => $patients]);
		}

		//ajout
		public function ajoutNewPatient()
		{	
   			$consulter = $this->input->post('consulter');

			$this->form_validation->set_rules("name","Nom","required");
			$this->form_validation->set_rules("fname","Prénom");
			$this->form_validation->set_rules("ddn","Date de naissance","required");// name = "ddn", label : "Date de naissance"
			$this->form_validation->set_rules("adress","adresse","required");
			$this->form_validation->set_rules("phone","Téléphone","required");
			$this->form_validation->set_rules("phonepro","Téléphone du proche","required");
			$this->form_validation->set_rules("Consultation","Consulter");
			$this->form_validation->set_rules("type","type de scéance");

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

					// tsy mety n implode 
					"consulter"=>json_encode(implode(",",$consulter)),
					// "consulter" => $this->input->post("consulter"),
					"type" => $this->input->post("type")
				);

				if ($this->model_Patient->insererPatient($data)) {
					return redirect(base_url()."index.php/Patient/affichPatient");
				}

				else{
					$msg = "not save" ;
				}

			}
			else
			{
				$msg = "probleme de validation formulaire";
			}
			$this->session->set_flashdata('msg', $msg);
			$this->affichPatient();
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
			$this->form_validation->set_rules("fname","Prénom");
			$this->form_validation->set_rules("ddn","Date de naissance","required");// name = "ddn", label : "Date de naissance"
			$this->form_validation->set_rules("adress","adresse","required");
			$this->form_validation->set_rules("phone","Téléphone","required");
			$this->form_validation->set_rules("phonepro","Téléphone du proche","required");
			$this->form_validation->set_rules("type","type de scéance");

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
					// "consulter"=>json_encode(implode(",",$consulter))
					"type" => $this->input->post("type")
				);

				// var_dump($data);
				// exit();

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

		public function user_action()
		{

			// if( isset( $_POST["action"]) ) 
			// { 
				$data = [
					'consulter' => $this->input->post('consulté')
				];

				$this->model_Patient->updatePatient($this->input->post("patient_id"),$data);

				redirect(base_url()."index.php/Observation/afficheConsultation");

				// echo "salama aby";
			// }
		}

		//supprimer une Patient
		public function deletePatient($id)
		{
			if ($this->model_Patient->suppPatient($id)) {
				return redirect("Patient/affichPatient");
			}
		}

		// public function affichPatients()
		// {
			
		// 	$NbPat = $this->model_Patient->CountPatient();
		// 	$this->load->view('index',['NbPat' => $NbPat]);
		// }

		// public function affichAttend()s
		// {
			
		// 	$NbAtt = $this->model_Patient->Countattend();
		// 	// var_dump($NbAtt);
		// 	// exit();
		// 	$this->load->view('index',['NbAtt' => $NbAtt]);
		// }
	}
?>