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

		
		

	}

?>