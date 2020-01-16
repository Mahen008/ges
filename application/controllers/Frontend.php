<?php
	
	class Frontend extends CI_Controller
	{
			function __construct()
			{
				parent :: __construct();
				$this->load->model('model_Affichage');
				$this->load->model('model_Observation');
			}
		public function acceuil()
		{
			$this->load->view('index.php');
		}
		public function login()
		{
			$this->load->view('login.php');
		}

		
	}

?>