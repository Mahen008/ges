<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Checkbox extends CI_Controller
	{
		
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('model_check');
		}

		public function index()
		{
			$this->load->view('ajoutCheck');
		}
		

		public function ajout()
		{
			$this->form_validation->set_rules("enCongé","Checkbox",'required');
			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) 
			{
				$data = array(
					"enCongé" => $this->input->post("enCongé")
				);
				// var_dump($data);
				// exit();				

				$this->model_check->insererCheck($data);	
				echo "validation passé";
				// }
				// echo "validation passé";	
			} 
			else 
			{
				echo validation_errors();
			}
			// echo "salut";
			
		}

		
	}
?>