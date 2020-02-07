<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class stock extends CI_Controller
	{
		public function __construct()
		{
			parent ::__construct();
			$this->load->model("model_stock");
			
		}

		//affichage 
		public function affichStock()
		{
			
			$affichStock = $this->model_stock->AffichageStock();
			$this->load->view('EntrerStock.php',['affichStock' => $affichStock]);
		}

		//ajout
		public function ajoutNewStock()
		{	

			$this->form_validation->set_rules("libelle","Libellé","required");
			$this->form_validation->set_rules("presentation","Présentation");
			$this->form_validation->set_rules("paquet","paquet","required");
			$this->form_validation->set_rules("nbdetaille","nombre détaillé","required");
			$this->form_validation->set_rules("prix","prix","required");
			
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"libelle" => $this->input->post("libelle"),
					"presentation" => $this->input->post("presentation"),
					"paquet" => $this->input->post("paquet"),
					"nbdetaille" => $this->input->post("nbdetaille"),
					"prix" => $this->input->post("prix"),
				);

				if ($this->model_stock->insererStock($data)) {
					return redirect(base_url()."index.php/stock/affichStock");
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
			$this->affichStock();
		}


		//editer 
		public function editPatient($id)
		{
			$unPatient = $this->model_stock->getPatient($id);
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
			$this->form_validation->set_rules("consulter","Consultation");

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
					"consulter" => $this->input->post("consulter")
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
		public function deleteStock($idSt)
		{
			if ($this->model_stock->suppStock($idSt)) {
				return redirect("index.php/stock/affichStock");
			}
		}
	}
?>