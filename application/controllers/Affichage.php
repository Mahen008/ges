<?php
	
	class Affichage extends CI_Controller
	{
			function __construct()
			{
				parent :: __construct();
				$this->load->model('model_Affichage');
				$this->load->model('model_Observation');
				$this->load->model('model_Patient');
			}
		
		public function voirPat($id)
		{
			$unPatientObs = $this->model_Observation->getPatientObs($id);
			$this->load->view('voirPat',['unPatientObs' => $unPatientObs]);
		}

		public function ficheMedical($id)
		{
			$affichPatient = $this->model_Observation->affichList();
			$affichCons = $this->model_Affichage->fichMedical($id);
			$this->load->view('ficheMedical',['affichCons' => $affichCons]);
		}

		public function affichListFicheMed()
		{
			$affichCon = $this->model_Affichage->affichConMed();
			$this->load->view('affichListFicheMed',['affichCon' => $affichCon]);

		}

		public function affichListMod()
		{
			$affichCo = $this->model_Affichage->affichConMed();
			$this->load->view('affichListMod',['affichCo' => $affichCo]);

		}

		public function editPatCons($idOb)
		{
			$patCons = $this->model_Affichage->getIdCons($idOb);
			$this->load->view('editPatCons',['patCons' => $patCons]);
		}

		public function updateConsultation($idOb)
		{
			$this->form_validation->set_rules("name","name");
			$this->form_validation->set_rules("nephro","nephro");
			$this->form_validation->set_rules("dateDiag","dateDiag");
			$this->form_validation->set_rules("dateDebut","dateDebut");
			$this->form_validation->set_rules("hist","hist");
			$this->form_validation->set_rules("ant","ant");
			$this->form_validation->set_rules("como","como");
			$this->form_validation->set_rules("Etat","Etat",);
			$this->form_validation->set_rules("groupSan","groupSan");
			$this->form_validation->set_rules("attenteGre","attenteGre");
			$this->form_validation->set_rules("allergie","allergie",);

			$this->form_validation->set_rules("vasc","vasc",);
			$this->form_validation->set_rules("pose","pose",);
			$this->form_validation->set_rules("PremiereUtil","PremiereUtil");
			$this->form_validation->set_rules("Aablation","Aablation");
			$this->form_validation->set_rules("coms","coms",);

			$this->form_validation->set_rules("DateSerVHC","DateSerVHC");
			$this->form_validation->set_rules("statutSerVHC","statutSerVHC");
			$this->form_validation->set_rules("DateSerVBH","DateSerVBH");
			$this->form_validation->set_rules("statutSerVBH","statutSerVBH");
			$this->form_validation->set_rules("DateSerHIV","DateSerHIV");
			$this->form_validation->set_rules("statutSerHIV","statutSerHIV");
			$this->form_validation->set_rules("DateSerCMV","DateSerCMV");
			$this->form_validation->set_rules("statutSerCMV","statutSerCMV");
			$this->form_validation->set_rules("DateSerEBV","DateSerEBV");
			$this->form_validation->set_rules("statutSerEBV","statutSerEBV");
			$this->form_validation->set_rules("DateAgeVHC","DateAgeVHC");
			$this->form_validation->set_rules("statutAgeVHC","statutAgeVHC");
			$this->form_validation->set_rules("DateAgeVHB","DateAgeVHB");
			$this->form_validation->set_rules("statutAgeVHB","statutAgeVHB");
			$this->form_validation->set_rules("DateAgeHIV","DateAgeHIV");
			$this->form_validation->set_rules("statutAgeHIV","statutAgeHIV");
			$this->form_validation->set_rules("DateAgeCMV","DateAgeCMV");
			$this->form_validation->set_rules("statutAgeCMV","statutAgeCMV");
			$this->form_validation->set_rules("DateAgeEBV","DateAgeEBV");
			$this->form_validation->set_rules("statutAgeEBV","statutAgeEBV");

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');


			if ($this->form_validation->run() == TRUE) {
				//echo "marina";
				$dataa = array(
					"idPatient" => $this->input->post("name"),
					"neuphroInit" => $this->input->post("nephro"),
					"dateDiag" => $this->input->post("dateDiag"),
					"debutHemo" => $this->input->post("dateDebut"),
					"histMaladie" => $this->input->post("hist"),
					"Antecedents" => $this->input->post("ant"),
					"Comorbidites" => $this->input->post("como"),
					"etatGenAct" => $this->input->post("Etat"),
					"groupSang" => $this->input->post("groupSan"),
					"attenteGref" => $this->input->post("attenteGre"),	
					"allergies" => $this->input->post("allergie"),

					"acceVasc" => $this->input->post("vasc"),
					"pose" => $this->input->post("pose"),
					"PremiereUse" => $this->input->post("PremiereUtil"),
					"Arret" => $this->input->post("Aablation"),
					"coms" => $this->input->post("coms"),

					"DatSerVHC" => $this->input->post("DateSerVHC"),
					"statSerVHC" => $this->input->post("statutSerVHC"),
					"DatSerVBH" => $this->input->post("DateSerVBH"),
					"statSerVBH" => $this->input->post("statutSerVBH"),
					"DatSerHIV" => $this->input->post("DateSerHIV"),
					"statSerHIV" => $this->input->post("statutSerHIV"),
					"DatSerCMV" => $this->input->post("DateSerCMV"),
					"statSerCMV" => $this->input->post("statutSerCMV"),
					"DatSerEBV" => $this->input->post("DateSerEBV"),
					"statSerEBV" => $this->input->post("statutSerEBV"),
					"DatAgeVHC" => $this->input->post("DateAgeVHC"),
					"statAgeVHC" => $this->input->post("statutAgeVHC"),
					"DatAgeVHB" => $this->input->post("DateAgeVHB"),
					"statAgeVHB" => $this->input->post("statutAgeVHB"),
					"DatAgeHIV" => $this->input->post("DateAgeHIV"),
					"statAgeHIV" => $this->input->post("statutAgeHIV"),
					"DatAgeCMV" => $this->input->post("DateAgeCMV"),
					"statAgeCMV" => $this->input->post("statutAgeCMV"),
					"DatAgeEBV" => $this->input->post("DateAgeEBV"),
					"statAgeEBV" => $this->input->post("statutAgeEBV")
														
				);

				if ($this->model_Observation->updateConsultation($idOb,$dataa)){
					$this->session->set_flashdata("message","la consultation a été bien modifier");
				} 
				else 
				{
					$this->session->set_flashdata("message","la consultation n'a pas été modifier");
				}

				//return redirect(base_url()."abonne/ajouAbonne");
				return redirect(base_url()."index.php/Affichage/affichListMod");
			} 
			else {
				$this->updateConsultation($idOb);
				// MISEJ+HO L ERREUUR menamena
				//echo validation_errors();
				/*mapseho n 
				The Code du Abonne field is required.
				The Libellé field is required.
				*/
			}

		}

	}

?>