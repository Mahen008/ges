<?php

	class Home extends CI_Controller
	{
		
		public function __construct()
		{
			parent :: __construct();
		}

		public function Home()
		{
			$this->load->view('home');
		}
		
		
	}
?>