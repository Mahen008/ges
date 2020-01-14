<?php
	
	class Affichage extends CI_Controller
	{
			function __construct()
			{
				parent :: __construct();
				$this->load->model('model_Affichage');
				$this->load->model('model_Observation');
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

		
	}

?>