<?php
	
	class planning extends CI_Controller
	{
			function __construct()
			{
				parent :: __construct();
				$this->load->model('model_Affichage');
				$this->load->model('model_Observation');
				$this->load->model('model_Patient');
				$this->load->model("model_stock");
			}
		
		public function affichPlanning()
		{
			
			$this->load->view('affichPlanning',[]);

		}

	}

?>