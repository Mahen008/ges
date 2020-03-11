<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Users extends CI_Controller
	{
		
		public function __construct()
		{
			parent :: __construct();
			$this->load->model('model_user');
		}
		
		public function affichageUser()
		{
			$users = $this->model_user->affichUser();
			$this->load->view('affichageUser',['users' => $users]);
		}

		public function creeUser()
		{
			$this->form_validation->set_rules("log","Login",'required');
			$this->form_validation->set_rules("sex","Sexe",'required');
			$this->form_validation->set_rules("roles","Role",'required');
			$this->form_validation->set_rules("pass","Password",'required');


			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) 
			{
				$data = array(
				"login" => $this->input->post("log"),
				"sexe" => $this->input->post("sex"),
				"role" => $this->input->post("roles"),
				//"password" => $this->input->post("pass")
				"password" => md5($this->input->post("pass"))

				);

				//$data['password'] = sha1($this->input->post("pass"));

				if ($this->model_user->insererUser($data)) {
					redirect(base_url()."index.php/Users/affichageUser");
					//echo "validation passé";
				}
				
			} 
			else 
			{
				$this->affichageUser();
			}
			
		}

		//editer un utilisateur
		public function editUser($user_id)
		{
			$unUser = $this->model_user->getUnUser($user_id);
			$this->load->view('editUser',['unUser' => $unUser]);
		}

		//modifier un utilisateur
		public function updateUser($user_id)
		{
			$this->form_validation->set_rules("log","Login",'required');
			$this->form_validation->set_rules("sex","Sexe",'required');
			$this->form_validation->set_rules("roles","Role",'required');
			$this->form_validation->set_rules("pass","Password",'required');

			$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

			if ($this->form_validation->run()) 
			{
				$data = array(
				"login" => $this->input->post("log"),
				"sexe" => $this->input->post("sex"),
				"role" => $this->input->post("roles"),
				"password" => md5($this->input->post("pass"))
				);

				if ($this->model_user->updateUser($user_id,$data)) {
					redirect(base_url()."index.php/Users/affichageUser");
				}
				
			} 
			else 
			{
				$this->editUser($user_id);
			}
		}

		//supprimer un utilisateur
		public function deleteUser($user_id)
		{
			if ($this->model_user->suppUser($user_id)) {
				return redirect(base_url()."index.php/Users/affichageUser");
			}
		}
	}
?>