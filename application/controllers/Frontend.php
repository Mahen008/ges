<?php
	
	class Frontend extends CI_Controller
	{
		public	function __construct()
		{
			parent :: __construct();
			$this->load->model('model_Affichage');
			$this->load->model('model_Observation');
			$this->load->model("model_Patient");
		}

		public function index()
		{
			$this->load->view('login.php');
		}

		public function acceuil()
		{
			// echo "acceuil";
			$this->load->model("model_Patient");
			// $this->load->model("model_patient");
			// $data['NbPat'] = $this->model_patient->CountPatient();
			// $data['NbAtt'] = $this->model_patient->Countattend();

			$patients = $this->model_Patient->CountPatient();
			$NbAtt = $this->model_Patient->Countattend();

			// var_dump($data['patients']);
			// var_dump($data['NbAtt']);exit();

			$this->load->view('index',['patients' => $patients, 'NbAtt' =>$NbAtt]);
		}

		// public function login()
		// {
		// 	$this->load->view('login.php');
		// }
		

	}

?>