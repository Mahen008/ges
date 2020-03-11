<?php
	
	class consommation extends CI_Controller
	{
			function __construct()
			{
				parent :: __construct();
				$this->load->model('model_Affichage');
				$this->load->model('model_Observation');
				$this->load->model('model_Patient');
				$this->load->model("model_stock");
				$this->load->model("model_consommation");
				
			}
		
		public function afficheConsommation()
		{
			$affichCo = $this->model_Affichage->affichConMed();
			$affichStock = $this->model_stock->AffichageStock();
			$this->load->view('afficheConsommation',['affichCo' => $affichCo, 'affichStock' => $affichStock]);
		}
		public function ajoutConsommation()
		{	
			$this->form_validation->set_rules("idPat","idPat","required");
			$this->form_validation->set_rules("idSt","idSt","required");
			$this->form_validation->set_rules("date","date","required");
			$this->form_validation->set_rules("nd","nd","required");
			$this->form_validation->set_rules("pt","pt","required");
			

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) {
				
				$data = array(
					"idPat" => $this->input->post("idPat"),
					"idStock" => $this->input->post("idSt"),
					"nbr" => $this->input->post("nd"),
					"pqt" => $this->input->post("pt"),
					"dateCons" => $this->input->post("date")
				);

				if ($this->model_consommation->insererConsommation($data)) {
					return redirect(base_url()."index.php/consommation/afficheConsommation");
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
			$this->afficheConsommation();
		}
	}

?>